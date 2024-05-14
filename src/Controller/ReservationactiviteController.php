<?php

namespace App\Controller;

use App\Entity\Reservationactivite;
use App\Form\ReservationactiviteType;
use App\Repository\ReservationactiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Activite;
use App\Entity\User;
use Dompdf\Dompdf;
use Dompdf\Options;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Response\QrCodeResponse;
use Endroid\QrCode\Writer\PngWriter;
use DateTime;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\ValidationException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

#[Route('/reservationactivite')]
class ReservationactiviteController extends AbstractController
{

    #[Route('/', name: 'app_reservationactivite_index', methods: ['GET'])]
    public function index(ReservationactiviteRepository $reservationactiviteRepository, Request $request, SessionInterface $session): Response
    {
        $user = $this->getUser();
    
            if (!$user) {
                // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
                return $this->redirectToRoute('app_login');
            }
        // Récupérer les réservations pour l'utilisateur par défaut avec l'ID 2
        $defaultUser = $this->getDoctrine()->getRepository(User::class)->find(2);
        $reservationactivites = $reservationactiviteRepository->findBy(['idu' => $user]);

        $successMessage = 'Vous trouvez ici toutes vos réservations. Si votre réservation est confirmée, veuillez consulter votre boite mail ou téléchargez le pdf en cliquant dessous';
        $this->readTextWithResponsiveVoice($successMessage);

        // Stocker le message dans une variable de session pour qu'il soit accessible côté client
        $request->getSession()->set('success_message', $successMessage);

        return $this->render('reservationactivite/index.html.twig', [
            'reservationactivites' => $reservationactivites,
            'successMessage' => $request->getSession()->get('success_message'), // Passer le message de succès au template
        ]);
    }

    #[Route('/back', name: 'app_reservationactivite_indexBack', methods: ['GET'])]
    public function indexBack(ReservationactiviteRepository $reservationactiviteRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entites = $entityManager->getRepository(ReservationActivite::class)->findAll();
        
        
        $statistiques = [
            'en_cours' => 0,
            'confirmées' => 0,
        ];
        
        foreach ($entites as $entite) {
            if ($entite->getStatutr() == 'En cours') {
                $statistiques['en_cours']++;
            } elseif ($entite->getStatutr() == 'confirmée') {
                $statistiques['confirmées']++;
            }
        }

        $nombreReservations = $reservationactiviteRepository->countTotalReservations();
        // Utiliser le repository pour trouver l'heure la plus populaire
        $mostPopularHourArray = $reservationactiviteRepository->findMostPopularHour();

        // Extraire l'heure la plus populaire du tableau
        $mostPopularHour = '';
        if (!empty($mostPopularHourArray)) {
            $mostPopularHour = reset($mostPopularHourArray);
        }

        $fideleClients = $reservationactiviteRepository->findClientFidele();

        return $this->render('reservationactivite/indexBack.html.twig', [
            'reservationactivites' => $reservationactiviteRepository->findFutureReservations(),
            'statistiques' => $statistiques,
            'nombreReservations' => $nombreReservations,
            'mostPopularHour' => $mostPopularHour,
            'fideleClients' => $fideleClients,
        ]);
    }


    #[Route('/new', name: 'app_reservationactivite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationactivite = new Reservationactivite();
        $reservationactivite->setStatutr("En cours");
        $form = $this->createForm(ReservationactiviteType::class, $reservationactivite,[
            'editMode' => false, // Le formulaire est en mode ajout
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationactivite);
            $entityManager->flush();
             // Lecture du message de succès avec ResponsiveVoice
             $successMessage = 'Veuillez réserver lactivité.'. $reservationactivite->getIda()->getNoma();
            $this->readTextWithResponsiveVoice($successMessage);

            // Stocker le message dans une variable de session pour qu'il soit accessible côté client
            $request->getSession()->set('success_message', $successMessage);

            return $this->redirectToRoute('app_reservationactivite_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservationactivite/new.html.twig', [
            'reservationactivite' => $reservationactivite,
            'form' => $form,
            'successMessage' => $request->getSession()->get('success_message'), // Passer le message de succès au template
        ]);
    }
    private function readTextWithResponsiveVoice(string $text): void
    {
        echo '<script>responsiveVoice.speak("' . $text . '", "French Female", {volume: 1});</script>';
    }

    #[Route('/{idr}/show', name: 'app_reservationactivite_show', methods: ['GET'])]
    public function show(Reservationactivite $reservationactivite): Response
    {
        return $this->render('reservationactivite/show.html.twig', [
            'reservationactivite' => $reservationactivite,
        ]);
    }

    #[Route('/{idr}', name: 'app_reservationactivite_showBack', methods: ['GET'])]
    public function showBack(Reservationactivite $reservationactivite): Response
    {
        return $this->render('reservationactivite/showBack.html.twig', [
            'reservationactivite' => $reservationactivite,
        ]);
    }

    #[Route('/{idr}/edit', name: 'app_reservationactivite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservationactivite $reservationactivite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationactiviteType::class, $reservationactivite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservationactivite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservationactivite/edit.html.twig', [
            'reservationactivite' => $reservationactivite,
            'form' => $form,
        ]);
    }

    #[Route('/{idr}/editBack', name: 'app_reservationactivite_editBack', methods: ['GET', 'POST'])]
    public function editBack(Request $request, Reservationactivite $reservationactivite, EntityManagerInterface $entityManager, Reservationactivite $reservation): Response
    {
        $form = $this->createForm(ReservationactiviteType::class, $reservationactivite, [
            'editMode' => true, // Le formulaire est en mode édition
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            // Générer le PDF
        $pdfContent = $this->generatePDF($reservationactivite);

            // Créer une nouvelle instance de PHPMailer
           $mail = new PHPMailer(true);
           $mail->SMTPDebug = false;

   
           try {
               // Paramètres du serveur
              $mail->isSMTP();

                $mail->Host = 'smtp-mail.outlook.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'rania.guelmami@esprit.tn';
                $mail->Password = '211JFT4989@';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
   
               // Destinataires
               $mail->setFrom('rania.guelmami@esprit.tn', 'Service de Reservation');
               $mail->addAddress($reservationactivite->getIdu()->getEmailu());
   
               // Contenu
               $mail->isHTML(true);
               $mail->Subject = 'Confirmation de la reservation ' ;
                // Rendre la vue Twig en chaîne HTML
                $htmlContent = $this->renderView('activite/emailPerso.html.twig', [
                    'reservation' => $reservation,
                ]);
                $mail->Body = $htmlContent;

                // Attacher le PDF à l'e-mail
            $mail->addStringAttachment($pdfContent, 'reservation.pdf', 'base64', 'application/pdf');
               // Envoyer l'email
               $mail->send();
           } catch (Exception $e) {
               echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
           }
            // Flush des changements dans la base de données
            $entityManager->flush();
            return $this->redirectToRoute('app_reservationactivite_indexBack', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservationactivite/editBack.html.twig', [
            'reservationactivite' => $reservationactivite,
            'form' => $form,
        ]);
    }

    #[Route('/{idr}', name: 'app_reservationactivite_delete', methods: ['POST'])]
    public function delete(Request $request, Reservationactivite $reservationactivite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationactivite->getIdr(), $request->request->get('_token'))) {
            $entityManager->remove($reservationactivite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservationactivite_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{idr}/back', name: 'app_reservationactivite_deleteBack', methods: ['POST'])]
    public function deleteBack(Request $request, Reservationactivite $reservationactivite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationactivite->getIdr(), $request->request->get('_token'))) {
            $entityManager->remove($reservationactivite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservationactivite_indexBack', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/new/{activityId}', name: 'app_reservation_new_for_activity', methods: ['GET', 'POST'])]
        public function newForActivity(Request $request, int $activityId,SessionInterface $session): Response
        {
            $user = $this->getUser();
    
            if (!$user) {
                // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
                return $this->redirectToRoute('app_login');
            }
            
            $activite = $this->getDoctrine()->getRepository(Activite::class)->find($activityId);
            
            if (!$activite) {
                throw $this->createNotFoundException('Activité non trouvée.');
            }

            $reservation = new Reservationactivite();
            $reservation->setStatutr("En cours");
            $reservation->setIda($activite);

            // Définir le client par défaut avec l'id 2
         /*   $defaultUser = $this->getDoctrine()->getRepository(User::class)->find(2);
            if (!$defaultUser) {
                throw $this->createNotFoundException('Utilisateur par défaut non trouvé.');
            }
            $reservation->setIdu($defaultUser);*/

            $reservation->setIdu($user);

            

            $form = $this->createForm(ReservationactiviteType::class, $reservation,[
                'editMode' => false, // Le formulaire est en mode ajout
            ]);
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($reservation);
                // Lecture du message de succès avec ResponsiveVoice
                $successMessage = 'Votre reservation';
                $this->readTextWithResponsiveVoice($successMessage);

                // Stocker le message dans une variable de session pour qu'il soit accessible côté client
                $request->getSession()->set('success_message', $successMessage);

                $entityManager->flush();
                return $this->redirectToRoute('app_reservationactivite_index');
            }

            return $this->render('reservationactivite/new.html.twig', [
                'activite' => $activite,
                'form' => $form->createView(),
                'successMessage' => $request->getSession()->get('success_message'), // Passer le message de succès au template
            ]);
        }

        //pdfXqrcode
        #[Route('/{idr}/generate-pdf', name: 'app_reservationactivite_generate_pdf', methods: ['GET'])]
        public function generatePDF(Reservationactivite $reservationactivite): Response
        {
         // Créer une instance de Dompdf
                $options = new Options();
                $options->set('isHtml5ParserEnabled', true);
                $imagePath = $this->getParameter('kernel.project_dir') . '/public/FrontOffice/img/logo1.png';
                $imageBase64 = $this->imageToBase64($imagePath);
                $dompdf = new Dompdf($options);
            
                
                // Construction du contenu HTML du PDF
                $html = '<html>';
                $html .= '<body>';
                
                // Ajouter le cadre
                $html .= '<div style="border: 2px solid #17447a; padding: 20px; margin: 20px;">';

                // Ajouter le logo avec asset()
                
                $html .= '<img src="'. $imageBase64 .'" alt="Logo" style="width: 132px; height: 87px;">';
                

                // Ajouter la date actuelle
                $html .= '<div style="text-align: right; margin-bottom: 20px; color: #17447a;">';
                $html .= '<p>Date: ' . date('d/m/Y') . '</p>';
                $html .= '</div>';

                // Ajouter le titre
                $html .= '<div style="text-align: center; margin-bottom: 20px;">';
                $html .= '<h1>Réservation confirmée !</h1>';
                $html .= '</div>';

                $html .= '<div style="text-align: center;">';
                $html .= '<br>Nous avons le plaisir de vous confirmer votre réservation N°'. $reservationactivite->getIdr() .
                '<br>Vous trouverez ci-dessous les détails de votre réservation. ' ;
                $html .= '</div>';
                $html .= '<br><br>';
                // Création du tableau pour les détails de la réservation
                $html .= '<table style="width:100%"; border-collapse: collapse; margin-bottom:20px;">';
                $html .= '<tr><td style="width:30%; padding:10px;"><b>Cher(e) :</b></td><td style="padding:10px;">' . $reservationactivite->getIdu()->getPrenomu() . ' ' . $reservationactivite->getIdu()->getNomu() . '</td></tr>';
                $html .= '<tr><td style="width:30%; padding:10px;"><b>Activité :</b></td><td style="padding:10px;">' . $reservationactivite->getIda()->getNoma() . '</td></tr>';
                $html .= '<tr><td style="width:30%; padding:10px;"><b>Date :</b></td><td style="padding:10px;">' . $reservationactivite->getDatedebutr()->format('d/m/Y') . '</td></tr>';
                $html .= '<tr><td style="width:30%; padding:10px;"><b>Heure :</b></td><td style="padding:10px;">' . $reservationactivite->getHeurer() . '</td></tr>';
                $html .= '<tr><td style="width:30%; padding:10px;"><b>Statut :</b></td><td style="padding:10px;">' . $reservationactivite->getStatutr() . '</td></tr>';
                $html .= '</table>';
                

                $writer = new PngWriter();

                // Create QR code
                $qrCode = QrCode::create($reservationactivite->getIda()->getNoma())
                    ->setEncoding(new Encoding('UTF-8'))
                    ->setErrorCorrectionLevel(ErrorCorrectionLevel::Low)
                    ->setSize(200)
                    ->setMargin(10)
                    ->setRoundBlockSizeMode(RoundBlockSizeMode::Margin)
                    ->setForegroundColor(new Color(0, 0, 0))
                    ->setBackgroundColor(new Color(255, 255, 255));

                // Create generic logo
                $logo = Logo::create('BackOffice/images/favicon.png')
                    ->setResizeToWidth(50)
                    ->setPunchoutBackground(true)
                ;

                // Create generic label
                $label = Label::create('Label')
                    ->setTextColor(new Color(255, 0, 0));

                    $result = (new PngWriter())->write($qrCode);

                    // Validate the result
                    (new PngWriter())->validateResult($result, $reservationactivite->getIda()->getNoma());
                
                    // Convertir les données de l'image en base64
                    $imageData = $result->getString();
                    $base64Image = base64_encode($imageData);
                
                    $html .= '<div style="text-align:center;">';
                    // Ajouter le QR code encodé en base64 au HTML
                    $html .= '<img src="data:image/png;base64,' . $base64Image . '" alt="QR Code"/>';
                    $html .= '</div>';
                    $html .= '<div style="text-align: center;">';
                    $html .= '<br>Présentez ce QR code pour y accéder ! <br><br><b>Centre Sportif, 123 Rue de la Paix, 75000 Ariana,nTel : 99646424 ,Email : info@centresportif.com</b>';
                    $html .= '</div>';
            
                    $html .= '</div>'; // fermer le cadre
                $html .= '</body>';
                $html .= '</html>';
            
                // Charger le contenu HTML dans Dompdf
                $dompdf->loadHtml($html);
            
                // Rendu du PDF
                $dompdf->render();
            
                // Nom du fichier PDF
                $fileName = 'reservation_' . $reservationactivite->getIdr() . '.pdf';
            
                // Envoi du PDF en sortie
                return new Response(
                    $dompdf->output(),
                    Response::HTTP_OK,
                    array(
                        'Content-Type' => 'application/pdf',
                        'Content-Disposition' => 'attachment; filename="' . $fileName . '"'
                    )
                );
        }

        private function imageToBase64(string $path): string
    {
        $file = new File($path);
        $data = base64_encode(file_get_contents($file->getPathname()));
        return 'data:' . $file->getMimeType() . ';base64,' . $data;
    }

    #[Route('/back/archive', name: 'app_reservationactivite_archive', methods: ['GET'])]
    public function archive(Request $request): Response
    {
        // Récupérer les réservations qui ont dépassé la date d'aujourd'hui
        $archiveReservations = $this->getDoctrine()->getRepository(Reservationactivite::class)->findArchiveReservations();

        return $this->render('reservationactivite/archive.html.twig', [
            'archiveReservations' => $archiveReservations,
        ]);
    }


}
