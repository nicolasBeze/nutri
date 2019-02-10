<?php

namespace App\Traits;

trait MineralTrait
{
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $sodiumChloride;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $calcium;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $chloride;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $copper;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $iron;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $iodine;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $magnesium;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $manganese;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $phosphorus;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $potassium;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $selenium;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $sodium;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $zinc;

    /**
     * @return float|null
     */
    public function getSodiumChloride()
    {
        return $this->sodiumChloride;
    }

    /**
     * @param float|null $sodiumChloride
     */
    public function setSodiumChloride($sodiumChloride)
    {
        $this->sodiumChloride = $sodiumChloride;
    }

    /**
     * @return float|null
     */
    public function getCalcium()
    {
        return $this->calcium;
    }

    /**
     * @param float|null $calcium
     */
    public function setCalcium($calcium)
    {
        $this->calcium = $calcium;
    }

    /**
     * @return float|null
     */
    public function getChloride()
    {
        return $this->chloride;
    }

    /**
     * @param float|null $chloride
     */
    public function setChloride($chloride)
    {
        $this->chloride = $chloride;
    }

    /**
     * @return float|null
     */
    public function getCopper()
    {
        return $this->copper;
    }

    /**
     * @param float|null $copper
     */
    public function setCopper($copper)
    {
        $this->copper = $copper;
    }

    /**
     * @return float|null
     */
    public function getIron()
    {
        return $this->iron;
    }

    /**
     * @param float|null $iron
     */
    public function setIron($iron)
    {
        $this->iron = $iron;
    }

    /**
     * @return float|null
     */
    public function getIodine()
    {
        return $this->iodine;
    }

    /**
     * @param float|null $iodine
     */
    public function setIodine($iodine)
    {
        $this->iodine = $iodine;
    }

    /**
     * @return float|null
     */
    public function getMagnesium()
    {
        return $this->magnesium;
    }

    /**
     * @param float|null $magnesium
     */
    public function setMagnesium($magnesium)
    {
        $this->magnesium = $magnesium;
    }

    /**
     * @return float|null
     */
    public function getManganese()
    {
        return $this->manganese;
    }

    /**
     * @param float|null $manganese
     */
    public function setManganese($manganese)
    {
        $this->manganese = $manganese;
    }

    /**
     * @return float|null
     */
    public function getPhosphorus()
    {
        return $this->phosphorus;
    }

    /**
     * @param float|null $phosphorus
     */
    public function setPhosphorus($phosphorus)
    {
        $this->phosphorus = $phosphorus;
    }

    /**
     * @return float|null
     */
    public function getPotassium()
    {
        return $this->potassium;
    }

    /**
     * @param float|null $potassium
     */
    public function setPotassium($potassium)
    {
        $this->potassium = $potassium;
    }

    /**
     * @return float|null
     */
    public function getSelenium()
    {
        return $this->selenium;
    }

    /**
     * @param float|null $selenium
     */
    public function setSelenium($selenium)
    {
        $this->selenium = $selenium;
    }

    /**
     * @return float|null
     */
    public function getSodium()
    {
        return $this->sodium;
    }

    /**
     * @param float|null $sodium
     */
    public function setSodium($sodium)
    {
        $this->sodium = $sodium;
    }

    /**
     * @return float|null
     */
    public function getZinc()
    {
        return $this->zinc;
    }

    /**
     * @param float|null $zinc
     */
    public function setZinc($zinc)
    {
        $this->zinc = $zinc;
    }
}
