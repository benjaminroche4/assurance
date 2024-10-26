<?php

namespace App\Factory;

use App\Entity\BlogPost;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<BlogPost>
 */
final class BlogPostFactory extends PersistentProxyObjectFactory
{
    private const AUTHOR_NAME = [
        'Bernard Vincent', 'Aurélie Viret',
    ];

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return BlogPost::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'category' => BlogCategoryFactory::new(),
            'title' => self::faker()->text(80),
            'content' => self::faker()->text(1500),
            'createdAt' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'summary' => self::faker()->text(100),
            'status' => self::faker()->boolean(),
            'slug' => self::faker()->text(255),
            'mainPhoto' => 'default.jpg',
            'altMainPhoto' => self::faker()->text(50),
            'authorJob' => 'Rédacteur',
            'authorName' => self::faker()->randomElement(self::AUTHOR_NAME),
            'authorProfilePhoto' => 'default.jpg',
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(BlogPost $blogPost): void {})
        ;
    }
}
