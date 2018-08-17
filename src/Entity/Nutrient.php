<?php

namespace App\Entity;

use App\Util\Util;
use Symfony\Component\Validator\Constraints as Assert;


class Nutrient
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $value;

    /**
     * @var string
     * @Assert\Choice(callback={"Util", "getUnitNutrient")
     */
    private $unit;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Nutrient
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     *
     * @return Nutrient
     */
    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     *
     * @return Nutrient
     */
    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

}