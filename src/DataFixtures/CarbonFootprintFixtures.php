<?php

namespace App\DataFixtures;

use App\DataFixtures\Data\CarbonFootprint;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\CarbonFootprint as CarbonFP;

class CarbonFootprintFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $count = 0;
        foreach (CarbonFootprint::$_DATA as $data) {
            $d = explode('|', $data['value']);
            dump($d);
            $carbonFootprint = new CarbonFP();
            $carbonFootprint
                ->setName($this->castFloat($data['label']))
                ->setDefault($this->castFloat($d[1]))
                ->setNationalProximity($this->castFloat($d[11]))
                ->setMaxProximity($this->castFloat($d[13]))
                ->setNotInSeason($this->castFloat($d[9]))
                ->setFresh($this->castFloat($d[2]))
                ->setDried($this->castFloat($d[3]))
                ->setCanned($this->castFloat($d[4]))
                ->setChilled($this->castFloat($d[5]))
                ->setFrozen($this->castFloat($d[6]));
            $manager->persist($carbonFootprint);

            $count++;
            if ($count % 100 === 0) {
                $manager->flush();
            }
        }

        $manager->flush();
    }

    private function castFloat($value)
    {
        $result = floatval($value);
        if ($result) {
            return $result;
        }

        return 0;
    }
}