<?php

namespace App\Controller;

use App\Entity\Tournoi; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TournoiRepository;


class TriController extends AbstractController
{
    #[Route('/tri', name: 'app_tri')]
    public function index(): Response
    {
        return $this->render('tournoi/index.html.twig', [
            'tournois' => $tournois,
        ]);
    }


    public function displaySortedByDateASC(TournoiRepository $tournoiRepository)
    {
        $tournois = $this->getDoctrine()->getRepository(Tournoi::class)->findBy([], ['datedebutt' => 'ASC']);

        return $this->render('tournoi/indexBack.html.twig', [
            'tournois' => $tournois,
        ]);
    }

    public function displaySortedByLieuASC(TournoiRepository $tournoiRepository)
    {
        $tournois = $this->getDoctrine()->getRepository(Tournoi::class)->findBy([], ['descrit' => 'ASC']);

        return $this->render('tournoi/indexBack.html.twig', [
            'tournois' => $tournois,
        ]);
    }

    public function displaySortedByStatutASC(TournoiRepository $tournoiRepository)
    {
        $tournois= $this->getDoctrine()->getRepository(Tournoi::class)->findBy([], ['statutt' => 'ASC']);

        return $this->render('tournoi/indexBack.html.twig', [
            'tournois' => $tournois,
        ]);
    }

   

    public function displaySortedByDateDESC(TournoiRepository $tournoiRepository)
    {
        $tournois= $this->getDoctrine()->getRepository(Tournoi::class)->findBy([], ['datedebutt' => 'DESC']);

        return $this->render('tournoi/indexBack.html.twig', [
            'tournois' => $tournois,
        ]);
    }

    public function displaySortedByLieuDESC(TournoiRepository $tournoiRepository)
    {
        $tournois = $this->getDoctrine()->getRepository(Tournoi::class)->findBy([], ['descrit' => 'DESC']);

        return $this->render('tournoi/indexBack.html.twig', [
            'tournois' => $tournois,
        ]);
    }

    public function displaySortedByStatutDESC(TournoiRepository $tournoiRepository)
    {
        $tournois= $this->getDoctrine()->getRepository(Tournoi::class)->findBy([], ['statutt' => 'DESC']);

        return $this->render('tournoi/indexBack.html.twig', [
            'tournois' => $tournois,
        ]);
    }
}
