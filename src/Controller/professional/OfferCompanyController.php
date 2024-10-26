<?php

namespace App\Controller\professional;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OfferCompanyController extends AbstractController
{
    #[Route('/professionnel/entreprise', name: 'app_pro_offer_company')]
    public function index(): Response
    {
        return $this->render('professional/offer_company/index.html.twig');
    }

    #[Route('/professionnel/entreprise/assurance-chose-et-patrimoine', name: 'app_pro_offer_company_property_insurance')]
    public function propertyInsurance(): Response
    {
        return $this->render('professional/offer_company/property_insurance.html.twig');
    }

    #[Route('/professionnel/entreprise/contrat-collectif-et-perte-de-gain', name: 'app_pro_offer_company_group_contract')]
    public function groupContract(): Response
    {
        return $this->render('professional/offer_company/group_contract.html.twig');
    }

    #[Route('/professionnel/entreprise/assurance-accident-LAA', name: 'app_pro_offer_company_accident_insurance')]
    public function accidentInsurance(): Response
    {
        return $this->render('professional/offer_company/accident_insurance.html.twig');
    }

    #[Route('/professionnel/entreprise/prevoyance-professionnel-LPP', name: 'app_pro_offer_company_professional_provision')]
    public function professionalProvision(): Response
    {
        return $this->render('professional/offer_company/professional_provision.html.twig');
    }

    #[Route('/professionnel/entreprise/caution-et-garanties', name: 'app_pro_offer_company_guarantees')]
    public function guarantees(): Response
    {
        return $this->render('professional/offer_company/guarantees.html.twig');
    }
}
