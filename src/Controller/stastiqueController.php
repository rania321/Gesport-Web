<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reclamation;
use App\Entity\Response as ResponseEntity;
use App\Repository\ReclamationRepository;
use App\Repository\ResponseRepository;

class stastiqueController extends AbstractController
{
    #[Route('/stastique', name: 'app_stastique')]
    public function index(ReclamationRepository $reclamationRepository, ResponseRepository $responseRepository): Response
    {
        $totalReclamationsCount = $reclamationRepository->countReclamations();
        $totalResponsesCount = $responseRepository->countResponses();
        $totalTraiteeReClamationsCount = $reclamationRepository->countReclamationsByStatus('traitee');
        $totalNonTraiteeReClamationsCount = $reclamationRepository->countReclamationsByStatus('non traitee');
        $reclamationsForTenLastMonths = $reclamationRepository->countReclamationsByMonth();

        //dump all the data
        // dd($totalReclamationsCount, $totalResponsesCount, $totalTraiteeReClamationsCount, $totalNonTraiteeReClamationsCount, $reclamationsForTenLastMonths);
        return $this->render('stastique/index.html.twig', [
            'totalReclamationsCount' => $totalReclamationsCount,
            'totalResponsesCount' => $totalResponsesCount,
            'totalTraiteeReclamationsCount' => $reclamationRepository->countReclamationsByStatus('traitee'),
            'totalNonTraiteeReclamationsCount' => $reclamationRepository->countReclamationsByStatus('non traitee'),
            'reclamationsForTenLastMonths' => $reclamationsForTenLastMonths,
        ]);
    
    }
}
