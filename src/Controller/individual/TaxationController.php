<?php

namespace App\Controller\individual;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TaxationController extends AbstractController
{
    #[Route('/particulier/fiscalite', name: 'app_individual_taxation')]
    public function index(): Response
    {
        return $this->render('individual/taxation/index.html.twig');
    }
}
