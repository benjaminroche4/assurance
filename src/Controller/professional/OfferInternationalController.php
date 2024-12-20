<?php

namespace App\Controller\professional;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OfferInternationalController extends AbstractController
{
    #[Route('/professionnel/international', name: 'app_pro_offer_international', options: ['sitemap' => ['priority' => 0.9]])]
    public function index(): Response
    {
        return $this->render('professional/offer_international/index.html.twig');
    }

    #[Route('/professionnel/international/assurance-maladie-internationale', name: 'app_pro_offer_international_health_insurance', options: ['sitemap' => ['priority' => 0.8]])]
    public function healthInsurance(): Response
    {
        return $this->render('professional/offer_international/health_insurance.html.twig');
    }

    #[Route('/professionnel/international/solution-internationale', name: 'app_pro_offer_international_solution', options: ['sitemap' => ['priority' => 0.8]])]
    public function internationalSoltion(): Response
    {
        return $this->render('professional/offer_international/international_solution.html.twig');
    }
}
