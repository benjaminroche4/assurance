<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategoriesController extends AbstractController
{
    #[Route('/assurances', name: 'app_insurance')]
    public function insurance(): Response
    {
        return $this->render('categories/insurance.html.twig');
    }

    #[Route('/prevoyances', name: 'app_foresight')]
    public function foresight(): Response
    {
        return $this->render('categories/foresight.html.twig');
    }

    #[Route('/risques', name: 'app_risk')]
    public function risk(): Response
    {
        return $this->render('categories/risk.html.twig');
    }
}
