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
     * Find all published posts.
     *
     * @return array<Posts>
     */
    public function findAllPublished(): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.status = true')
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * Find the recommended posts for the current post.
     *
     * @param string $currentPost
     * @param int $limit
     * @return array<BlogPost>
     */
    public function findRecommendedPosts(BlogPost $currentPost, int $limit = 3): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.id != :currentPost')
            ->andWhere('p.status = true')
            ->orderBy('p.createdAt', 'DESC')
            ->setParameter('currentPost', $currentPost)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
