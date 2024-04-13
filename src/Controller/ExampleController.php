<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
    
}