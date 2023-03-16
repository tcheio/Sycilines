<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Traversee;

class AccueilController extends AbstractController
{
    /**
     * #[Route('/accueil', name: 'app_accueil')]
    */
    public function index(): Response
    {
        
        $entityManager = $this->getDoctrine()->getManager();
        $traversee = $entityManager->getRepository(Traversee::class)->findAll();
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'traversee' => $traversee
        ]);
    }
}


