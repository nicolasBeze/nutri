<?php

namespace App\Traits;

trait VitaminTrait
{
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $retinol;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $betaCarotene;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminD;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminE;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminK1;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminK2;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminC;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminB1;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminB2;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminB3;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminB5;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminB6;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminB9;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $vitaminB12;

    /**
     * @return float|null
     */
    public function getRetinol()
    {
        return $this->retinol;
    }

    /**
     * @param float|null $retinol
     */
    public function setRetinol($retinol)
    {
        $this->retinol = $retinol;
    }

    /**
     * @return float|null
     */
    public function getBetaCarotene()
    {
        return $this->betaCarotene;
    }

    /**
     * @param float|null $betaCarotene
     */
    public function setBetaCarotene($betaCarotene)
    {
        $this->betaCarotene = $betaCarotene;
    }

    /**
     * @return float|null
     */
    public function getVitaminD()
    {
        return $this->vitaminD;
    }

    /**
     * @param float|null $vitaminD
     */
    public function setVitaminD($vitaminD)
    {
        $this->vitaminD = $vitaminD;
    }

    /**
     * @return float|null
     */
    public function getVitaminE()
    {
        return $this->vitaminE;
    }

    /**
     * @param float|null $vitaminE
     */
    public function setVitaminE($vitaminE)
    {
        $this->vitaminE = $vitaminE;
    }

    /**
     * @return float|null
     */
    public function getVitaminK1()
    {
        return $this->vitaminK1;
    }

    /**
     * @param float|null $vitaminK1
     */
    public function setVitaminK1($vitaminK1)
    {
        $this->vitaminK1 = $vitaminK1;
    }

    /**
     * @return float|null
     */
    public function getVitaminK2()
    {
        return $this->vitaminK2;
    }

    /**
     * @param float|null $vitaminK2
     */
    public function setVitaminK2($vitaminK2)
    {
        $this->vitaminK2 = $vitaminK2;
    }

    /**
     * @return float|null
     */
    public function getVitaminC()
    {
        return $this->vitaminC;
    }

    /**
     * @param float|null $vitaminC
     */
    public function setVitaminC($vitaminC)
    {
        $this->vitaminC = $vitaminC;
    }

    /**
     * @return float|null
     */
    public function getVitaminB1()
    {
        return $this->vitaminB1;
    }

    /**
     * @param float|null $vitaminB1
     */
    public function setVitaminB1($vitaminB1)
    {
        $this->vitaminB1 = $vitaminB1;
    }

    /**
     * @return float|null
     */
    public function getVitaminB2()
    {
        return $this->vitaminB2;
    }

    /**
     * @param float|null $vitaminB2
     */
    public function setVitaminB2($vitaminB2)
    {
        $this->vitaminB2 = $vitaminB2;
    }

    /**
     * @return float|null
     */
    public function getVitaminB3()
    {
        return $this->vitaminB3;
    }

    /**
     * @param float|null $vitaminB3
     */
    public function setVitaminB3($vitaminB3)
    {
        $this->vitaminB3 = $vitaminB3;
    }

    /**
     * @return float|null
     */
    public function getVitaminB5()
    {
        return $this->vitaminB5;
    }

    /**
     * @param float|null $vitaminB5
     */
    public function setVitaminB5($vitaminB5)
    {
        $this->vitaminB5 = $vitaminB5;
    }

    /**
     * @return float|null
     */
    public function getVitaminB6()
    {
        return $this->vitaminB6;
    }

    /**
     * @param float|null $vitaminB6
     */
    public function setVitaminB6($vitaminB6)
    {
        $this->vitaminB6 = $vitaminB6;
    }

    /**
     * @return float|null
     */
    public function getVitaminB9()
    {
        return $this->vitaminB9;
    }

    /**
     * @param float|null $vitaminB9
     */
    public function setVitaminB9($vitaminB9)
    {
        $this->vitaminB9 = $vitaminB9;
    }

    /**
     * @return float|null
     */
    public function getVitaminB12()
    {
        return $this->vitaminB12;
    }

    /**
     * @param float|null $vitaminB12
     */
    public function setVitaminB12($vitaminB12)
    {
        $this->vitaminB12 = $vitaminB12;
    }
}