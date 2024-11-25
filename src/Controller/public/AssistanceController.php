<?php

namespace App\Controller\public;

use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AssistanceController extends AbstractController
{
    #[Route('/assistance', name: 'app_assistance', options: ['sitemap' => ['priority' => 0.6]])]
    public function index(): Response
    {
        return $this->render('public/assistance/index.html.twig');
    }
}
