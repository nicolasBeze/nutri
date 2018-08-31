<?php

namespace App\Command;

use App\Entity\Food;
use App\Manager\FoodManager;
use App\Service\Crawl\NutrientsService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NutriCrawlCommand extends Command
{
    private $nutrientsService;
    private $foodManager;

    public function __construct($name = null, NutrientsService $nutrientsService, FoodManager $foodManager)
    {
        $this->nutrientsService = $nutrientsService;
        $this->foodManager = $foodManager;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this
            ->setName('app:nutri-crawl')
            ->setDescription('Récupère les informations nutriments pour les aliments');
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

            $this->foodManager->persistFood($food);
            $nutriments[] = $food;

            $output->writeln(sprintf('            -> %s', $food->getName()));

            $count++;
            $load = floor($count / ($listFood->count() / 100));
            if ($load !== $percent) {
                $output->writeln(sprintf('Load ___ %d %% ___ ', $load));
                $percent = $load;
                $this->foodManager->saveFood();
            }
        }

        $this->foodManager->saveFood();
        $output->writeln('Terminé...');
    }
}