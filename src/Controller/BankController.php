<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // Use Annotation not Attribute here
use App\Entity\Bank;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface; // Correct import
use App\Form\BankType; // Correct form import

class BankController extends AbstractController
{
    #[Route('/', name: 'home', methods: ['GET'])]
    public function indexAction(): Response
    {
        return $this->render(
            'index.html.twig',
            ['welcome' => "Bienvenue sur votre la page d'inventaire de la banque. Veuillez selectionner bank ou coin dans la barre de selection, pour consulter l'un ou l'autre."]
        );
    }

    #[Route('/bank/list', name: 'bank_list', methods: ['GET'])]
    public function listAction(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $banks = $entityManager->getRepository(Bank::class)->findAll();

        return $this->render(
            'bank/index.html.twig',
            ['banks' => $banks] // Changed 'bank' to 'banks' for consistency
        );
    }

    /**
     * Show a bank
     */
    #[Route('/bank/{id}', name: 'bank_show', requirements: ['id' => '\d+'])]
    public function showAction(Bank $bank): Response
    {
        return $this->render(
            'bank/show.html.twig',
            ['bank' => $bank]
        );
    }

    /**
     * Create a new Bank
     */
    #[Route('/bank/new', name: 'bank_new', methods: ['GET', 'POST'])] // Fixed route name
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bank = new Bank();
        $form = $this->createForm(BankType::class, $bank);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bank);
            $entityManager->flush();

            return $this->redirectToRoute('bank_list', [], Response::HTTP_SEE_OTHER); // Redirect to bank_list
        }

        return $this->render('bank/new.html.twig', [ // Correct template path
            'bank' => $bank, // Fixed the variable to 'bank'
            'form' => $form,
        ]);
    }
}
