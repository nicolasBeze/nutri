<?php

namespace App\Command;

use App\Service\Crawl\NutrientsService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NutriCrawlCommand extends Command
{
    private $nutrientsService;

    public function __construct($name = null, NutrientsService $nutrientsService)
    {
        $this->nutrientsService = $nutrientsService;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this
            ->setName('app:nutri-crawl')
            ->setDescription('R�cup�re les informations nutriments pour les aliments');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $nutriments = [];
        $count = 0;
        $percent = 0;

        $listFood = $this->nutrientsService->getListFood();

        foreach ($listFood as $domFood) {
            $food = $this->nutrientsService->generateFood($domFood);
            $nutriments[] = $food;

            $output->writeln(sprintf('            -> %s', $food->getName()));

            $count++;
            $load = floor($count / ($listFood->count() / 100));
            if ($load !== $percent) {
                $output->writeln(sprintf('Load ___ %d %% ___ ', $load));
                $percent = $load;
            }
        }

        $output->writeln('Termin�...');
    }
}