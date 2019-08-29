<?php

namespace App\Service;


use Onurb\Bundle\ExcelBundle\Factory\ExcelFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExcelService
{
    /** @var ExcelFactory  */
    private $excelFactory;

    /** @var Worksheet */
    private $sheet;

    /** @var int */
    private $nbOfLines;

    /**
     * ExcelService constructor.
     *
     * @param ExcelFactory $excelFactory
     */
    public function __construct(ExcelFactory $excelFactory)
    {
        $this->excelFactory = $excelFactory;
    }

    /**
     * @param string $file
     */
    public function init(string $file)
    {
        $this->sheet = $this->excelFactory->createSpreadsheet($file)->getActiveSheet();
        $this->nbOfLines = $this->sheet->getHighestRow();
    }

    /**
     * @return int
     */
    public function getNbOfLines()
    {
        return $this->nbOfLines;
    }

    /**
     * @param string $abs
     * @param int    $ord
     *
     * @return bool|string
     */
    public function cellString(string $abs, int $ord)
    {
        return utf8_decode($this->sheet->getCell($abs . $ord)->getValue());
    }

    /**
     * @param string $abs
     * @param int    $ord
     *
     * @return int
     */
    public function cellInt(string $abs, int $ord)
    {
        return (integer)$this->sheet->getCell($abs . $ord)->getValue();
    }

    /**
     * @param string $abs
     * @param int    $ord
     *
     * @return float
     */
    public function cellFloat(string $abs, int $ord)
    {
        return (float)$this->dataSmoothing($this->sheet->getCell($abs . $ord)->getValue());
    }

    /**
     * @param null|string $data
     *
     * @return mixed|null|string
     */
    private function dataSmoothing(?string $data)
    {
        if ($data) {
            $data = str_replace(',', '.', $data);
            $data = str_replace('<', '', $data);
            $data = str_replace('>', '', $data);
        }

        return $data;
    }
}