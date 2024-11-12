<?php


namespace App\Controller;

use App\Entity\Coin;
use App\Form\CoinType;
use App\Repository\CoinRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry; // Ajouté cette ligne
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/coin')]
final class CoinController extends AbstractController
{
    #[Route(name: 'app_coin_index', methods: ['GET'])]
    public function index(CoinRepository $coinRepository): Response
    {
        return $this->render('coin/index.html.twig', [
            'coins' => $coinRepository->findAll(),
        ]);
    }


    #[Route('/new', name: 'app_coin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $coin = new Coin();
        $form = $this->createForm(CoinType::class, $coin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($coin);
            $entityManager->flush();

            return $this->redirectToRoute('app_coin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('coin/new.html.twig', [
            'coin' => $coin,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coin_show', methods: ['GET'])]
    public function show(Coin $coin): Response
    {
        return $this->render('coin/show.html.twig', [
            'coin' => $coin,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_coin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Coin $coin, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CoinType::class, $coin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_coin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('coin/edit.html.twig', [
            'coin' => $coin,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coin_delete', methods: ['POST'])]
    public function delete(Request $request, Coin $coin, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coin->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($coin);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_coin_index', [], Response::HTTP_SEE_OTHER);
    }
        
}
