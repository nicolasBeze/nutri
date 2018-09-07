<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AllergensFixtures extends Fixture
{
    private $allergens = [
        'Abricot confit' => 'nuts',
        'After Eight' => ['gluten', 'lactose', 'nuts', 'peanut', 'soy', 'egg'],
        'Aiglefin' => 'fish',
        'All Bran (Kellogg\'s)' => 'gluten',
        'Amande blanchie' => 'nuts',
        'Amande non blanchie' => 'nuts',
        'Amuse-gueule à base de maïs' => ['gluten', 'peanut', 'lactose'],
        'Amuse-gueule à base de maïs goût fromage' => ['gluten', 'peanut', 'lactose'],
        'Anchois à l\'huile d\'olive' => 'fish',
        'Anguille' => 'fish',
        'Araignée de mer' => 'crustacean',
        'Avoine' => 'gluten',
        'Bar' => 'fish',
        'Barbue de rivière élevage' => 'fish',
        'Barbue de rivière sauvage' => 'fish',
        'Bâtonnets de poisson' => ['gluten', 'fish'],
        'Beignet de crabe' => ['gluten', 'crustacean'],
        'Beignet de palourde' => ['gluten', 'mollusc'],
        'Beignet nature' => ['gluten', 'egg', 'lactose', 'soy', 'nuts'],
        'Beignet nature enrobé de chocolat' => ['gluten', 'egg', 'lactose', 'soy', 'nuts'],
        'Beurre allégé demi-sel' => 'lactose',
        'Beurre allégé doux' => 'lactose',
        'Beurre doux' => 'lactose',
        'Beurre fermier' => 'lactose',
        'Beurre salé' => 'lactose',
        'Bière légère' => 'gluten',
        'Bière ordinaire' => 'gluten',
        'Bigorneau' => 'mollusc',
        'Biscuit à l\'avoine' => ['gluten', 'nuts', 'lactose', 'egg', 'lupine', 'sesame', 'soy'],
        'Biscuit au sucre' => ['gluten', 'nuts', 'lactose', 'egg', 'lupine', 'sesame', 'soy'],
        'Biscuit aux figues' => ['gluten', 'nuts', 'lactose', 'egg', 'lupine', 'sesame', 'soy'],
        'Biscuit barquette avec pulpe de fruit' => ['gluten', 'nuts', 'lactose', 'egg', 'lupine', 'sesame', 'soy'],
        'Biscuit fourré au chocolat (BN)' => ['gluten', 'nuts', 'lactose', 'egg', 'lupine', 'sesame', 'soy'],
        'Biscuit petit beurre' => ['gluten', 'nuts', 'lactose', 'egg', 'lupine', 'sesame', 'soy'],
        'Biscuits petits animaux' => ['gluten', 'nuts', 'lactose', 'egg', 'lupine', 'sesame', 'soy'],
        'Blanc de poulet pané et frit' => ['gluten', 'egg'],
        'Blé soufflé' => ['gluten', 'nuts', 'peanut', 'sesame', 'soy', 'lactose'],
        'Blé soufflé givré' => ['gluten', 'nuts', 'peanut', 'sesame', 'soy', 'lactose'],
        'Bonbon au caramel' => ['nuts', 'soy', 'lactose'],
        'Bonbon enrobé de chocolat' => ['nuts', 'soy', 'lactose'],
        'Bonbons à la menthe enrobés de chocolat' => ['nuts', 'soy', 'lactose'],
        'Bonbons durs aux édulcorants' => ['nuts', 'soy', 'lactose'],
        'Bouchée à la reine' => ['gluten', 'egg', 'nuts', 'soy', 'lactose', 'celery', 'crustacean', 'fish', 'lupine', 'mollusc', 'mustard', 'sesame'],
        'Bouchées de chocolat au lait' => ['nuts', 'soy', 'lactose', 'egg', 'gluten', 'peanut'],
        'Bouchées Kit Kat' => ['nuts', 'soy', 'lactose', 'egg', 'gluten', 'peanut'],
        'Boudin' => ['lactose', 'egg'],
        'Boudoir' => ['gluten', 'egg'],
        'Bouillon ou consommé de bœuf (déshydraté)' => ['nuts', 'celery'],
        'Bouillon ou consommé de poulet (déshydraté)' => ['nuts', 'celery'],
        'Bretzels durs (apéritif)' => 'gluten',
        'Brie' => 'lactose',
        'Bou' => ['Brioche aux raisins secs', 'lactose', 'egg', 'gluten'],
        'Bou' => ['Brioche nature', 'lactose', 'egg', 'gluten'],
        'Brochet' => 'fish',

        '' => 'gluten',
        '' => 'lactose',
        '' => 'crustacean',
        '' => 'egg',
        '' => 'peanut',
        '' => 'fish',
        '' => 'soy',
        '' => 'nuts',
        '' => 'celery',
        '' => 'mustard',
        '' => 'sesame',
        '' => 'lupine',
        '' => 'mollusc',
    ];
    public function load(ObjectManager $manager)
    {

    }
}

