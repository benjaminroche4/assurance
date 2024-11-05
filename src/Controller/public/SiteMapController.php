<?php

namespace App\Controller\public;

use App\Repository\BlogPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SiteMapController extends AbstractController
{
    #[Route('/sitemap', name: 'app_site_map', options: ['sitemap' => ['priority' => 0.3]])]
    public function index(BlogPostRepository $blogPostRepository): Response
    {
        return $this->render('public/site_map/index.html.twig',
            [
                'blogPosts' => $blogPostRepository->findAll(),
            ]
        );
    }
}
