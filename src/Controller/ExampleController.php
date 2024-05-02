<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class ExampleController extends AbstractController
{
    #[Route('/front', name: 'base')]
     
    public function index(): Response
    {
        // Passer une variable à la vue
        $ma_variable = 'Ceci est une variable';

        return $this->render('base.html.twig', [
            'ma_variable' => $ma_variable,
        ]);
    }
    #[Route('/back', name: 'baseBack')]
     
    public function indexBack(): Response
    {
        // Passer une variable à la vue
        $ma_variable = 'Ceci est une variable';

        return $this->render('baseBack.html.twig', [
            'ma_variable' => $ma_variable,
        ]);
    }
    
  

}