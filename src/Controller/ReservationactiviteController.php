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

#[Route('/reservationactivite')]
class ReservationactiviteController extends AbstractController
{
    #[Route('/', name: 'app_reservationactivite_index', methods: ['GET'])]
    public function index(ReservationactiviteRepository $reservationactiviteRepository): Response
    {
        return $this->render('reservationactivite/index.html.twig', [
            'reservationactivites' => $reservationactiviteRepository->findAll(),
        ]);
    }

    #[Route('/back', name: 'app_reservationactivite_indexBack', methods: ['GET'])]
    public function indexBack(ReservationactiviteRepository $reservationactiviteRepository): Response
    {
        return $this->render('reservationactivite/indexBack.html.twig', [
            'reservationactivites' => $reservationactiviteRepository->findAll(),
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

    #[Route('/{idr}', name: 'app_reservationactivite_show', methods: ['GET'])]
    public function show(Reservationactivite $reservationactivite): Response
    {
        return $this->render('reservationactivite/show.html.twig', [
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
}
