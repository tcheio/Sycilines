<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Traversee;
use App\Repository\TraverseeRepository;

class AccueilController extends AbstractController
{
    /**
     * #[Route('/accueil', name: 'app_accueil')]
    */
    public function index(TraverseeRepository $rpTraversee): Response
    {
        
        $traversee = $rpTraversee->findAll();
        return $this->render('accueil/index.html.twig', ['traversee' => $traversee]
    );
    }
}


