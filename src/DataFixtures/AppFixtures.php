<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i<10; $i++){
            $article = new Article();
            $article->setTitle($faker->text(15));
            $article->setSubtitle($faker->text(20));
            $article->setCreatedAt($faker->dateTimeThisDecade('now',null));
            $article->setAuthor($faker->text(15));
            $article->setBody($faker->text(200));
            $article->setImage('img/home-bg.jpg');

            $this->addReference($i,$article);

            $manager->persist($article);
        }

        $manager->flush();
    }
}
