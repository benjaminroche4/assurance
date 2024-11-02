<?php

namespace App\DataFixtures;

use App\Factory\BlogCategoryFactory;
use App\Factory\BlogPostFactory;
use App\Factory\BookingFactory;
use App\Factory\ContactFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Run fixtures on database :
 * php bin/console doctrine:fixtures:load
 */
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        BlogCategoryFactory::createMany(10);
        BlogPostFactory::createMany(10);
        ContactFactory::createMany(10);
        BookingFactory::createMany(10);
    }
}
