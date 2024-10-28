<?php

namespace App\Controller\individual;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InsuranceController extends AbstractController
{
    #[Route('/particulier/assurance', name: 'app_individual_insurance')]
    public function index(): Response
    {
        return $this->render('individual/insurance/index.html.twig');
    }

    #[Route('/particulier/assurance/assurance-choses-et-patrimoine', name: 'app_individual_insurance_property')]
    public function property(): Response
    {
        return $this->render('individual/insurance/property.html.twig');
    }

    #[Route('/particulier/assurance/assurance-RC-menage', name: 'app_individual_insurance_household_liability')]
    public function householdLiability(): Response
    {
        return $this->render('individual/insurance/household_liability.html.twig');
    }

    #[Route('/particulier/assurance/assurance-animaux', name: 'app_individual_insurance_animals')]
    public function animals(): Response
    {
        return $this->render('individual/insurance/animals.html.twig');
    }

    #[Route('/particulier/assurance/assurance-vehicule-a-moteur', name: 'app_individual_insurance_motor_vehicle')]
    public function motorVehicle(): Response
    {
        return $this->render('individual/insurance/motor_vehicle.html.twig');
    }

    #[Route('/particulier/assurance/assurance-protection-juridique', name: 'app_individual_insurance_legal_protection')]
    public function legalProtection(): Response
    {
        return $this->render('individual/insurance/legal_protection.html.twig');
    }

    #[Route('/particulier/assurance/assurance-employe-de-maison', name: 'app_individual_insurance_domestic_worker')]
    public function domesticWorker(): Response
    {
        return $this->render('individual/insurance/domestic_worker.html.twig');
    }

    #[Route('/particulier/assurance/assurance-voyage', name: 'app_individual_insurance_travel')]
    public function travel(): Response
    {
        return $this->render('individual/insurance/travel.html.twig');
    }

    #[Route('/particulier/assurance/assurance-RC-immeuble-et-batiment', name: 'app_individual_insurance_building_liability')]
    public function buildingLiability(): Response
    {
        return $this->render('individual/insurance/building_liability.html.twig');
    }
}
