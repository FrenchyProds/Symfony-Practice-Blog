<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR, bj_BJ');

        // Create 3 categories
        for($i = 1; $i <= 3; $i++) {
            $category = new Category();
            $category->setTitle($faker->word())
                     ->setDescription($faker->paragraph());

            $manager->persist($category);

        // Create between 4 and 6 articles per Category

            for($j = 1; $j <= mt_rand(4, 6); $j++) {
                
                $article = new Article();

                $content = '<p>' . join('</p><p>', $faker->paragraphs(5)) . '</p>';

                $article->setTitle($faker->sentence())
                        ->setContent($content)
                        ->setImage($faker->imageUrl($width = 350, $height = 150))
                        ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                        ->setCategory($category);
                        
                $manager->persist($article);

                // Create between 4 and 10 comments per Article
                for($k = 1; $k <= mt_rand(4, 10); $k++) {

                    $comment = new Comment();
                    
                    $content = '<p>' . join('</p><p>', $faker->paragraphs(5)) . '</p>';

                    $now = new \DateTime();
                    $days = $now->diff($article->getCreatedAt())->days;
                    $minimum = '-' . $days . ' days';

                    $comment->setAuthor($faker->name)
                            ->setContent($content)
                            ->setCreatedAt($faker->dateTimeBetween($minimum))
                            ->setArticle($article);

                    $manager->persist($comment);
                }
            }
        }

        $manager->flush();
    }
}
