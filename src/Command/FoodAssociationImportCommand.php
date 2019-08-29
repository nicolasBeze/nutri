<?php

namespace App\Command;

use App\Entity\FoodAssociationCategory;
use App\Manager\FoodAssociationCategoryManager;
use App\Service\ExcelService;
use App\Service\PathService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FoodAssociationImportCommand extends Command
{
    const DATA_ASSOCIATION_CATEGORY = 'food_association.xlsx';

    /**
     * @var ExcelService
     */
    private $excelService;
    /**
     * @var FoodAssociationCategoryManager
     */
    private $foodAssociationCategoryManager;
    /**
     * @var FoodAssociationCategory[]
     */
    private $foodAssociationCategories;

    public function __construct($name = null, FoodAssociationCategoryManager $foodAssociationCategoryManager, ExcelService $excelService, PathService $pathService)
    {
        $this->excelService = $excelService;
        $this->excelService->init(sprintf('%s%s', $pathService->pathData(), self::DATA_ASSOCIATION_CATEGORY));

        $this->foodAssociationCategoryManager = $foodAssociationCategoryManager;
        $this->foodAssociationCategories = $this->foodAssociationCategoryManager->getRepository()->findAll();

        parent::__construct($name);
    }

    protected function configure()
    {
        $this
            ->setName('app:import-association-categories')
            ->setDescription('Récupère les associations alimentaires du Docteur Désiré MERIEN');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $output->writeln('Début =>');

        for ($line = 2; $line <= $this->excelService->getNbOfLines(); $line++) {
            $id = $this->excelService->cellInt('A', $line);

            $food = $this->getFood($ciqualId);
            $food->setName($this->excelService->cellString('H', $line));
            $food->setCiqualId($ciqualId);
            $food->setFoodCategory(FoodCategory::findByName($this->foodCategories, $this->checkCategory($line)));

            $this->hydrateNutritionInformation($food, $line);
            $this->hydrateFattyAcid($food, $line);
            $this->hydrateMineral($food, $line);
            $this->hydrateVitamin($food, $line);

            $this->foodManager->persist($food);
            if ($line % 100 === 0) {
                $output->writeln(sprintf('%d %% Terminé...', floor(($line / $this->excelService->getNbOfLines()) * 100)));
                $this->foodManager->save();
            }
        }

        $this->foodManager->save();
        $output->writeln('Terminé.');
    }

    /**
     * @param int $ciqualId
     *
     * @return Food|bool
     */
    private function getFoodAssociationCategory(int $ciqualId)
    {
        $food = FoodAssociationCategory::findById($this->foods, $ciqualId);
        if ($food === false) {
            return new Food();
        }

        return $food;
    }
}