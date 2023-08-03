<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $categories = [
            'Informatique',
            'Téléphonie',
            'Électroménager',
            'Jeux vidéo',
            'Meubles',
            'Vêtements',
            'Jouets',
            'Livres',
            'Sports',
            'Jardinage',
            'Bricolage',
            'Musique',
            'Films',
            'Bijoux',
            'Animaux',
            'Autres'
        ];

        foreach ($categories as $key => $category) {
            $categoryObject = new Category();
            $categoryObject->setLabel($category);
            $manager->persist($categoryObject);
            // $this->addReference('category_' . $key, $categoryObject);
        }
        $manager->flush();
    }
}
