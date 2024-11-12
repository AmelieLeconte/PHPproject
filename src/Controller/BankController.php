<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; 
use App\Entity\Bank;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface; 
use App\Form\BankType;
use App\Repository\BankRepository;

 #[Route('/bank')]
class BankController extends AbstractController
{
    #[Route( name: 'app_bank_index', methods: ['GET'])]
    public function index(BankRepository $bankrepository): Response
    {
        return $this->render(
            'bank/index.html.twig',
            ['bank' => $bankrepository->findAll()]
        );
    }

    #[Route('/list', name: 'bank_list', methods: ['GET'])]
    public function listAction(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $banks = $entityManager->getRepository(Bank::class)->findAll();

        return $this->render(
            'bank/index.html.twig',
            ['bank' => $banks] 
        );
    }

    /**
     * Show a bank
     */
    #[Route('/{id}', name: 'bank_show', requirements: ['id' => '\d+'])]
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
    /* #[Route('/bank/new', name: 'bank_new', methods: ['GET', 'POST'])] 
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bank = new Bank();
        $form = $this->createForm(BankType::class, $bank);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bank);
            $entityManager->flush();

            return $this->redirectToRoute('bank_list', [], Response::HTTP_SEE_OTHER); 
        }

        return $this->render('bank/new.html.twig', [
            'bank' => $bank, 
            'form' => $form,
        ]);
    } */
}
