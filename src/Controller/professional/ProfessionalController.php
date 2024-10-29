<?php

namespace App\Controller\professional;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfessionalController extends AbstractController
{
    #[Route('/professionnel', name: 'app_professional')]
    public function index(): Response
    {
        return $this->render('professional/index.html.twig');
    }
}
