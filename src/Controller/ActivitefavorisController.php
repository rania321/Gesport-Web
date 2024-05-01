<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Activite;
use App\Entity\User;
use App\Entity\Activitefavoris;
use App\Form\ActiviteType;
use App\Form\ReservationactiviteType;
use App\Repository\ActiviteRepository;
use App\Repository\ActivitefavorisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class ActivitefavorisController extends AbstractController
{
    #[Route('/activitefavoris', name: 'app_activitefavoris')]
    public function index(): Response
    {
        return $this->render('activitefavoris/index.html.twig', [
            'controller_name' => 'ActivitefavorisController',
        ]);
    }

    //liste des activites favoris
    #[Route('/favoris', name: 'app_activite_favoris', methods: ['GET'])]
    public function favoris(ActivitefavorisRepository $activitefavorisRepository): Response
    {
        // Récupérer les réservations pour l'utilisateur par défaut avec l'ID 2
        $defaultUser = $this->getDoctrine()->getRepository(User::class)->find(2);
        $activitefavoriss = $activitefavorisRepository->findBy(['user' => $defaultUser]);

        return $this->render('activite/favoris.html.twig', [
            'activitefavoriss' => $activitefavoriss,
        ]);
    }

    //recherche
    #[Route('/rechercheAjax', name: 'rechercheAjax', methods: ['GET'])]
    public function searchAjax(Request $request, ActiviteRepository $repo)
    {
        // Récupérez le paramètre de recherche depuis la requête
        $query = $request->query->get('q');

        // Récupérez les activites correspondants depuis la base de données
        $activites = $repo->findActiviteByName($query);

        // Rendre la vue des activites correspondants
        $html = $this->renderView("activite/index.html.twig", [
            "activites" => $activites,
        ]);

        // Renvoyer la réponse avec le HTML rendu
        return new Response($html);
    }

}
