<?php

namespace App\Controller\individual;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OfferHealthInsuranceController extends AbstractController
{
    #[Route('/particulier/prevoyance', name: 'app_individual_health_insurance')]
    public function index(): Response
    {
        return $this->render('individual/offer_health_insurance/index.html.twig');
    }
}
