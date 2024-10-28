<?php

namespace App\Controller\individual;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MortgageController extends AbstractController
{
    #[Route('/particulier/hypotheque', name: 'app_individual_mortgage')]
    public function index(): Response
    {
        return $this->render('individual/mortgage/index.html.twig');
    }
}
