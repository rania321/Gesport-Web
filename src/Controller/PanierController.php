<?php

namespace App\Controller;
use App\Entity\Vente;
use App\Entity\Panier;
use App\Form\PanierType;
use App\Form\AjouterPanierType;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
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
    public function index(PanierRepository $panierRepository): Response
    {
        $somme =  $panierRepository->sommeMontantQuantite();

        return $this->render('panier/index.html.twig', [
            'paniers' => $panierRepository->findAll(),
            'somme' => $somme,

        ]);
    }

    #[Route('/new', name: 'app_panier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $panier = new Panier();
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($panier);
            $entityManager->flush();

            return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('panier/new.html.twig', [
            'panier' => $panier,
            'form' => $form,
        ]);
    }

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
#[Route('/confirmer-vente', name: 'confirmer_vente', methods: ['POST'])]
#[ParamConverter('panier', class: Panier::class, options: ['id' => 'idpa'])]
public function confirmerVente(Request $request, EntityManagerInterface $entityManager, Panier $panier): RedirectResponse
{
    // Vérification du token CSRF
    $token = $request->request->get('_token');
    if (!$this->isCsrfTokenValid('confirmer_vente', $token)) {
        throw new \Exception('Invalid CSRF token.');
    }

    // Créer un enregistrement de vente pour chaque élément du panier
    foreach ($panier->getContenu() as $panierItem) {
        // Créer une nouvelle instance de l'entité Vente
        $vente = new Vente();

        // Copier les données pertinentes de l'élément du panier dans la vente
        $vente->setIdp($panierItem->getIdp());
        $vente->setQuantitév($panierItem->getQuantitep());
        $vente->setMontantv($panierItem->getTotalpa());

        // Persister la vente dans la base de données
        $entityManager->persist($vente);
    }

    // Supprimer le contenu du panier
    $entityManager->remove($panier);

    // Enregistrer les modifications dans la base de données
    $entityManager->flush();

    // Rediriger vers la page de confirmation de vente
    return $this->redirectToRoute('app_panier_index');
}
*/


    #[Route('/', name: 'app_panier_index', methods: ['GET'])]
    public function votreMethodeDeController()
    {
        $somme = $this->votreRepository->sommeMontantQuantite();

        return $this->render('/panier/index.html.twig', [
            'somme' => $somme,
        ]);
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
