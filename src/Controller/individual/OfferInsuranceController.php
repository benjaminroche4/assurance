<?php

namespace App\Controller\individual;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OfferInsuranceController extends AbstractController
{
    #[Route('/particulier/assurance', name: 'app_individual_insurance', options: ['sitemap' => ['priority' => 0.9]])]
    public function index(): Response
    {
        return $this->render('individual/offer_insurance/index.html.twig');
    }

    #[Route('/particulier/assurance/assurance-choses-et-patrimoine', name: 'app_individual_insurance_property', options: ['sitemap' => ['priority' => 0.8]])]
    public function property(): Response
    {
        return $this->render('individual/offer_insurance/property.html.twig');
    }

    #[Route('/particulier/assurance/assurance-RC-menage', name: 'app_individual_insurance_household_liability', options: ['sitemap' => ['priority' => 0.8]])]
    public function householdLiability(): Response
    {
        return $this->render('individual/offer_insurance/household_liability.html.twig');
    }

    #[Route('/particulier/assurance/assurance-animaux', name: 'app_individual_insurance_animals', options: ['sitemap' => ['priority' => 0.8]])]
    public function animals(): Response
    {
        return $this->render('individual/offer_insurance/animals.html.twig');
    }

    #[Route('/particulier/assurance/assurance-vehicule-a-moteur', name: 'app_individual_insurance_motor_vehicle', options: ['sitemap' => ['priority' => 0.8]])]
    public function motorVehicle(): Response
    {
        return $this->render('individual/offer_insurance/motor_vehicle.html.twig');
    }

    #[Route('/particulier/assurance/assurance-protection-juridique', name: 'app_individual_insurance_legal_protection', options: ['sitemap' => ['priority' => 0.8]])]
    public function legalProtection(): Response
    {
        return $this->render('individual/offer_insurance/legal_protection.html.twig');
    }

    #[Route('/particulier/assurance/assurance-employe-de-maison', name: 'app_individual_insurance_domestic_worker', options: ['sitemap' => ['priority' => 0.8]])]
    public function domesticWorker(): Response
    {
        return $this->render('individual/offer_insurance/domestic_worker.html.twig');
    }

    #[Route('/particulier/assurance/assurance-voyage', name: 'app_individual_insurance_travel', options: ['sitemap' => ['priority' => 0.8]])]
    public function travel(): Response
    {
        return $this->render('individual/offer_insurance/travel.html.twig');
    }

    #[Route('/particulier/assurance/assurance-RC-immeuble-et-batiment', name: 'app_individual_insurance_building_liability', options: ['sitemap' => ['priority' => 0.8]])]
    public function buildingLiability(): Response
    {
        return $this->render('individual/offer_insurance/building_liability.html.twig');
    }
}
