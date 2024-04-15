<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\User;
use App\Entity\Activitefavoris;
use App\Form\ActiviteType;
use App\Form\ReservationactiviteType;
use App\Repository\ActiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservationactivite as ReservationactiviteEntity;

#[Route('/activite')]
class ActiviteController extends AbstractController
{
    #[Route('/', name: 'app_activite_index', methods: ['GET'])]
    public function index(ActiviteRepository $activiteRepository): Response
    {
        return $this->render('activite/index.html.twig', [
            'activites' => $activiteRepository->findAll(),
        ]);
    }

    #[Route('/back', name: 'app_activite_indexBack', methods: ['GET'])]
    public function indexBack(ActiviteRepository $activiteRepository): Response
    {
        return $this->render('activite/indexBack.html.twig', [
            'activites' => $activiteRepository->findAll(),
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
    public function show(Activite $activite): Response
    {
        // Récupérez l'utilisateur par défaut (idU=2)
    $user = $this->getDoctrine()->getRepository(User::class)->find(2);

    // Vérifiez si l'activité est favorite pour l'utilisateur
    $isFavorite = $activite->isFavoriteForUser($user);

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

            return $this->redirectToRoute('app_activite_reserv', ['ida' => $activite->getIda()]);
        }

        return $this->renderForm('reservationactivite/new.html.twig', [
            'activite' => $activite,
            'form' => $form,
        ]);
    }

    #[Route('/{ida}/add_to_favorites', name: 'add_to_favorites')]
    public function addToFavorites(Activite $activite): Response
    {
        // Récupérez l'utilisateur par défaut (idU=2)
        $user = $this->getDoctrine()->getRepository(User::class)->find(2);

        // Vérifiez si l'activité est déjà favorite pour l'utilisateur
        $isFavorite = $activite->isFavoriteForUser($user);

        if (!$isFavorite) {
            // Si l'activité n'est pas encore favorite, ajoutez-la aux favoris
            $activiteFavoris = new Activitefavoris();
            $activiteFavoris->setUser($user);
            $activiteFavoris->setActivite($activite);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($activiteFavoris);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_activite_index'); // Redirigez vers la page des activités
    }

    #[Route('/{ida}/remove_from_favorites', name: 'remove_from_favorites')]
    public function removeFromFavorites(Activitefavoris $activiteFavoris): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($activiteFavoris);
        $entityManager->flush();

        return $this->redirectToRoute('app_activite_index'); // Redirigez vers la page des activités
    }
}
