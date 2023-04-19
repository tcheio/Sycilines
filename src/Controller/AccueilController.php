<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Liaison;
use App\Repository\LiaisonRepository;

class AccueilController extends AbstractController
{
    /**
     * #[Route('/accueil', name: 'app_accueil')]
    */
    public function index(LiaisonRepository $rpLiaison): Response
    {
        
        $liaison = $rpLiaison->findAll();
        return $this->render('accueil/index.html.twig', ['liaison' => $liaison]
    );
    }
}


