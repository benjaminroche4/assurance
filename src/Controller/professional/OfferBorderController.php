<?php

namespace App\Controller\professional;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OfferBorderController extends AbstractController
{
    #[Route('/professionnel/frontalier', name: 'app_pro_offer_border')]
    public function index(): Response
    {
        return $this->render('professional/offer_border/index.html.twig');
    }

    #[Route('/professionnel/frontalier/prevoyance', name: 'app_pro_offer_border_health_insurance')]
    public function healthInsurance(): Response
    {
        return $this->render('professional/offer_border/health_insurance.html.twig');
    }

    #[Route('/professionnel/frontalier/sante', name: 'app_pro_offer_border_health')]
    public function health(): Response
    {
        return $this->render('professional/offer_border/health.html.twig');
    }

    #[Route('/professionnel/frontalier/taux-de-change', name: 'app_pro_offer_border_exchange_rate')]
    public function exchangeRate(): Response
    {
        return $this->render('professional/offer_border/exchange_rate.html.twig');
    }
}
