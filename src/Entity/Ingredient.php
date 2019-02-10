<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity()
 * Class Ingredient
 *
 * @package App\Entity
 */
class Ingredient
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @Assert\NotBlank
     * @var float
     */
    private $value;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\Choice(callback={"Util", "getUnitIngredient"})
     * @Assert\NotBlank
     * @var string
     */
    private $unit;

    /**
     * @ORM\ManyToOne(targetEntity="Food")
     * @Assert\NotBlank
     * @var Food
     */
    private $food;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
     * @return Ingredient
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
     * @return Ingredient
     */
    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

}