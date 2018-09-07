<?php

namespace App\DataFixtures;

use App\Entity\Cooking;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CookingFixtures extends Fixture
{
    private $cookings = ['Four', 'Broche', 'Sauteuse', 'Poêle', 'Wok', 'Planche à griller', 'Gril', 'Barbecue', 'Salamandre', 'Friteuse', 'Cocotte', 'Casserole', 'Cuiseur vapeur', 'Aucune'];

    public function load(ObjectManager $manager)
    {
        foreach ($this->cookings as $c) {
            $cooking = new Cooking();
            $cooking->setValue($c);
            $manager->persist($cooking);
        }

        $manager->flush();
    }
}