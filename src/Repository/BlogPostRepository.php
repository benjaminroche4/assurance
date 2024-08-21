<?php

namespace App\Repository;

use App\Entity\BlogPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BlogPost>
 */
class BlogPostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlogPost::class);
    }

    /**
     * Find the recommended posts for the current post.
     *
     * @param string $currentPost
     * @param int $limit
     * @return array<Posts>
     */
    public function findRecommendedPosts(BlogPost $currentPost, int $limit = 3): array
    {
        return $this->createQueryBuilder('p')
            ->setParameter('currentPost', $currentPost)
            ->where('p.id != :currentPost')
            ->andWhere('p.published = true')
            ->orderBy('p.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
