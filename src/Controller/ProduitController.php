<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Produit;
use App\Entity\Vente;
use App\Form\ProduitType;
use App\Form\PanierType;
use Symfony\Component\HttpFoundation\JsonResponse;

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



    #[Route('/ajouter-au-panier/{idp}', name: 'ajouter_au_panier', methods: ['POST'])]
    public function ajouterAuPanier(int $idp, Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $produit = $entityManager->getRepository(Produit::class)->find($idp);
        
        if (!$produit) {
            return new JsonResponse(['success' => false, 'message' => 'Produit non trouvé'], 404);
        }
    
        $quantite = $request->request->get('quantite'); // Retrieve quantite from request
        $prixp = $produit->getPrixp(); // Retrieve prixp from produit entity
    
        // Calculate total price
        $totalpa = $quantite * $prixp;
    
        $panier = new Panier();
        $panier->setQuantitep($quantite);
        $panier->setTotalpa($totalpa); // Set total price
        $panier->setIdp($produit);
        $panier->setIdv($this->getVenteById($entityManager, 1)); // Assuming you have a method to get vente by ID
            
        $entityManager->persist($panier);
        $entityManager->flush();
        
        return new JsonResponse(['success' => true, 'message' => 'Produit ajouté au panier avec succès']);
    }
    
    
    
    
    
     private function getVenteById(EntityManagerInterface $entityManager, int $id): ?Vente
     {
         return $entityManager->getRepository(Vente::class)->find($id);
     }


     
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
       $idp = 0;
       
       // Récupérer l'idp envoyé depuis le formulaire
       $idp = $request->request->get('idp');
   
       // Vérifier si l'idp est valide
       if (!$idp) {
           return new Response('ID du produit non spécifié', Response::HTTP_BAD_REQUEST);
       }
   
       // Récupérer le produit par son ID
       $produit = $this->getpbyid($idp);
   
       // Vérifier si le produit existe
       if (!$produit) {
           return new Response('Produit non trouvé', Response::HTTP_NOT_FOUND);
       }
   
       // Créer un nouveau panier avec le produit spécifié
       $panier = new Panier();
       $panier->setIdp($produit); // Assigner le produit au panier
   
       // Persistez le nouveau panier dans la base de données
       $entityManager->persist($panier);
       $entityManager->flush();
   
       // Réponse de réussite
       return new Response('Panier créé avec succès', Response::HTTP_OK);
   }

   public function getpbyid(int $id): ?Produit
   {
       $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id);
   
       return $produit;
   }




   

}
