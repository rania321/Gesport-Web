<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Form\ResponseType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Response as ResponseEntity;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'reclamation_index', methods: ['GET'])]
    public function index(Request $request, ReclamationRepository $reclamationRepository, PaginatorInterface $paginator): Response
    {
        $searchQuery = $request->query->get('search', '');
        $queryBuilder = $reclamationRepository->findBySearchQuery($searchQuery);

        $pagination = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1), /* page number */
            10 /* limit per page */
        );

        return $this->render('reclamation/index.html.twig', [
            'pagination' => $pagination,
            'search' => $searchQuery,
        ]);
    }

    #[Route('/new', name: 'reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        // Set the current date and time to daterec
        $reclamation->setDaterec(new \DateTime());
        $reclamation->setStatutrec('non traitee');

        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation);
            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/{idrec}', name: 'reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{idrec}/edit', name: 'reclamation_edit', methods: ['GET', 'POST'])]
    #[ParamConverter('reclamation', class: 'App\Entity\Reclamation', options: ['id' => 'idrec'])]
    public function edit(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation);
            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idrec}/delete', name: 'reclamation_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($request->isMethod('GET')) {
            $deleteForm = $this->createFormBuilder()
            ->setAction($this->generateUrl('reclamation_delete', ['idrec' => $reclamation->getIdrec()]))
            ->setMethod('POST')
            ->getForm();
            return $this->render('reclamation/confirm_delete.html.twig', [
                'reclamation' => $reclamation,
                'delete_form' => $deleteForm->createView(),
            ]);
        }
    
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdrec(), $request->request->get('_token'))) {
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->remove($reclamation);
            // $entityManager->flush();

            $reclamationRepository->delete($reclamation);
    
            $this->addFlash('success', 'The reclamation has been deleted.');
    
            return $this->redirectToRoute('reclamation_index');
        }
    
        return $this->redirectToRoute('reclamation_index');
    }

    #[Route('/reclamation/{idrec}', name: 'reclamation_view')]
    public function view(Request $request, Reclamation $reclamation): Response
    {
        // Create a new Response entity object
        $responseEntity = new ResponseEntity();
        $form = $this->createForm(ResponseType::class, $responseEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $responseEntity->setReclamation($reclamation);

            //set Reclamation staturec to 'traitee'
            $reclamation->setStatutrec('traitee');


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($responseEntity);
            $entityManager->flush();

            return $this->redirectToRoute('reclamation_view', ['idrec' => $reclamation->getIdrec()]);
        }

        return $this->render('reclamation/view.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

}
