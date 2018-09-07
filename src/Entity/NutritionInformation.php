<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity()
 * Class NutritionInformation
 *
 * @package App\Entity
 */
trait NutritionInformation
{
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $protein;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $lipid;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $glucid;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $energy;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $fiber;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
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
    private $glycemicCharge;
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
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $ratioOmega;

    /**
     * @return float|null
     */
    public function getProtein(): ?float
    {
        return $this->protein;
    }

    /**
     * @param float $protein
     */
    public function setProtein(float $protein)
    {
        $this->protein = $protein;
    }

    /**
     * @return float|null
     */
    public function getLipid(): ?float
    {
        return $this->lipid;
    }

    /**
     * @param float $lipid
     */
    public function setLipid(float $lipid)
    {
        $this->lipid = $lipid;
    }

    /**
     * @return float|null
     */
    public function getGlucid(): ?float
    {
        return $this->glucid;
    }

    /**
     * @param float $glucid
     */
    public function setGlucid(float $glucid)
    {
        $this->glucid = $glucid;
    }

    /**
     * @return float|null
     */
    public function getEnergy(): ?float
    {
        return $this->energy;
    }

    /**
     * @param float $energy
     */
    public function setEnergy(float $energy)
    {
        $this->energy = $energy;
    }

    /**
     * @return float|null
     */
    public function getFiber(): ?float
    {
        return $this->fiber;
    }

    /**
     * @param float $fiber
     */
    public function setFiber(float $fiber)
    {
        $this->fiber = $fiber;
    }

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
    public function getGlycemicCharge(): ?float
    {
        return $this->glycemicCharge;
    }

    /**
     * @param float $glycemicCharge
     */
    public function setGlycemicCharge(float $glycemicCharge)
    {
        $this->glycemicCharge = $glycemicCharge;
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

    /**
     * @return float|null
     */
    public function getRatioOmega(): ?float
    {
        return $this->ratioOmega;
    }

    /**
     * @param float $ratioOmega
     */
    public function setRatioOmega(float $ratioOmega)
    {
        $this->ratioOmega = $ratioOmega;
    }
}