<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InsuranceController extends AbstractController
{
    #[Route('/assurance/transport-fine-art', name: 'app_insurance_transport_fine_art')]
    public function insuranceTransportFineArt(): Response
    {
        return $this->render('insurance/transport_fine_art.html.twig');
    }
}
