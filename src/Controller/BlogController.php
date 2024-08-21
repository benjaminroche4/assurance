<?php

namespace App\Controller;

use App\Repository\BlogPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{

    public function __construct(
        private BlogPostRepository $blogPostRepository
    )
    {
    }

    #[Route('/blog', name: 'app_blog')]
    public function blogList(): Response
    {
        $blogPosts = $this->blogPostRepository->findBy(['published' => true], ['createdAt' => 'DESC']);

        return $this->render('blog/blog_list.html.twig', [
            'blogPosts' => $blogPosts,
        ]);
    }


    #[Route('/blog/{slug}', name: 'app_blog_post')]
    public function blogPost(string $slug): Response
    {
        $blogPost = $this->blogPostRepository->findOneBy(['slug' => $slug]);
        $recommendedPosts = $this->blogPostRepository->findRecommendedPosts($blogPost);

        if (!$blogPost || !$blogPost->isPublished()) {
            throw $this->createNotFoundException('The blog post does not exist');
        }

        return $this->render('blog/blog_post.html.twig', [
            'blogPost' => $blogPost,
            'recommendedPosts' => $recommendedPosts,
        ]);
    }
}
