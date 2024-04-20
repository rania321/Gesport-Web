<?php

namespace App\Controller;
use App\Entity\Vente;
use App\Entity\Produit;

use App\Entity\Panier;
use App\Form\PanierType;
use App\Form\AjouterPanierType;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

#[Route('/panier')]
class PanierController extends AbstractController
{
    private $votreRepository;

    public function __construct(PanierRepository $votreRepository)
    {
        $this->votreRepository = $votreRepository;
    }

    #[Route('/', name: 'app_panier_index', methods: ['GET'])]
    public function indexx(PanierRepository $panierRepository): Response
    {
        $somme =  $panierRepository->sommeMontantQuantite();
        $panier = $panierRepository->findAll();
        
        dump($panier); // Debugging line
        

        return $this->render('panier/index.html.twig', [
            'paniers' => $panier,
            'somme' => $somme,
        ]);
        
    }

    /*#[Route('/', name: 'app_panier_index', methods: ['GET'])]
    public function votreMethodeDeController()
    {
        $somme = $this->votreRepository->sommeMontantQuantite();

        return $this->render('/panier/index.html.twig', [
            'somme' => $somme,
        ]);
    } */


    #[Route('/{idpa}', name: 'app_panier_show', methods: ['GET'])]
    public function show(Panier $panier): Response
    {
        return $this->render('panier/show.html.twig', [
            'panier' => $panier,
        ]);
    }

    #[Route('/{idpa}/edit', name: 'app_panier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Panier $panier, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('panier/edit.html.twig', [
            'panier' => $panier,
            'form' => $form,
        ]);
    }

    #[Route('/{idpa}', name: 'app_panier_delete', methods: ['POST'])]
    public function delete(Request $request, Panier $panier, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$panier->getIdpa(), $request->request->get('_token'))) {
            $entityManager->remove($panier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
    }
    

/*

    #[Route('/ajouter-au-panier/{idp}', name: 'ajouter_au_panier')]
    public function ajouterAuPanier(Request $request, EntityManagerInterface $entityManager, ProduitRepository $produitRepository, $idp): Response
    {
        // Récupérer le produit depuis l'identifiant
        $produit = $produitRepository->find($idp);

        // Vérifier si le produit existe
        if (!$produit) {
            throw $this->createNotFoundException('Le produit n\'existe pas');
        }

        // Créer une nouvelle entrée de panier
        $panierItem = new Panier();
        $panierItem->setidv(1);
        $panierItem->setidp($idp);
        $panierItem->setQuantitep(1);
        $panierItem->setTotalpa(1);

        // Persister et flusher l'entité du panier
        $entityManager->persist($panierItem);
        $entityManager->flush();

        // Rediriger vers une page appropriée après l'ajout au panier
        return $this->redirectToRoute('app_panier_index');
    }*/

}
