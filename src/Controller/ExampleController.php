<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;

class ExampleController extends AbstractController
{


    #[Route('/base', name: 'base')]
     
    public function index(): Response
    {
        // Passer une variable à la vue
        $ma_variable = 'Ceci est une variable';

        return $this->render('base.html.twig', [
            'ma_variable' => $ma_variable,
        ]);
    }

    #[Route('/baseBack', name: 'baseBack')]
     
    public function indexBack(): Response
    {
        // Passer une variable à la vue
        $ma_variable = 'Ceci est une variable';

        return $this->render('baseBack.html.twig', [
            'ma_variable' => $ma_variable,
        ]);
    }

    #[Route('/AfficherProduit', name: 'AfficherProduit')]
     
    public function indexBackAP(): Response
    {
        // Passer une variable à la vue
        $ma_variable = 'Ceci est une variable';

        return $this->render('AfficherProduit.html.twig', [
            'ma_variable' => $ma_variable,
        ]);
    }

    #[Route('/AjouterProduit', name: 'AjouterProduit')]
     
    public function indexBackAjP(): Response
    {
        // Passer une variable à la vue
        $ma_variable = 'Ceci est une variable';

        return $this->render('AjouterProduit.html.twig', [
            'ma_variable' => $ma_variable,
        ]);
    }

    
    #[Route('/FrontAfficherProduit', name: 'FrontAfficherProduit')]
     
    public function indexFrontAfficherProduit(): Response
    {
        // Passer une variable à la vue
        $ma_variable = 'Ceci est une variable';

        return $this->render('FrontAfficherProduit.html.twig', [
            'ma_variable' => $ma_variable,
        ]);
    }

    public function show(Produit $produit): Response
    {
        return $this->render('baseBack.html.twig', [
            'produit' => $produit,
        ]);
    }



  

}