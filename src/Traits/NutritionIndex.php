<?php

namespace App\Traits;

trait NutritionIndex
{
    private $glycemicIndex;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $satietyIndex;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $caloricDensity;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $nutritionalDensityIndex;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $antioxidantScore;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $PRALIndex;

    /**
     * @return float|null
     */
    public function getGlycemicIndex(): ?float
    {
        return $this->glycemicIndex;
    }

    /**
     * @param float $glycemicIndex
     */
    public function setGlycemicIndex(float $glycemicIndex)
    {
        $this->glycemicIndex = $glycemicIndex;
    }

    /**
     * @return float|null
     */
    public function getSatietyIndex(): ?float
    {
        return $this->satietyIndex;
    }

    /**
     * @param float $satietyIndex
     */
    public function setSatietyIndex(float $satietyIndex)
    {
        $this->satietyIndex = $satietyIndex;
    }

    /**
     * @return float|null
     */
    public function getCaloricDensity(): ?float
    {
        return $this->caloricDensity;
    }

    /**
     * @param float $caloricDensity
     */
    public function setCaloricDensity(float $caloricDensity)
    {
        $this->caloricDensity = $caloricDensity;
    }

    /**
     * @return float|null
     */
    public function getNutritionalDensityIndex(): ?float
    {
        return $this->nutritionalDensityIndex;
    }

    /**
     * @param float $nutritionalDensityIndex
     */
    public function setNutritionalDensityIndex(float $nutritionalDensityIndex)
    {
        $this->nutritionalDensityIndex = $nutritionalDensityIndex;
    }

    /**
     * @return float|null
     */
    public function getAntioxidantScore(): ?float
    {
        return $this->antioxidantScore;
    }

    /**
     * @param float $antioxidantScore
     */
    public function setAntioxidantScore(float $antioxidantScore)
    {
        $this->antioxidantScore = $antioxidantScore;
    }

    /**
     * @return float|null
     */
    public function getPRALIndex(): ?float
    {
        return $this->PRALIndex;
    }

    /**
     * @param float $PRALIndex
     */
    public function setPRALIndex(float $PRALIndex)
    {
        $this->PRALIndex = $PRALIndex;
    }
}