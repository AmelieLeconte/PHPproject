<?php

namespace App\Controller;

use App\Entity\CheminDeTraverse;
use App\Entity\Coin;
use App\Form\CheminDeTraverseType;
use App\Repository\CheminDeTraverseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;

#[Route('/chemin/de/traverse')]
final class CheminDeTraverseController extends AbstractController
{
    #[Route(name: 'app_chemin_de_traverse_index', methods: ['GET'])]
    public function index(CheminDeTraverseRepository $cheminDeTraverseRepository): Response
    {
        return $this->render('chemin_de_traverse/index.html.twig', [
            'chemin_de_traverses' => $cheminDeTraverseRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_chemin_de_traverse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cheminDeTraverse = new CheminDeTraverse();
        $form = $this->createForm(CheminDeTraverseType::class, $cheminDeTraverse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cheminDeTraverse);
            $entityManager->flush();

            return $this->redirectToRoute('app_chemin_de_traverse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chemin_de_traverse/new.html.twig', [
            'chemin_de_traverse' => $cheminDeTraverse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chemin_de_traverse_show', methods: ['GET'])]
    public function show(CheminDeTraverse $cheminDeTraverse): Response
    {
        return $this->render('chemin_de_traverse/show.html.twig', [
            'chemin_de_traverse' => $cheminDeTraverse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_chemin_de_traverse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CheminDeTraverse $cheminDeTraverse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CheminDeTraverseType::class, $cheminDeTraverse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_chemin_de_traverse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chemin_de_traverse/edit.html.twig', [
            'chemin_de_traverse' => $cheminDeTraverse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chemin_de_traverse_delete', methods: ['POST'])]
    public function delete(Request $request, CheminDeTraverse $cheminDeTraverse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cheminDeTraverse->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($cheminDeTraverse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_chemin_de_traverse_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{chemin_de_traverse_id}/coin/{coin_id}',
           methods: ['GET'],
           name: 'app_chemin_de_traverse_coin_show')]
   public function coinShow(
       #[MapEntity(id: 'chemin_de_traverse_id')]
       CheminDeTraverse $chemin_de_traverse,
       #[MapEntity(id: 'coin_id')]
       Coin $coin
   ): Response
   {
       return $this->render('chemin_de_traverse/coin_show.html.twig', [
           'coin' => $coin,
           'chemin_de_traverse' => $chemin_de_traverse
       ]);
   }
}
