<?php

namespace App\Controller\professional;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OfferLiberalProfessionController extends AbstractController
{
    #[Route('/professionnel/profession-liberale', name: 'app_pro_offer_liberal_profession')]
    public function index(): Response
    {
        return $this->render('professional/offer_liberal_profession/index.html.twig');
    }

    #[Route('/professionnel/profession-liberale/medical', name: 'app_pro_offer_liberal_profession_medical')]
    public function medical(): Response
    {
        return $this->render('professional/offer_liberal_profession/medical.html.twig');
    }

    #[Route('/professionnel/profession-liberale/services-professionnels', name: 'app_pro_offer_liberal_profession_professional_services')]
    public function professionalServices(): Response
    {
        return $this->render('professional/offer_liberal_profession/professional_services.html.twig');
    }
}
