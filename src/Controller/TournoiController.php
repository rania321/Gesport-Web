<?php

namespace App\Controller;

use App\Entity\Tournoi;
use App\Entity\Equipe;
use App\Entity\Inscritournoi;
use App\Form\TournoiType;
use App\Form\TournoiTypeEdit;
use App\Repository\TournoiRepository;
use App\Repository\EquipeRepository;
use App\Repository\JoueurRepository;
use App\Repository\InscritournoiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use DateTime;

#[Route('/tournoi')]
class TournoiController extends AbstractController
{
    #[Route('/', name: 'app_tournoi_index', methods: ['GET'])]
    public function index(TournoiRepository $tournoiRepository): Response
    {
        $currentDate = new \DateTime();
        $tournois = $tournoiRepository->createQueryBuilder('t')
            ->andWhere('t.statutt != :statutt')
            ->setParameter('statutt', 'Terminé')
            ->getQuery()
            ->getResult();
    
        return $this->render('tournoi/index.html.twig', [
            'tournois' => $tournois,
        ]);
    }
    
    #[Route('/tournoiback', name: 'app_tournoi_indexBack', methods: ['GET'])]
    public function indexBack(TournoiRepository $tournoiRepository): Response
    {
        return $this->render('tournoi/indexBack.html.twig', [
            'tournois' => $tournoiRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_tournoi_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tournoi = new Tournoi();
        $tournoi->setDatedebutt(new DateTime());
        $tournoi->setDatefint(new DateTime());
        $form = $this->createForm(TournoiType::class, $tournoi);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
           
    
            // Déterminer le statut en fonction des dates de début et de fin
            $now = new \DateTime();
            if ($tournoi->getDatedebutt()->format('Y-m-d') > $now->format('Y-m-d')) {
                $tournoi->setStatutt('À venir');
            } elseif ($tournoi->getDatefint()->format('Y-m-d') < $now->format('Y-m-d')) {
                $tournoi->setStatutt('Terminé');
            } elseif ($tournoi->getDatefint()->format('Y-m-d') >= $now->format('Y-m-d') || $tournoi->getDatedebutt()->format('Y-m-d') <= $now->format('Y-m-d')) {
                $tournoi->setStatutt('En cours');
            } else {
                $tournoi->setStatutt('En cours');
            }
    
            $entityManager->persist($tournoi);
            $entityManager->flush();
    
            $this->addFlash('success', 'Le tournoi a été créé avec succès.');
    
            return $this->redirectToRoute('app_tournoi_indexBack', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('tournoi/new.html.twig', [
            'tournoi' => $tournoi,
            'form' => $form,
        ]);
    }

    #[Route('/{idt}', name: 'app_tournoi_show', methods: ['GET'])]
    public function show(Tournoi $tournoi, InscritournoiRepository $inscritournoiRepository): Response
    {
        // Récupérer toutes les inscriptions pour ce tournoi
        $inscriptions = $inscritournoiRepository->findBy(['Tournoi' => $tournoi->getIdt()]);

        // Créer un tableau pour stocker toutes les équipes inscrites
        $equipesInscrites = [];
        foreach ($inscriptions as $inscription) {
            // Ajouter l'équipe de chaque inscription au tableau
            $equipesInscrites[] = $inscription->getEquipe();
        }

        return $this->render('tournoi/show.html.twig', [
            'tournoi' => $tournoi,
            'equipesInscrites' => $equipesInscrites,
        ]);
    }
    
 

    #[Route('/{idt}/edit', name: 'app_tournoi_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tournoi $tournoi, EntityManagerInterface $entityManager): Response
    {
        $formedit = $this->createForm(TournoiTypeEdit::class, $tournoi);
        $formedit->handleRequest($request);

        if ($formedit->isSubmitted() && $formedit->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_tournoi_indexBack', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tournoi/edit.html.twig', [
            'tournoi' => $tournoi,
    'formedit' => $formedit->createView(),
        ]);
    }



  
    #[Route('/{idt}', name: 'app_tournoi_delete', methods: ['POST'])]
    public function delete(Tournoi $tournoi, EntityManagerInterface $entityManager, JoueurRepository $joueurRepository): Response
    {
        // Récupérer toutes les équipes associées à ce tournoi
        $equipes = $entityManager->getRepository(Equipe::class)->findBy(['Tournoi' => $tournoi->getIdt()]);


        // Supprimer chaque joueur associé à chaque équipe
        foreach ($equipes as $equipe) {
            $joueurs = $joueurRepository->findBy(['equipe' => $equipe]);
            foreach ($joueurs as $joueur) {
                $entityManager->remove($joueur);
            }
        }
        // Supprimer chaque équipe associée au tournoi
        foreach ($equipes as $equipe) {
            $entityManager->remove($equipe);
        }

      // Supprimer toutes les inscriptions liées au tournoi à supprimer
      $inscriptions = $entityManager->getRepository(Inscritournoi::class)->findBy(['Tournoi' => $tournoi->getIdt()]);
      foreach ($inscriptions as $inscription) {
          $entityManager->remove($inscription);
      }

        // Supprimer le tournoi lui-même
        $entityManager->remove($tournoi);
        $entityManager->flush();

        // Rediriger vers la liste des tournois après la suppression
        return $this->redirectToRoute('app_tournoi_indexBack', [], Response::HTTP_SEE_OTHER);
    }



    
}
