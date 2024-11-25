<?php

namespace App\Controller\public;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FaqController extends AbstractController
{
    #[Route('/faq', name: 'app_faq', options: ['sitemap' => ['priority' => 0.5]])]
    public function index(): Response
    {
        return $this->render('public/faq/index.html.twig');
    }
}
