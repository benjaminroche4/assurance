<?php

namespace App\Controller\public;

use App\Repository\BlogPostRepository;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    public function __construct(
        private readonly BlogPostRepository $blogPostRepository,
    ){
    }

    #[Route('/', name: 'app_home', options: ['sitemap' => ['priority' => 1, 'changefreq' => UrlConcrete::CHANGEFREQ_WEEKLY]])]
    public function index(): Response
    {
        return $this->render('public/home/index.html.twig',
        [
            'lastPosts' => $this->blogPostRepository->findLastPosts(),
        ]);
    }
}
