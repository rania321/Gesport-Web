<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\TournoiRepository;
use App\Entity\Tournoi;

class SearchController extends AbstractController
{
    
    #[Route('/search', name: 'app_search')]
    public function searchUser(Request $request, TournoiRepository $repository): Response
    {
        $query = $request->request->get('query');
        $tournois = $repository->searchByNom($query);
        return $this->render('search/index.html.twig', [
            'tournois' => $tournois
        ]);
    }

    
}
