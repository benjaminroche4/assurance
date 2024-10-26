<?php

namespace App\Controller\individual;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InsuranceController extends AbstractController
{
    #[Route('/particulier/assurance', name: 'app_insurance')]
    public function index(): Response
    {
        return $this->render('individual/insurance/index.html.twig');
    }
}
