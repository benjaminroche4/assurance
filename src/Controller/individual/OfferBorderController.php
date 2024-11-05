<?php

namespace App\Controller\individual;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OfferBorderController extends AbstractController
{
    #[Route('/particulier/frontalier', name: 'app_individual_offer_border')]
    public function index(): Response
    {
        return $this->render('individual/offer_border/index.html.twig');
    }

    #[Route('/particulier/frontalier/prevoyance', name: 'app_individual_offer_border_health_insurance')]
    public function healthInsurance(): Response
    {
        return $this->render('individual/offer_border/health_insurance.html.twig');
    }

    #[Route('/particulier/frontalier/sante', name: 'app_individual_offer_border_health')]
    public function health(): Response
    {
        return $this->render('individual/offer_border/health.html.twig');
    }

    #[Route('/particulier/frontalier/taux-de-change', name: 'app_individual_offer_border_exchange_rate')]
    public function exchangeRate(): Response
    {
        return $this->render('individual/offer_border/exchange_rate.html.twig');
    }
}
