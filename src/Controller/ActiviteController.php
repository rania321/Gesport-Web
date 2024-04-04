<?php

namespace App\Controller;

use App\Entity\Activite;
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
                // Move uploaded file to desired location
                // Example:
                $uploadsDirectory = $this->getParameter('uploads_directory');
                $imageFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
                $imageFile->move(
                    $uploadsDirectory,
                    $imageFileName
                );
                // Set image file name to activite entity
                $activite->setImagea($imageFileName);
            }
            $entityManager->persist($activite);
            $entityManager->flush();

            return $this->redirectToRoute('app_activite_indexBack', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('activite/new.html.twig', [
            'activite' => $activite,
            'form' => $form,
        ]);
    }

    #[Route('/{ida}', name: 'app_activite_show', methods: ['GET'])]
    public function show(Activite $activite): Response
    {
        return $this->render('activite/show.html.twig', [
            'activite' => $activite,
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
}
