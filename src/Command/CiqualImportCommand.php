<?php

namespace App\Command;

use App\Entity\Food;
use App\Entity\FoodEntity\FattyAcid;
use App\Manager\FoodManager;
use App\Service\PathService;
use Onurb\Bundle\ExcelBundle\Factory\ExcelFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CiqualImportCommand extends Command
{
    const DATA_CIQUAL = 'TableCiqual.xls';
    /**
     * @var ExcelFactory
     */
    private $excelFactory;
    /**
     * @var FoodManager
     */
    private $foodManager;
    /**
     * @var PathService
     */
    private $pathService;

    public function __construct($name = null, FoodManager $foodManager, ExcelFactory $excelFactory, PathService $pathService)
    {
        $this->excelFactory = $excelFactory;
        $this->foodManager = $foodManager;
        $this->pathService = $pathService;
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
        $file = sprintf('%s%s', $this->pathService->pathData(), self::DATA_CIQUAL);
        $spreadsheet = $this->excelFactory->createSpreadsheet($file);
        $sheet = $spreadsheet->getActiveSheet();

        $food = new Food();
        $food->setName($sheet->getCell('H1'));
        $food->setCiqualId((integer) $sheet->getCell('G1'));

        $fattyAccid = new FattyAcid();
        $fattyAccid->setSaturated((integer) $sheet->getCell('Y1'));
        $fattyAccid->setMonounsaturated((integer) $sheet->getCell('Z1'));
        $fattyAccid->setPolyunsaturated((integer) $sheet->getCell('AA1'));
        $fattyAccid->setButyric((integer) $sheet->getCell('AB1'));
        $fattyAccid->setCaproic((integer) $sheet->getCell('AC1'));
        $fattyAccid->setCaprylic((integer) $sheet->getCell('AD1'));
        $fattyAccid->setLauric((integer) $sheet->getCell('AE1'));
        $fattyAccid->setMyristic((integer) $sheet->getCell('AF1'));
        $fattyAccid->setPalmitic((integer) $sheet->getCell('AG1'));
        $fattyAccid->setStearic((integer) $sheet->getCell('AH1'));
        $fattyAccid->setOleic((integer) $sheet->getCell('AI1'));
        $fattyAccid->setLinoleic((integer) $sheet->getCell('AJ1'));
        $fattyAccid->setAlphaLinolenic((integer) $sheet->getCell('AK1'));
        $fattyAccid->setEPA((integer) $sheet->getCell('AL1'));
        $fattyAccid->setDHA((integer) $sheet->getCell('AM1'));
        $fattyAccid->setCholesterol((integer) $sheet->getCell('AN1'));

        $food->setFattyAcid($fattyAccid);

        $this->foodManager->saveFood();

        $output->writeln('Terminé...');
    }
}