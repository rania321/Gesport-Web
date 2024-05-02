<?php

namespace App\Controller;

use App\Entity\Vente;
use App\Form\VenteType;
use App\Repository\VenteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/vente')]
class VenteController extends AbstractController
{

   #[Route('/StatProduit', name: 'StatProduit', methods: ['GET'])]
public function indexStat(VenteRepository $venteRepository)
{
    $ventes = $venteRepository->findAll();
    
    return $this->render('StatProduit.html.twig', [
        'ventes' => $ventes,
    ]);
}


    #[Route('/', name: 'app_vente_index', methods: ['GET'])]
    public function index(VenteRepository $venteRepository): Response
    {
        return $this->render('vente/index.html.twig', [
            'ventes' => $venteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_vente_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $vente = new Vente();
        $form = $this->createForm(VenteType::class, $vente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($vente);
            $entityManager->flush();

            return $this->redirectToRoute('app_vente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('vente/new.html.twig', [
            'vente' => $vente,
            'form' => $form,
        ]);
    }

    #[Route('/{idv}', name: 'app_vente_show', methods: ['GET'])]
    public function show(Vente $vente): Response
    {
        return $this->render('vente/show.html.twig', [
            'vente' => $vente,
        ]);
    }

    #[Route('/{idv}/edit', name: 'app_vente_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vente $vente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VenteType::class, $vente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_vente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('vente/edit.html.twig', [
            'vente' => $vente,
            'form' => $form,
        ]);
    }

    #[Route('/{idv}', name: 'app_vente_delete', methods: ['POST'])]
    public function delete(Request $request, Vente $vente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vente->getIdv(), $request->request->get('_token'))) {
            $entityManager->remove($vente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_vente_index', [], Response::HTTP_SEE_OTHER);
    }
}
