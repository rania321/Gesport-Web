<?php

namespace App\Controller;

use App\Entity\Reservationactivite;
use App\Form\ReservationactiviteType;
use App\Repository\ReservationactiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\ValidationException;

#[Route('/reservationactivite')]
class ReservationactiviteController extends AbstractController
{
    #[Route('/', name: 'app_reservationactivite_index', methods: ['GET'])]
    public function index(ReservationactiviteRepository $reservationactiviteRepository): Response
    {
        // Récupérer les réservations pour l'utilisateur par défaut avec l'ID 2
        $defaultUser = $this->getDoctrine()->getRepository(User::class)->find(2);
        $reservationactivites = $reservationactiviteRepository->findBy(['idu' => $defaultUser]);

        return $this->render('reservationactivite/index.html.twig', [
            'reservationactivites' => $reservationactivites,
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
        
        return $this->render('reservationactivite/indexBack.html.twig', [
            'reservationactivites' => $reservationactiviteRepository->findAll(),
            'statistiques' => $statistiques,
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

            return $this->redirectToRoute('app_reservationactivite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservationactivite/new.html.twig', [
            'reservationactivite' => $reservationactivite,
            'form' => $form,
        ]);
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
    public function editBack(Request $request, Reservationactivite $reservationactivite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationactiviteType::class, $reservationactivite, [
            'editMode' => true, // Le formulaire est en mode édition
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
        public function newForActivity(Request $request, int $activityId): Response
        {
            $activite = $this->getDoctrine()->getRepository(Activite::class)->find($activityId);
            
            if (!$activite) {
                throw $this->createNotFoundException('Activité non trouvée.');
            }

            $reservation = new Reservationactivite();
            $reservation->setStatutr("En cours");
            $reservation->setIda($activite);

            // Définir le client par défaut avec l'id 2
            $defaultUser = $this->getDoctrine()->getRepository(User::class)->find(2);
            if (!$defaultUser) {
                throw $this->createNotFoundException('Utilisateur par défaut non trouvé.');
            }
            $reservation->setIdu($defaultUser);

            $form = $this->createForm(ReservationactiviteType::class, $reservation,[
                'editMode' => false, // Le formulaire est en mode ajout
            ]);
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($reservation);
                $entityManager->flush();

                return $this->redirectToRoute('app_reservationactivite_index');
            }

            return $this->render('reservationactivite/new.html.twig', [
                'activite' => $activite,
                'form' => $form->createView(),
            ]);
        }

        //pdfXqrcode
        #[Route('/{idr}/generate-pdf', name: 'app_reservationactivite_generate_pdf', methods: ['GET'])]
        public function generatePDF(Reservationactivite $reservationactivite): Response
        {
        // Vérifier si la réservation est confirmée
        if ($reservationactivite->getStatutr() !== 'confirmée') {
        throw $this->createNotFoundException('Impossible de générer un PDF pour une réservation non confirmée.');
        } // Créer une instance de Dompdf
                $options = new Options();
                $options->set('isHtml5ParserEnabled', true);
                $dompdf = new Dompdf($options);
            
                // Construction du contenu HTML du PDF
                $html = '<html>';
                $html .= '<body>';
                $html .= '<h1>Réservation</h1>';
                $html .= '<p>ID de la réservation : ' . $reservationactivite->getIdr() . '</p>';
                // Ajouter d'autres détails de la réservation ici...

                $writer = new PngWriter();

                // Create QR code
                $qrCode = QrCode::create($reservationactivite->getIda()->getNoma())
                    ->setEncoding(new Encoding('UTF-8'))
                    ->setErrorCorrectionLevel(ErrorCorrectionLevel::Low)
                    ->setSize(300)
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
                
                    // Ajouter le QR code encodé en base64 au HTML
                    $html .= '<img src="data:image/png;base64,' . $base64Image . '" alt="QR Code"/>';
            
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


}
