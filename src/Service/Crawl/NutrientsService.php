<?php

namespace App\Service\Crawl;

use App\Entity\Food;
use App\Entity\Nutrient;
use App\Entity\NutrientBase;
use App\Util\Util;
use Symfony\Component\DomCrawler\Crawler;

class NutrientsService
{
    const URL_CRAWL = 'https://www.lanutrition.fr';

    /**
     * @return Crawler
     */
    public function getListFood()
    {
        $html = file_get_contents(sprintf('%s/les-aliments-a-la-loupe', self::URL_CRAWL));
        $crawler = new Crawler($html);

        return $crawler->filter('#nutriments_by_groupe > li > a');
    }

    /**
     * @param \DOMNode $domFood
     *
     * @return Food
     */
    public function generateFood(\DOMNode $domFood): Food
    {
        $url = null;
        foreach ($domFood->attributes as $childNode) {
            $url = sprintf('%s%s', self::URL_CRAWL, $childNode->value);
        }

        $html = file_get_contents($url);
        $crawlerDetail = new Crawler($html);
        unset($html);

        $food = new Food();
        $food->setName($domFood->nodeValue);

        foreach ($crawlerDetail->filter('.details-valeurs > p') as $domElement) {
            $this->nutrientValue($food, $domElement);
        }

        foreach ($crawlerDetail->filter('.aliment-poids > dl') as $domElement) {
            $this->nutrientWeightAndHealth($food, $domElement);
        }

        foreach ($crawlerDetail->filter('.aliment-sante > dl') as $domElement) {
            $this->nutrientWeightAndHealth($food, $domElement);
        }

        foreach (Util::getNutrientBase() as $nutrientName) {
            $nutrientBase = new NutrientBase();
            $nutrientBase->setName($nutrientName);
            foreach ($crawlerDetail->filter(sprintf('#%s > div > ul > li > span > ul > li', $nutrientName)) as $domElement) {
                $nutrientBase->addNutrient($this->nutrientBaseValue($domElement));
            }
            $food->addNutrientBase($nutrientBase);
        }

        return $food;
    }

    /**
     * @param Food        $food
     * @param \DOMElement $DOMElement
     *
     * @return Food
     */
    private function nutrientWeightAndHealth(Food $food,\DOMElement $DOMElement): Food
    {
        $value = floatval($DOMElement->getElementsByTagName('dd')->item(0)->getElementsByTagName('span')->item(0)->nodeValue);
        switch (trim(str_replace("\t", '', $DOMElement->getElementsByTagName('dt')->item(0)->nodeValue))) {
            case 'Index glycémique':
                $food->setGlycemicIndex($value);
                break;
            case 'Indice de satiété':
                $food->setSatietyIndex($value);
                break;
            case 'Densité calorique':
                $food->setCaloricDensity($value);
                break;
            case 'Charge glycémique(portion de 100g)':
                $food->setGlycemicCharge($value);
                break;
            case 'Indice de densité nutritionnelle':
                $food->setNutritionalDensityIndex($value);
                break;
            case 'Score antioxydant':
                $food->setAntioxidantScore($value);
                break;
            case 'Indice PRAL':
                $food->setPRALIndex($value);
                break;
            case 'Ratio oméga-6 / oméga-3':
                $food->setRatioOmega($value);
                break;
        }
        return $food;
    }

    /**
     * @param Food        $food
     * @param \DOMElement $DOMElement
     *
     * @return Food
     */
    private function nutrientValue(Food $food, \DOMElement $DOMElement): Food
    {
        $value = floatval($DOMElement->childNodes[3]->nodeValue);
        switch (trim(str_replace("\t", '', $DOMElement->childNodes[1]->nodeValue))) {
            case 'Protéines':
                $food->setProtein($value);
                    break;
            case 'Lipides':
                $food->setLipid($value);
                break;
            case 'Glucides':
                $food->setGlucid($value);
                break;
            case 'Energie (kCal)':
                $food->setEnergy($value);
                break;
            case 'Fibres':
                $food->setFiber($value);
                break;
        }
        return $food;
    }

    /**
     * @param \DOMElement $DOMElement
     *
     * @return Nutrient
     */
    private function nutrientBaseValue(\DOMElement $DOMElement): Nutrient
    {
        $nutrient = new Nutrient();
        $nutrient->setName($DOMElement->getElementsByTagName('span')->item(0)->nodeValue);
        $this->implementValueAndUnit($nutrient, $DOMElement->getElementsByTagName('span')->item(1)->nodeValue);

        return $nutrient;
    }

    /**
     * @param Nutrient $nutrient
     * @param string   $string
     *
     * @return Nutrient
     */
    private function implementValueAndUnit(Nutrient $nutrient, string $string): Nutrient
    {
        $value = floatval($string);
        $nutrient->setValue($value);
        $nutrient->setUnit(trim(str_replace($value, '', $string)));

        return $nutrient;
    }
}