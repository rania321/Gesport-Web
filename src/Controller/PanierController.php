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
    
    #[Route('/confirmer-vente', name: 'confirmer_vente', methods: ['POST'])]
    public function confirmerVente(EntityManagerInterface $entityManager): Response
    {
        $paniers = $this->votreRepository->findAll();

        if (!$paniers) {
            $this->addFlash('warning', 'Votre panier est vide.');
            return $this->redirectToRoute('app_panier_index');
        }

        foreach ($paniers as $panier) {
            $vente = new Vente();
            $vente->setIdp($panier->getIdp());
            $vente->setQuantitév($panier->getQuantitep());
            $vente->setMontantv($panier->getTotalpa());
            $entityManager->persist($vente);
            $entityManager->remove($panier);
        }

        $entityManager->flush();

        $this->addFlash('success', 'Votre vente a été confirmée avec succès.');

        return $this->redirectToRoute('app_panier_index');
    }


}
