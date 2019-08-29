<?php

namespace App\Command;

use App\Entity\Food;
use App\Entity\FoodCategory;
use App\Entity\FoodEntity\FattyAcid;
use App\Entity\FoodEntity\Mineral;
use App\Entity\FoodEntity\NutritionInformation;
use App\Entity\FoodEntity\Vitamin;
use App\Manager\FoodCategoryManager;
use App\Manager\FoodManager;
use App\Service\ExcelService;
use App\Service\PathService;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CiqualImportCommand extends Command
{
    //const DATA_CIQUAL = 'table_ciqual.xls';
    const DATA_CIQUAL = 'test.xlsx';
    /** @var ExcelService*/
    private $excelService;
    /** @var FoodManager*/
    private $foodManager;
    /** @var Food[] */
    private $foods;
    /** @var FoodCategory[] */
    private $foodCategories;

    private $test;

    public function __construct($name = null, FoodManager $foodManager, FoodCategoryManager $foodCategoryManager, ExcelService $excelService, PathService $pathService)
    {
        $this->excelService = $excelService;
        $this->excelService->init(sprintf('%s%s', $pathService->pathData(), self::DATA_CIQUAL));

        $this->foodManager = $foodManager;
        $this->foods = new ArrayCollection($this->foodManager->getRepository()->findAll());
        foreach ($foodCategoryManager->getRepository()->findAll() as $a){
            $this->test = $a;
            break;
        }
        $this->foodCategories = new ArrayCollection($foodCategoryManager->getRepository()->findAll());

        parent::__construct($name);
    }

    protected function configure()
    {
        $this
            ->setName('app:import-ciqual')
            ->setDescription('Récupère les informations de la table ciqual (ANSES)');
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
            $ciqualId = $this->excelService->cellInt('G', $line);

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
    private function getFood(int $ciqualId)
    {
        $food = Food::findByCiqualId($this->foods, $ciqualId);
        if ($food === false) {
            return new Food();
        }

        return $food;
    }

    /**
     * @param int $line
     *
     * @return bool|string
     */
    public function checkCategory(int $line)
    {
        if($this->excelService->cellString('F', $line) === '-'){
            return $this->excelService->cellString('E', $line);
        }
        return $this->excelService->cellString('F', $line);
    }

    /**
     * @param Food $food
     * @param int  $line
     */
    private function hydrateNutritionInformation(Food $food, int $line)
    {
        if (!$food->getNutritionInformation()) {
            $food->setNutritionInformation(new NutritionInformation());
        }
        $food->getNutritionInformation()->setEnergy($this->excelService->cellFloat('J', $line));
        $food->getNutritionInformation()->setWater($this->excelService->cellFloat('M', $line));
        $food->getNutritionInformation()->setProtein($this->excelService->cellFloat('N', $line));
        $food->getNutritionInformation()->setGlucid($this->excelService->cellFloat('P', $line));
        $food->getNutritionInformation()->setLipid($this->excelService->cellFloat('Q', $line));
        $food->getNutritionInformation()->setSugar($this->excelService->cellFloat('R', $line));
        $food->getNutritionInformation()->setAmidon($this->excelService->cellFloat('S', $line));
        $food->getNutritionInformation()->setFiber($this->excelService->cellFloat('T', $line));
        $food->getNutritionInformation()->setPolyols($this->excelService->cellFloat('U', $line));
        $food->getNutritionInformation()->setAshes($this->excelService->cellFloat('V', $line));
        $food->getNutritionInformation()->setAlcohol($this->excelService->cellFloat('W', $line));
        $food->getNutritionInformation()->setOrganicAcids($this->excelService->cellFloat('X', $line));
    }

    /**
     * @param Food $food
     * @param int  $line
     */
    private function hydrateFattyAcid(Food $food, int $line)
    {
        if (!$food->getFattyAcid()) {
            $food->setFattyAcid(new FattyAcid());
        }
        $food->getFattyAcid()->setSaturated($this->excelService->cellFloat('Y', $line));
        $food->getFattyAcid()->setMonounsaturated($this->excelService->cellFloat('Z', $line));
        $food->getFattyAcid()->setPolyunsaturated($this->excelService->cellFloat('AA', $line));
        $food->getFattyAcid()->setButyric($this->excelService->cellFloat('AB', $line));
        $food->getFattyAcid()->setCaproic($this->excelService->cellFloat('AC', $line));
        $food->getFattyAcid()->setCaprylic($this->excelService->cellFloat('AD', $line));
        $food->getFattyAcid()->setCapric($this->excelService->cellFloat('AE', $line));
        $food->getFattyAcid()->setLauric($this->excelService->cellFloat('AF', $line));
        $food->getFattyAcid()->setMyristic($this->excelService->cellFloat('AG', $line));
        $food->getFattyAcid()->setPalmitic($this->excelService->cellFloat('AH', $line));
        $food->getFattyAcid()->setStearic($this->excelService->cellFloat('AI', $line));
        $food->getFattyAcid()->setOleic($this->excelService->cellFloat('AJ', $line));
        $food->getFattyAcid()->setLinoleic($this->excelService->cellFloat('AK', $line));
        $food->getFattyAcid()->setAlphaLinolenic($this->excelService->cellFloat('AL', $line));
        $food->getFattyAcid()->setArachidonic($this->excelService->cellFloat('AM', $line));
        $food->getFattyAcid()->setEPA($this->excelService->cellFloat('AN', $line));
        $food->getFattyAcid()->setDHA($this->excelService->cellFloat('AO', $line));
        $food->getFattyAcid()->setCholesterol($this->excelService->cellFloat('AP', $line));
    }

    /**
     * @param Food $food
     * @param int  $line
     */
    private function hydrateMineral(Food $food, int $line)
    {
        if (!$food->getMineral()) {
            $food->setMineral(new Mineral());
        }
        $food->getMineral()->setSodiumChloride($this->excelService->cellFloat('AQ', $line));
        $food->getMineral()->setCalcium($this->excelService->cellFloat('AR', $line));
        $food->getMineral()->setChloride($this->excelService->cellFloat('AS', $line));
        $food->getMineral()->setCopper($this->excelService->cellFloat('AT', $line));
        $food->getMineral()->setIron($this->excelService->cellFloat('AU', $line));
        $food->getMineral()->setIodine($this->excelService->cellFloat('AV', $line));
        $food->getMineral()->setMagnesium($this->excelService->cellFloat('AW', $line));
        $food->getMineral()->setManganese($this->excelService->cellFloat('AX', $line));
        $food->getMineral()->setPhosphorus($this->excelService->cellFloat('AY', $line));
        $food->getMineral()->setPotassium($this->excelService->cellFloat('AZ', $line));
        $food->getMineral()->setSelenium($this->excelService->cellFloat('BA', $line));
        $food->getMineral()->setSodium($this->excelService->cellFloat('BB', $line));
        $food->getMineral()->setZinc($this->excelService->cellFloat('BC', $line));
    }

    /**
     * @param Food $food
     * @param int  $line
     */
    private function hydrateVitamin(Food $food, int $line)
    {
        if (!$food->getVitamin()) {
            $food->setVitamin(new Vitamin());
        }
        $food->getVitamin()->setRetinol($this->excelService->cellFloat('BD', $line));
        $food->getVitamin()->setBetaCarotene($this->excelService->cellFloat('BE', $line));
        $food->getVitamin()->setVitaminD($this->excelService->cellFloat('BF', $line));
        $food->getVitamin()->setVitaminE($this->excelService->cellFloat('BG', $line));
        $food->getVitamin()->setVitaminK1($this->excelService->cellFloat('BH', $line));
        $food->getVitamin()->setVitaminK2($this->excelService->cellFloat('BI', $line));
        $food->getVitamin()->setVitaminC($this->excelService->cellFloat('BJ', $line));
        $food->getVitamin()->setVitaminB1($this->excelService->cellFloat('BK', $line));
        $food->getVitamin()->setVitaminB2($this->excelService->cellFloat('BL', $line));
        $food->getVitamin()->setVitaminB3($this->excelService->cellFloat('BM', $line));
        $food->getVitamin()->setVitaminB5($this->excelService->cellFloat('BN', $line));
        $food->getVitamin()->setVitaminB6($this->excelService->cellFloat('B0', $line));
        $food->getVitamin()->setVitaminB9($this->excelService->cellFloat('BP', $line));
        $food->getVitamin()->setVitaminB12($this->excelService->cellFloat('BQ', $line));
    }
}