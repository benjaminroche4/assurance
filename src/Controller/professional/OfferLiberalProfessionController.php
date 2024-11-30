<?php

namespace App\Controller\professional;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OfferLiberalProfessionController extends AbstractController
{
    #[Route('/professionnel/profession-liberale', name: 'app_pro_offer_liberal_profession', options: ['sitemap' => ['priority' => 0.9]])]
    public function index(): Response
    {
        return $this->render('professional/offer_liberal_profession/index.html.twig');
    }

    #[Route('/professionnel/profession-liberale/services-professionnels', name: 'app_pro_offer_liberal_profession_professional_services', options: ['sitemap' => ['priority' => 0.8]])]
    public function professionalServices(): Response
    {
        return $this->render('professional/offer_liberal_profession/professional_services.html.twig');
    }
}
