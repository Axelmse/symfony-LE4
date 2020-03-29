<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class CommentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i<100; $i++){
            $comment = new Comment();
            $comment->setName($faker->name);
            $comment->setEmail($faker->email);
            $comment->setCreatedAt($faker->dateTimeThisDecade('now',null));
            $comment->setComment($faker->text(200));
            $comment->setArticle($this->getReference(rand(0, 9)));

            $manager->persist($comment);
        }

        $manager->flush();
    }
}
