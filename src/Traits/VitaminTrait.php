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
    public function getRetinol(): ?float
    {
        return $this->retinol;
    }

    /**
     * @param float|null $retinol
     */
    public function setRetinol(?float $retinol)
    {
        $this->retinol = $retinol;
    }

    /**
     * @return float|null
     */
    public function getBetaCarotene(): ?float
    {
        return $this->betaCarotene;
    }

    /**
     * @param float|null $betaCarotene
     */
    public function setBetaCarotene(?float $betaCarotene)
    {
        $this->betaCarotene = $betaCarotene;
    }

    /**
     * @return float|null
     */
    public function getVitaminD(): ?float
    {
        return $this->vitaminD;
    }

    /**
     * @param float|null $vitaminD
     */
    public function setVitaminD(?float $vitaminD)
    {
        $this->vitaminD = $vitaminD;
    }

    /**
     * @return float|null
     */
    public function getVitaminE(): ?float
    {
        return $this->vitaminE;
    }

    /**
     * @param float|null $vitaminE
     */
    public function setVitaminE(?float $vitaminE)
    {
        $this->vitaminE = $vitaminE;
    }

    /**
     * @return float|null
     */
    public function getVitaminK1(): ?float
    {
        return $this->vitaminK1;
    }

    /**
     * @param float|null $vitaminK1
     */
    public function setVitaminK1(?float $vitaminK1)
    {
        $this->vitaminK1 = $vitaminK1;
    }

    /**
     * @return float|null
     */
    public function getVitaminK2(): ?float
    {
        return $this->vitaminK2;
    }

    /**
     * @param float|null $vitaminK2
     */
    public function setVitaminK2(?float $vitaminK2)
    {
        $this->vitaminK2 = $vitaminK2;
    }

    /**
     * @return float|null
     */
    public function getVitaminC(): ?float
    {
        return $this->vitaminC;
    }

    /**
     * @param float|null $vitaminC
     */
    public function setVitaminC(?float $vitaminC)
    {
        $this->vitaminC = $vitaminC;
    }

    /**
     * @return float|null
     */
    public function getVitaminB1(): ?float
    {
        return $this->vitaminB1;
    }

    /**
     * @param float|null $vitaminB1
     */
    public function setVitaminB1(?float $vitaminB1)
    {
        $this->vitaminB1 = $vitaminB1;
    }

    /**
     * @return float|null
     */
    public function getVitaminB2(): ?float
    {
        return $this->vitaminB2;
    }

    /**
     * @param float|null $vitaminB2
     */
    public function setVitaminB2(?float $vitaminB2)
    {
        $this->vitaminB2 = $vitaminB2;
    }

    /**
     * @return float|null
     */
    public function getVitaminB3(): ?float
    {
        return $this->vitaminB3;
    }

    /**
     * @param float|null $vitaminB3
     */
    public function setVitaminB3(?float $vitaminB3)
    {
        $this->vitaminB3 = $vitaminB3;
    }

    /**
     * @return float|null
     */
    public function getVitaminB5(): ?float
    {
        return $this->vitaminB5;
    }

    /**
     * @param float|null $vitaminB5
     */
    public function setVitaminB5(?float $vitaminB5)
    {
        $this->vitaminB5 = $vitaminB5;
    }

    /**
     * @return float|null
     */
    public function getVitaminB6(): ?float
    {
        return $this->vitaminB6;
    }

    /**
     * @param float|null $vitaminB6
     */
    public function setVitaminB6(?float $vitaminB6)
    {
        $this->vitaminB6 = $vitaminB6;
    }

    /**
     * @return float|null
     */
    public function getVitaminB9(): ?float
    {
        return $this->vitaminB9;
    }

    /**
     * @param float|null $vitaminB9
     */
    public function setVitaminB9(?float $vitaminB9)
    {
        $this->vitaminB9 = $vitaminB9;
    }

    /**
     * @return float|null
     */
    public function getVitaminB12(): ?float
    {
        return $this->vitaminB12;
    }

    /**
     * @param float|null $vitaminB12
     */
    public function setVitaminB12(?float $vitaminB12)
    {
        $this->vitaminB12 = $vitaminB12;
    }
}