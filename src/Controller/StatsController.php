<?php

namespace App\Controller;
use App\Repository\EquipeRepository;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatsController extends AbstractController
{
    #[Route('/stats', name: 'app_stats')]
    public function index(): Response
    {
        return $this->render('stats/index.html.twig', [
            'controller_name' => 'StatsController',
        ]);
    }

    public function stats(EquipeRepository $equipeRepository): Response
    {
        $stats = $equipeRepository->countEquipesByTournoi();
        dump($stats);
        return $this->render('stats/index.html.twig', [
            'stats' => $stats,
        ]);
    }

}
