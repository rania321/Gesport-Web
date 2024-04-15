<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Form\AjouterPanierType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/produit')]
class ProduitController extends AbstractController
{

    #[Route('/', name: 'app_produit_index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }


    #[Route('/base', name: 'app_produit_indexB', methods: ['GET'])]
    public function indexB(ProduitRepository $ProduitRepository): Response
    {
        return $this->render('produit/indexB.html.twig', [
            'produits' => $ProduitRepository->findAll(),
        ]);
    }

    

    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('app_produit_indexB', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{idp}', name: 'app_produit_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/{idp}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_produit_indexB', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{idp}', name: 'app_produit_delete', methods: ['POST'])]
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getIdp(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produit_indexB', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/produit/nom/{idp}', name: 'get_produit_nom')]
    public function getProduitNom(int $idp): Response
    {
        // Obtenez le référentiel de l'entité Produit
        $repository = $this->getDoctrine()->getRepository(Produit::class);

        // Recherchez le produit par son ID
        $produit = $repository->find($idp);

        // Vérifiez si le produit existe
        if (!$produit) {
            throw $this->createNotFoundException('Produit non trouvé avec l\'ID: '.$idp);
        }

        // Récupérez le nom du produit
        $nomProduit = $produit->getNomp();

        // Retournez le nom du produit
        return new Response('Nom du produit avec l\'ID '.$idp.' est: '.$nomProduit);
    }



   #[Route('/creer-panier', name: 'creer_panier', methods: ['POST'])]
public function creerPanier(Request $request, EntityManagerInterface $entityManager): Response
{
    // Récupérer l'idp envoyé depuis le formulaire
    $idp = $request->request->get('idp');

    // Vérifier si l'idp est valide
    if (!$idp) {
        return new Response('ID du produit non spécifié', Response::HTTP_BAD_REQUEST);
    }

    // Créer un nouveau panier avec l'idp spécifié
    $panier = new Panier();
    $panier->setIdp($idp); // Assigner l'idp au panier

    // Persistez le nouveau panier dans la base de données
    $entityManager->persist($panier);
    $entityManager->flush();

    // Réponse de réussite
    return new Response('Panier créé avec succès', Response::HTTP_OK);
}

}
