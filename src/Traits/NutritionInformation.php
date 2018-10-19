<?php

namespace App\Traits;

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
    private $eau;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $fiber;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $sugar;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $amidon;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $polyols;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $ashes;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $alcohol;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $organicAcids;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
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
    public function getEau()
    {
        return $this->eau;
    }

    /**
     * @param float|null $eau
     */
    public function setEau($eau)
    {
        $this->eau = $eau;
    }

    /**
     * @return float|null
     */
    public function getSugar()
    {
        return $this->sugar;
    }

    /**
     * @param float|null $sugar
     */
    public function setSugar($sugar)
    {
        $this->sugar = $sugar;
    }

    /**
     * @return float|null
     */
    public function getAmidon()
    {
        return $this->amidon;
    }

    /**
     * @param float|null $amidon
     */
    public function setAmidon($amidon)
    {
        $this->amidon = $amidon;
    }

    /**
     * @return float|null
     */
    public function getPolyols()
    {
        return $this->polyols;
    }

    /**
     * @param float|null $polyols
     */
    public function setPolyols($polyols)
    {
        $this->polyols = $polyols;
    }

    /**
     * @return float|null
     */
    public function getAshes()
    {
        return $this->ashes;
    }

    /**
     * @param float|null $ashes
     */
    public function setAshes($ashes)
    {
        $this->ashes = $ashes;
    }

    /**
     * @return float|null
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * @param float|null $alcohol
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;
    }

    /**
     * @return float|null
     */
    public function getOrganicAcids()
    {
        return $this->organicAcids;
    }

    /**
     * @param float|null $organicAcids
     */
    public function setOrganicAcids($organicAcids)
    {
        $this->organicAcids = $organicAcids;
    }
}