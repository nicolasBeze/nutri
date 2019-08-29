<?php

namespace App\Command;

use App\Entity\FoodCategory;
use App\Manager\FoodCategoryManager;
use App\Service\ExcelService;
use App\Service\PathService;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CiqualCategoryImportCommand extends Command
{
    //const DATA_CIQUAL = 'table_ciqual.xls';
    const DATA_CIQUAL = 'test.xlsx';

    const CATEGORY_COL = [
        0 => [
            'id' => 'A',
            'name' => 'D'
        ],
        1 => [
            'id' => 'B',
            'name' => 'E'
        ],
        2 => [
            'id' => 'C',
            'name' => 'F'
        ]
    ];

    /**
     * @var ExcelService
     */
    private $excelService;
    /**
     * @var FoodCategoryManager
     */
    private $foodCategoryManager;
    /**
     * @var FoodCategory[]
     */
    private $foodCategories;

    public function __construct($name = null, FoodCategoryManager $foodCategoryManager, ExcelService $excelService, PathService $pathService)
    {
        $this->excelService = $excelService;
        $this->excelService->init(sprintf('%s%s', $pathService->pathData(), self::DATA_CIQUAL));

        $this->foodCategoryManager = $foodCategoryManager;
        $this->foodCategories = $this->foodCategoryManager->getRepository()->findAll();

        parent::__construct($name);
    }

    protected function configure()
    {
        $this
            ->setName('app:import-ciqual-categories')
            ->setDescription('Récupère les catégories de la table ciqual (ANSES)');
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

        $this->recursivePersistCategories($this->generateListCategories(), 0);
        $this->foodCategoryManager->save();

        $output->writeln('Terminé.');
    }

    /**
     * @param ArrayCollection $categories
     * @param int             $born
     *
     * @return int
     */
    public function recursivePersistCategories(ArrayCollection $categories, int $born = 0)
    {
        /** @var FoodCategory $category */
        foreach ($categories as $category) {
            $born += 1;

            $category->setLeftBorder($born);
            if (count($category->getSubCategories())) {
                $born = $this->recursivePersistCategories($category->getSubCategories(), $born);
            }
            $born += 1;
            $category->setRightBorder($born);
            $this->foodCategoryManager->persist($category);
        }

        return $born;
    }

    /**
     * @return ArrayCollection
     */
    private function generateListCategories()
    {
        $listCategories = new ArrayCollection();
        for ($line = 2; $line <= $this->excelService->getNbOfLines(); $line++) {
            $category = $this->hydrateListCategories($listCategories, 0, $line, null);
            $subCategory = $this->hydrateListCategories($category->getSubCategories(), 1, $line, $category);
            $this->hydrateListCategories($subCategory->getSubCategories(),2, $line, $subCategory);
        }

        return $listCategories;
    }

    /**
     * @param ArrayCollection   $categories
     * @param int               $level
     * @param int               $line
     * @param FoodCategory|null $parent
     *
     * @return FoodCategory|bool|null
     */
    public function hydrateListCategories(ArrayCollection $categories, int $level, int $line, ?FoodCategory $parent)
    {
        $name = $this->excelService->cellString(self::CATEGORY_COL[$level]['name'], $line);
        $ciqualId = $this->excelService->cellString(self::CATEGORY_COL[$level]['id'], $line);

        if($name=== '-') {
            return null;
        }
        $category = FoodCategory::findByName($categories, $name);
        if (!$category) {
            $category = new FoodCategory($ciqualId, $name, $level, $parent);
            $categories->add($category);
        }

        return $category;
    }
}