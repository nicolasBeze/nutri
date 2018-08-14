<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DomCrawler\Crawler;

class NutriCrawlCommand extends Command
{
    const URL_CRAWL = 'https://www.lanutrition.fr';

    const DETAIL = [
        'proteines',
        'lipides',
        'glucides',
        'energie',
        'vitamines',
        'mineraux',
        'autres',
    ];

    protected function configure()
    {
        $this
            ->setName('app:nutri-crawl')
            ->setDescription('Récupère les informations nutriments pour les aliments');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $nutriments = [];
        $url = '';
        $count = 0;
        $percent = 0;

        $html = file_get_contents(sprintf('%s/les-aliments-a-la-loupe', self::URL_CRAWL));
        $crawler = new Crawler($html);
        $listNutri = $crawler->filter('#nutriments_by_groupe > li > a');

        foreach ($listNutri as $domNutri) {
            foreach ($domNutri->attributes as $childNode) {
                $url = sprintf('%s%s', self::URL_CRAWL, $childNode->value);
            }

            $htmlDetail = file_get_contents($url);

            $info = [];
            $detail = [];
            $name = $domNutri->nodeValue;
            $crawlerDetail = new Crawler($htmlDetail);

            foreach ($crawlerDetail->filter('.details-valeurs > p') as $domElement) {
                $info[] = [
                    'name'  => $domElement->childNodes[1]->nodeValue,
                    'value' => $domElement->childNodes[3]->nodeValue,
                ];
            }

            foreach ($crawlerDetail->filter('.aliment-poids > dl') as $domElement) {
                $info[] = [
                    'name'  => $domElement->getElementsByTagName('dt')->item(0)->nodeValue,
                    'value' => $domElement->getElementsByTagName('dd')->item(0)->getElementsByTagName('span')->item(0)->nodeValue,
                ];
            }

            foreach ($crawlerDetail->filter('.aliment-sante > dl') as $domElement) {
                $info[] = [
                    'name'  => $domElement->getElementsByTagName('dt')->item(0)->nodeValue,
                    'value' => $domElement->getElementsByTagName('dd')->item(0)->getElementsByTagName('span')->item(0)->nodeValue,
                ];
            }

            foreach (self::DETAIL as $valueDetail) {
                foreach ($crawlerDetail->filter(sprintf('#%s > div > ul > li > span > ul > li', $valueDetail)) as $domElement) {
                    if (!array_key_exists($valueDetail, $detail)) {
                        $detail[$valueDetail] = [];
                    }
                    $detail[$valueDetail][] = [
                        'name'  => $domElement->getElementsByTagName('span')->item(0)->nodeValue,
                        'value' => $domElement->getElementsByTagName('span')->item(1)->nodeValue,
                    ];
                }
            }

            $nutriments[] = [
                'url'    => $url,
                'name'   => $name,
                'value'  => $info,
                'detail' => $detail,
            ];

            //var_dump($nutriments);
            $output->writeln(sprintf('            -> %s', $name));

            $count++;
            $load = floor($count / ($listNutri->count() / 100));
            if ($load !== $percent) {
                $output->writeln(sprintf('Load ___ %d %% ___ ', $load));
                $percent = $load;
            }
        }

        $output->writeln('Terminé...');
    }
}