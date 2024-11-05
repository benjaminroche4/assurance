<?php

namespace App\Controller\individual;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OfferMortgageController extends AbstractController
{
    #[Route('/particulier/hypotheque', name: 'app_individual_mortgage', options: ['sitemap' => ['priority' => 0.9]])]
    public function index(): Response
    {
        return $this->render('individual/offer_mortgage/index.html.twig');
    }
}
