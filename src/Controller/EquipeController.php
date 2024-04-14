<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Entity\Tournoi;
use App\Entity\Joueur;
use App\Entity\User;
use App\Entity\Inscritournoi;
use App\Form\EquipeType;
use App\Form\EquipeTypeFront;
use App\Form\JoueurType;
use App\Repository\EquipeRepository;
use App\Repository\JoueurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/equipe')]
class EquipeController extends AbstractController
{
    #[Route('/', name: 'app_equipe_index', methods: ['GET', 'POST'])]
    public function index(Request $request, EquipeRepository $equipeRepository, EntityManagerInterface $entityManager, JoueurRepository $joueurRepository): Response
    {
        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $user = $userRepository->find(2); 
        $equipe = new Equipe();
        $equipe->setUser($user);
    
        $formFront = $this->createForm(EquipeTypeFront::class, $equipe);
        $formFront->handleRequest($request);
    
        if ($formFront->isSubmitted() && $formFront->isValid()) {
            $equipe->setStatutE("inscrite");
            $entityManager->persist($equipe);
            $entityManager->flush();

            $tournoiId = $formFront->get('Tournoi')->getData();
        $tournoi = $entityManager->getRepository(Tournoi::class)->find($tournoiId);
        $inscritournoi = new Inscritournoi();
        $inscritournoi->setEquipe($equipe);
        $inscritournoi->setTournoi($tournoi);
        $entityManager->persist($inscritournoi);
        $entityManager->flush();
    
    
            return $this->redirectToRoute('app_equipe_show', ['ide' => $equipe->getIde()]);
        }
    
        $equipes = $equipeRepository->findAll();
    
        return $this->renderForm('equipe/index.html.twig', [
            'equipes' => $equipes,
            'formFront' => $formFront,
        ]);
    }


    #[Route('/equipeBack', name: 'app_equipe_indexBack', methods: ['GET'])]
    public function indexBack(EquipeRepository $equipeRepository): Response
    {
        return $this->render('equipe/indexBack.html.twig', [
            'equipes' => $equipeRepository->findAll(),
        ]);
    }

   /* #[Route('/new', name: 'app_equipe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {            
        $userRepository = $this->getDoctrine()->getRepository(User::class);
    $user = $userRepository->find(1); 
    $equipe = new Equipe();
    $equipe->setUser($user);
    
    $form = $this->createForm(EquipeType::class, $equipe);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($equipe);
        $entityManager->flush();

    
    
            return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('equipe/new.html.twig', [
            'equipe' => $equipe,
            'form' => $form,
        ]);
    }*/
   #[Route('/newBack', name: 'app_equipe_newBack', methods: ['GET', 'POST'])]
public function newBack(Request $request, EntityManagerInterface $entityManager): Response
{            
    $userRepository = $this->getDoctrine()->getRepository(User::class);
    $user = $userRepository->find(1); 
    $equipe = new Equipe();
    $equipe->setUser($user);
    
    $form = $this->createForm(EquipeType::class, $equipe);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($equipe);
        $entityManager->flush();

        $tournoiId = $form->get('Tournoi')->getData();
        $tournoi = $entityManager->getRepository(Tournoi::class)->find($tournoiId);
        $inscritournoi = new Inscritournoi();
        $inscritournoi->setEquipe($equipe);
        $inscritournoi->setTournoi($tournoi);
        $entityManager->persist($inscritournoi);
        $entityManager->flush();



        return $this->redirectToRoute('app_equipe_indexBack', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('equipe/newBack.html.twig', [
        'equipe' => $equipe,
        'form' => $form,
    ]);
}
#[Route('/{ide}F', name: 'app_equipe_show', methods: ['GET', 'POST'])]
public function show(Request $request, Equipe $equipe, JoueurRepository $joueurRepository): Response
{
    $joueurs = $joueurRepository->findBy(['equipe' => $equipe]);

    $joueur = new Joueur();
    $joueurForm = $this->createForm(JoueurType::class, $joueur);
    $joueurForm->handleRequest($request);

    if ($request->isMethod('POST')) {
        if ($joueurForm->isSubmitted() && $joueurForm->isValid()) {
            // Assurez-vous d'associer le joueur à l'équipe avant de le persister
            $joueur->setEquipe($equipe);

            // Persistez le joueur et flush les modifications
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($joueur);
            $entityManager->flush();

            $this->addFlash('success', 'Le joueur a été ajouté avec succès.');

            // Rediriger vers la liste des joueurs de l'équipe
            return $this->redirectToRoute('app_equipe_show', ['ide' => $equipe->getIde()]);
        }
    }

    return $this->render('equipe/show.html.twig', [
        'equipe' => $equipe,
        'joueurs' => $joueurs, // Passer les joueurs à la vue
        'joueur' => $joueur,
        'joueurForm' => $joueurForm->createView(),
    ]);
}
    #[Route('/{ide}Back', name: 'app_equipe_showBack', methods: ['GET', 'POST'])]
    public function showBack(Request $request, Equipe $equipe, JoueurRepository $joueurRepository, EntityManagerInterface $entityManager): Response
    {
        $joueurs = $joueurRepository->findBy(['equipe' => $equipe]);
    
        $joueur = new Joueur();
        $joueurForm = $this->createForm(JoueurType::class, $joueur);
        $joueurForm->handleRequest($request);
    
        if ($joueurForm->isSubmitted() && $joueurForm->isValid()) {
            // Assurez-vous d'associer le joueur à l'équipe avant de le persister
            $joueur->setEquipe($equipe);
    
            // Persistez le joueur et flush les modifications
            $entityManager->persist($joueur);
            $entityManager->flush();
    
            $this->addFlash('success', 'Le joueur a été ajouté avec succès.');
    
            // Rechargez la page pour afficher les changements après l'ajout du joueur
            return $this->redirectToRoute('app_equipe_showBack', ['ide' => $equipe->getIde()]);
        }
    
        return $this->render('equipe/showBack.html.twig', [
            'equipe' => $equipe,
            'joueurs' => $joueurs, // Passer les joueurs à la vue
            'joueur' => $joueur,
            'joueurForm' => $joueurForm->createView(),
        ]);
    }

  

    #[Route('/{ide}/edit', name: 'app_equipe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Equipe $equipe, EntityManagerInterface $entityManager): Response
    {
         // Créer le formulaire de mise à jour d'équipe
    $formFront = $this->createForm(EquipeTypeFront::class, $equipe);
    $formFront->handleRequest($request);

    // Traitement du formulaire de mise à jour
    if ($formFront->isSubmitted() && $formFront->isValid()) {
        $inscritournoi = $entityManager->getRepository(Inscritournoi::class)->findOneBy(['Equipe' => $equipe]);
        if ($inscritournoi) {
            $tournoi = $equipe->getTournoi();
            $inscritournoi->setTournoi($tournoi);

            $entityManager->flush();
        }
       

        $this->addFlash('success', 'L\'équipe a été mise à jour avec succès.');

        return $this->redirectToRoute('app_equipe_show', ['ide' => $equipe->getIde()]);
    }
    // Rendre le formulaire de mise à jour dans le modèle Twig edit.html.twig
    return $this->render('equipe/edit.html.twig', [
        'equipe' => $equipe,
        'formFront' => $formFront->createView(),
    ]);
    }
    #[Route('/{ide}/editBack', name: 'app_equipe_editBack', methods: ['GET', 'POST'])]
    public function editBack(Request $request, Equipe $equipe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
           // Récupérer l'entité Inscritournoi associée à l'équipe
        $inscritournoi = $entityManager->getRepository(Inscritournoi::class)->findOneBy(['Equipe' => $equipe]);

        if ($inscritournoi) {
            // Mettre à jour l'association avec le nouveau tournoi
            $tournoi = $equipe->getTournoi(); // Récupérer le nouveau tournoi depuis l'équipe
            $inscritournoi->setTournoi($tournoi);

            // Flush l'EntityManager pour enregistrer les modifications
            $entityManager->flush();
        }
            return $this->redirectToRoute('app_equipe_showBack', ['ide' => $equipe->getIde()]);
        }
    
        return $this->render('equipe/editBack.html.twig', [
            'equipe' => $equipe,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/{ide}I', name: 'app_equipe_deleteinscri', methods: ['POST'])]
    public function deleteinscri(Equipe $equipe, EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les joueurs associés à cette équipe
        $joueurs = $entityManager->getRepository(Joueur::class)->findBy(['equipe' => $equipe]);
    
        // Supprimer chaque joueur associé
        foreach ($joueurs as $joueur) {
            $entityManager->remove($joueur);
        }

        $inscritsAuTournoi = $entityManager->getRepository(Inscritournoi::class)->findBy(['Equipe' => $equipe]);
        foreach ($inscritsAuTournoi as $inscrit) {
            $entityManager->remove($inscrit);
        }
    
    
        // Supprimer l'équipe
        $entityManager->remove($equipe);
        $entityManager->flush();
    
        // Rediriger vers la liste des équipes après la suppression
        return $this->redirectToRoute('app_tournoi_indexBack', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{ide}', name: 'app_equipe_delete', methods: ['POST'])]
    public function delete(Equipe $equipe, EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les joueurs associés à cette équipe
        $joueurs = $entityManager->getRepository(Joueur::class)->findBy(['equipe' => $equipe]);
    
        // Supprimer chaque joueur associé
        foreach ($joueurs as $joueur) {
            $entityManager->remove($joueur);
        }

        $inscritsAuTournoi = $entityManager->getRepository(Inscritournoi::class)->findBy(['Equipe' => $equipe]);
        foreach ($inscritsAuTournoi as $inscrit) {
            $entityManager->remove($inscrit);
        }
    
    
        // Supprimer l'équipe
        $entityManager->remove($equipe);
        $entityManager->flush();
    
        // Rediriger vers la liste des équipes après la suppression
        return $this->redirectToRoute('app_equipe_indexBack', [], Response::HTTP_SEE_OTHER);
    }

   


   /* public function getLastAddedTeam(): ?Equipe
    {
        return $this->getDoctrine()->getRepository(Equipe::class)->findOneBy([], ['ide' => 'DESC']);
    }*/


   #[Route('/{ide}/joueurs', name: 'app_equipe_joueurs', methods: ['GET', 'POST'])]
public function joueurs(Request $request, Equipe $equipe, JoueurRepository $joueurRepository, EntityManagerInterface $entityManager): Response
{
    // Récupérer la liste des joueurs de l'équipe
    $joueurs = $joueurRepository->findBy(['equipe' => $equipe]);

    // Créer un nouveau joueur
    $nouveauJoueur = new Joueur();
    $joueurForm = $this->createForm(JoueurType::class, $nouveauJoueur);

    // Gérer la soumission du formulaire
    $joueurForm->handleRequest($request);
    if ($joueurForm->isSubmitted() && $joueurForm->isValid()) {
        // Assurez-vous d'associer le nouveau joueur à l'équipe
        $nouveauJoueur->setEquipe($equipe);

        // Enregistrer le nouveau joueur dans la base de données
        $entityManager->persist($nouveauJoueur);
        $entityManager->flush();

        // Rediriger vers la même page pour afficher les changements
        return $this->redirectToRoute('app_equipe_joueurs', ['ide' => $equipe->getIde()]);
    }

    // Rendre la vue en passant la liste des joueurs et le formulaire du nouveau joueur
    return $this->render('joueur/show.html.twig', [
        'equipe' => $equipe,
        'joueurs' => $joueurs,
        'joueurForm' => $joueurForm->createView(),
    ]);
}

   
}
