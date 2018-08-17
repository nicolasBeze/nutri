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
        foreach ($domFood->attributes as $childNode) {
            $url = sprintf('%s%s', self::URL_CRAWL, $childNode->value);
        }

        $html = file_get_contents($url);
        $crawlerDetail = new Crawler($html);

        $food = new Food();
        $food->setName($domFood->nodeValue);

        foreach ($crawlerDetail->filter('.details-valeurs > p') as $domElement) {
            $food->addNutrient($this->nutrientValue($domElement));
        }

        foreach ($crawlerDetail->filter('.aliment-poids > dl') as $domElement) {
            $food->addNutrient($this->nutrientWeightAndHealth($domElement));
        }

        foreach ($crawlerDetail->filter('.aliment-sante > dl') as $domElement) {
            $food->addNutrient($this->nutrientWeightAndHealth($domElement));
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
     * @param \DOMElement $DOMElement
     *
     * @return Nutrient
     */
    private function nutrientWeightAndHealth(\DOMElement $DOMElement): Nutrient
    {
        $nutrient = new Nutrient();
        $nutrient->setName($DOMElement->getElementsByTagName('dt')->item(0)->nodeValue);
        $nutrient->setUnit($DOMElement->getElementsByTagName('dd')->item(0)->getElementsByTagName('span')->item(0)->nodeValue);

        return $nutrient;
    }

    /**
     * @param \DOMElement $DOMElement
     *
     * @return Nutrient
     */
    private function nutrientValue(\DOMElement $DOMElement): Nutrient
    {
        $nutrient = new Nutrient();
        $nutrient->setName($DOMElement->childNodes[1]->nodeValue);
        $nutrient->setUnit($DOMElement->childNodes[3]->nodeValue);

        return $nutrient;
    }

    /**
     * @param \DOMElement $DOMElement
     *
     * @return Nutrient
     */
    private function nutrientBaseValue(\DOMElement $DOMElement): Nutrient
    {
        $nutrient = new Nutrient();
        $nutrient->setName($DOMElement->getElementsByTagName('span')->item(0)->nodeValue;
        $nutrient->setUnit($DOMElement->getElementsByTagName('span')->item(1)->nodeValue;

        return $nutrient;
    }
}