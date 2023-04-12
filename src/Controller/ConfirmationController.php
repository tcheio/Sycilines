<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ClientRepository;

class ConfirmationController extends AbstractController
{

    #[Route('/confirmation', name: 'app_confirmation')]
    public function index(ClientRepository $procedureLogin): Response
    {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];
        $confirm = $procedureLogin.findUserByMDP($login,$mdp);
        return $this->render('confirmation/index.html.twig', [
            'controller_name' => 'ConfirmationController',
        ]);
    }

    
}
