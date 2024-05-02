<?php

namespace App\Controller;

use App\Entity\Inscritournoi;
use App\Form\InscritournoiType;
use App\Repository\InscritournoiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/inscritournoi')]
class InscritournoiController extends AbstractController
{
    #[Route('/', name: 'app_inscritournoi_index', methods: ['GET'])]
    public function index(InscritournoiRepository $inscritournoiRepository): Response
    {
        return $this->render('inscritournoi/index.html.twig', [
            'inscritournois' => $inscritournoiRepository->findAll(),
        ]);
    }

    #[Route('/{idit}', name: 'app_inscritournoi_delete', methods: ['POST'])]
    public function delete(Request $request, int $idit, InscritournoiRepository $inscritournoiRepository, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'inscritournoi par son identifiant
        $inscritournoi = $inscritournoiRepository->find($idit);
    
        // Vérifier si l'inscritournoi existe
        if (!$inscritournoi) {
            throw $this->createNotFoundException('Inscritournoi not found');
        }
    
        // Vérifier le jeton CSRF
        if ($this->isCsrfTokenValid('delete'.$inscritournoi->getIdit(), $request->request->get('_token'))) {
            // Supprimer l'inscritournoi
            $entityManager->remove($inscritournoi);
            $entityManager->flush();
        }
    
        // Rediriger vers la liste des inscritournois
        return $this->redirectToRoute('app_inscritournoi_index');
    }

    #[Route('/new', name: 'app_inscritournoi_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $inscritournoi = new Inscritournoi();
        $form = $this->createForm(InscritournoiType::class, $inscritournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($inscritournoi);
            $entityManager->flush();

            return $this->redirectToRoute('app_inscritournoi_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('inscritournoi/new.html.twig', [
            'inscritournoi' => $inscritournoi,
            'form' => $form,
        ]);
    }

    #[Route('/{idit}S', name: 'app_inscritournoi_show', methods: ['GET'])]
    public function show(Inscritournoi $inscritournoi): Response
    {
        return $this->render('inscritournoi/show.html.twig', [
            'inscritournoi' => $inscritournoi,
        ]);
    }

    #[Route('/{idit}/edit', name: 'app_inscritournoi_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Inscritournoi $inscritournoi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(InscritournoiType::class, $inscritournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_inscritournoi_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('inscritournoi/edit.html.twig', [
            'inscritournoi' => $inscritournoi,
            'form' => $form,
        ]);
    }

    
}