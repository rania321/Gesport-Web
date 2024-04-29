<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\User;
use App\Entity\Activitefavoris;
use App\Form\ActiviteType;
use App\Form\ReservationactiviteType;
use App\Repository\ActiviteRepository;
use App\Repository\ActivitefavorisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservationactivite as ReservationactiviteEntity;

#[Route('/activite')]
class ActiviteController extends AbstractController
{
    #[Route('/', name: 'app_activite_index', methods: ['GET'])]
    public function index(ActiviteRepository $activiteRepository, Request $request): Response
    {

        $successMessage = 'Bienvenue! Choisissez lactivité qui vous correspond !';
        $this->readTextWithResponsiveVoice($successMessage);

        // Stocker le message dans une variable de session pour qu'il soit accessible côté client
        $request->getSession()->set('success_message', $successMessage);
        return $this->render('activite/index.html.twig', [
            'activites' => $activiteRepository->findAll(),
            'successMessage' => $request->getSession()->get('success_message'), // Passer le message de succès au template
        ]);
    }
    private function readTextWithResponsiveVoice(string $text): void
    {
        echo '<script>responsiveVoice.speak("' . $text . '", "French Female", {volume: 1});</script>';
    }

    #[Route('/back', name: 'app_activite_indexBack', methods: ['GET'])]
    public function indexBack(ActiviteRepository $activiteRepository, Request $request): Response
    {
        // Récupérer le paramètre de tri depuis la requête
        $tri = $request->query->get('tri');
        $order = $request->query->get('order');
        $activites = $activiteRepository->findAll();
         // Effectuez le tri en fonction du paramètre
        if ($tri === 'noma') {
            // Tri par date
            usort($activites, function($a, $b) use ($order) {
                return ($order === 'desc' ? -1 : 1) * ($a->getNoma() <=> $b->getNoma());
            });
        } elseif ($tri === 'dispoa') {
            // Tri par catégorie
            usort($activites, function($a, $b) use ($order) {
                return ($order === 'desc' ? -1 : 1) * strcmp($a->getDispoa(), $b->getDispoa());
            });
        } elseif ($tri === 'descria') {
            // Tri par statut
            usort($activites, function($a, $b) use ($order) {
                return ($order === 'desc' ? -1 : 1) * strcmp($a->getDescria(), $b->getDescria());
            });
        }
        return $this->render('activite/indexBack.html.twig', [
            'activites' => $activites,
        ]);
    }

    #[Route('/new', name: 'app_activite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imagea')->getData();
            if ($imageFile) {
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imageFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
                $imageFile->move($uploadsDirectory, $imageFileName);
                $activite->setImagea($imageFileName);
            } else {
                // Si aucun fichier n'est téléchargé, définissez le champ imagea comme null
                $activite->setImagea(null);
            }
    
            $entityManager->persist($activite);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_activite_indexBack', [], Response::HTTP_SEE_OTHER);
        }
        else{
            dump($form->getErrors(true, false));
            return $this->renderForm('activite/new.html.twig', [
                'activite' => $activite,
                'form' => $form,
            ]);
        }
        
    }


    #[Route('/{ida}', name: 'app_activite_show', methods: ['GET'])]
    public function show(Activite $activite, ActiviteRepository $activiteRepository, Request $request): Response
    {
        // Récupérez l'utilisateur par défaut (idU=2)
    $user = $this->getDoctrine()->getRepository(User::class)->find(2);

    // Vérifier si l'activité est favorite pour l'utilisateur actuel
    $isFavorite = $activiteRepository->isFavoriteForUser($activite, $user);

    return $this->render('activite/show.html.twig', [
        'activite' => $activite,
        'isFavorite' => $isFavorite, // Passer la variable isFavorite au modèle Twig
    ]);
    }

    #[Route('/{ida}/edit', name: 'app_activite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_activite_indexBack', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('activite/edit.html.twig', [
            'activite' => $activite,
            'form' => $form,
        ]);
    }

    #[Route('/{ida}', name: 'app_activite_delete', methods: ['POST'])]
    public function delete(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activite->getIda(), $request->request->get('_token'))) {
            $entityManager->remove($activite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_activite_indexBack', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/reserv/{ida}', name: 'app_activite_reserv')]
    public function reserv(Request $request, Activite $activite): Response
    {
        // Create a new Reservation entity object
        $reservationactiviteEntity = new ReservationactiviteEntity();
        $form = $this->createForm(ReservationactiviteType::class, $reservationactiviteEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationactiviteEntity->setIda($activite);


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationactiviteEntity);
            $entityManager->flush();
            // Lecture du message de succès avec ResponsiveVoice
            $successMessage = 'Veuillez réserver lactivité.'. $reservationactiviteEntity->getIda()->getNoma();
            $this->readTextWithResponsiveVoice($successMessage);

            // Stocker le message dans une variable de session pour qu'il soit accessible côté client
            $request->getSession()->set('success_message', $successMessage);

            return $this->redirectToRoute('app_activite_reserv', ['ida' => $activite->getIda()]);
        }

        return $this->renderForm('reservationactivite/new.html.twig', [
            'activite' => $activite,
            'form' => $form,
            'successMessage' => $request->getSession()->get('success_message'), // Passer le message de succès au template
        ]);
    }

    //add love react
    #[Route('/{ida}/love', name: 'ajouter_love_activite', methods: ['POST'])]
    public function ajouterLove(Activite $activite, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'utilisateur avec l'ID 2 par défaut
        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $user = $userRepository->find(2);

        // Vérifier si l'utilisateur a déjà réagi "love" à cette activité
        $activiteFavorisRepository = $this->getDoctrine()->getRepository(Activitefavoris::class);
        $activiteFavoris = $activiteFavorisRepository->findOneBy(['activite' => $activite, 'user' => $user]);

        if ($activiteFavoris) {
            return new JsonResponse(['message' => 'Vous avez déjà réagi love à cette activité.'], 400);
        }

        // Créer une nouvelle réaction "love"
        $activiteFavoris = new Activitefavoris();
        $activiteFavoris->setActivite($activite);
        $activiteFavoris->setUser($user);

        // Enregistrer la réaction "love" dans la base de données
        $entityManager->persist($activiteFavoris);
        $entityManager->flush();

        // Rediriger vers la page de détails de l'activité
        return $this->redirectToRoute('app_activite_show', ['ida' => $activite->getIda()]);
    }

    //delete love react
    #[Route('/{ida}/unlove', name: 'supprimer_love_activite', methods: ['DELETE'])]
    public function supprimerLove(Activite $activite, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'utilisateur avec l'ID 2 par défaut
        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $user = $userRepository->find(2);

        // Vérifier si l'utilisateur a réagi "love" à cette activité
        $activiteFavorisRepository = $this->getDoctrine()->getRepository(Activitefavoris::class);
        $activiteFavoris = $activiteFavorisRepository->findOneBy(['activite' => $activite, 'user' => $user]);

        if (!$activiteFavoris) {
            return new JsonResponse(['message' => 'Vous n\'avez pas réagi love à cette activité.'], 400);
        }

        // Supprimer la réaction "love" de la base de données
        $entityManager->remove($activiteFavoris);
        $entityManager->flush();

        // Rediriger vers la page de détails de l'activité
        return $this->redirectToRoute('app_activite_show', ['ida' => $activite->getIda()]);
    }
    
    //liste des activites favoris
    #[Route('/favoris', name: 'app_activite_favoris', methods: ['GET'])]
    public function favoris(ActiviteRepository $activiteRepository): Response
    {
        return $this->render('activite/favoris.html.twig', [
            'activites' => $activiteRepository->findAll(),
        ]);
    }

}
