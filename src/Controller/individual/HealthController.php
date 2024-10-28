<?php

namespace App\Controller\individual;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HealthController extends AbstractController
{
    #[Route('/particulier/sante', name: 'app_individual_health')]
    public function index(): Response
    {
        return $this->render('individual/health/index.html.twig');
    }
}
