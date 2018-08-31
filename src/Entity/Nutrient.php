<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Util\Util;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity()
 * Class Nutrient
 *
 * @package App\Entity
 */
class Nutrient
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column
     * @Assert\NotBlank
     * @var string
     */
    private $name;

    /**
     * @ORM\Column
     * @Assert\NotBlank
     * @var float
     */
    private $value;

    /**
     * @ORM\Column
     * @Assert\Choice(callback={"Util", "getUnitNutrient"})
     * @Assert\NotBlank
     * @var string
     */
    private $unit;

    /**
     * @ORM\ManyToOne(targetEntity="Food", inversedBy="nutrients")
     * @Assert\NotBlank
     * @var Food
     */
    private $food;

    /**
     * @ORM\ManyToOne(targetEntity="NutrientBase", inversedBy="nutrients")
     * @var NutrientBase|null
     */
    private $nutrimentBase;

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

    /**
     * @return Food
     */
    public function getFood(): Food
    {
        return $this->food;
    }

    /**
     * @param Food $food
     *
     * @return Nutrient
     */
    public function setFood(Food $food): self
    {
        $this->food = $food;

        return $this;
    }

    /**
     * @return NutrientBase|null
     */
    public function getNutrimentBase(): ?NutrientBase
    {
        return $this->nutrimentBase;
    }

    /**
     * @param $nutrimentBase
     *
     * @return Nutrient
     */
    public function setNutrimentBase($nutrimentBase): self
    {
        $this->nutrimentBase = $nutrimentBase;

        return $this;
    }


}