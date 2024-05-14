<?php

namespace App\Controller;

use App\Entity\Joueur;
use App\Form\JoueurType;
use App\Repository\JoueurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/joueur')]
class JoueurController extends AbstractController
{
    #[Route('/', name: 'app_joueur_index', methods: ['GET'])]
    public function index(JoueurRepository $joueurRepository): Response
    {
        return $this->render('joueur/index.html.twig', [
            'joueurs' => $joueurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_joueur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $joueur = new Joueur();
        $form = $this->createForm(JoueurType::class, $joueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($joueur);
            $entityManager->flush();

            return $this->redirectToRoute('app_joueur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('joueur/new.html.twig', [
            'joueur' => $joueur,
            'form' => $form,
        ]);
    }

    #[Route('/{idj}', name: 'app_joueur_show', methods: ['GET'])]
    public function show(Joueur $joueur): Response
    {
        return $this->render('joueur/show.html.twig', [
            'joueur' => $joueur,
            
        ]);
    }

    #[Route('/{idj}/edit', name: 'app_joueur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Joueur $joueur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(JoueurType::class, $joueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_joueur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('joueur/edit.html.twig', [
            'joueur' => $joueur,
            'form' => $form,
        ]);
    }
    #[Route('/{idj}B', name: 'app_joueur_deleteBack', methods: ['POST'])]
    public function deleteBack(Request $request, Joueur $joueur, EntityManagerInterface $entityManager): Response
    {
       // Récupérer l'ID de l'équipe avant de supprimer le joueur
       $equipeId = $joueur->getEquipe()->getIde();
    
       // Vérifie si le jeton CSRF est valide
       if ($this->isCsrfTokenValid('delete'.$joueur->getIdj(), $request->request->get('_token'))) {
           // Supprime le joueur de la base de données
           $entityManager->remove($joueur);
           $entityManager->flush();
       }
   
       // Rediriger vers la route app_equipe_show avec l'ID de l'équipe
       return new RedirectResponse($this->generateUrl('app_equipe_showBack', ['ide' => $equipeId]));
    }
    #[Route('/{idj}', name: 'app_joueur_delete', methods: ['POST'])]
    public function delete(Request $request, Joueur $joueur, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'ID de l'équipe avant de supprimer le joueur
        $equipeId = $joueur->getEquipe()->getIde();
    
        // Vérifie si le jeton CSRF est valide
        if ($this->isCsrfTokenValid('delete'.$joueur->getIdj(), $request->request->get('_token'))) {
            // Supprime le joueur de la base de données
            $entityManager->remove($joueur);
            $entityManager->flush();
        }
    
        // Rediriger vers la route app_equipe_show avec l'ID de l'équipe
        return new RedirectResponse($this->generateUrl('app_equipe_show', ['ide' => $equipeId]));
    }


   
}
