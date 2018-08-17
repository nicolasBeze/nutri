<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Food
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
     * @var ArrayCollection|NutrientBase[]
     */
    private $nutrientBases;

    /**
     * @var ArrayCollection|Nutrient[]
     */
    private $nutrients;

    public function __construct()
    {
        $this->nutrientBases = new ArrayCollection();
        $this->nutrients = new ArrayCollection();
    }

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
     * @return Food
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return NutrientBase[]|ArrayCollection
     */
    public function getNutrientBases()
    {
        return $this->nutrientBases;
    }

    /**
     * @param NutrientBase $nutrientBase
     *
     * @return Food
     */
    public function addNutrientBase(NutrientBase $nutrientBase): self
    {
        if (!$this->nutrientBases->contains($nutrientBase)) {
            $this->nutrientBases->add($nutrientBase);
        }

        return $this;
    }

    /**
     * @param NutrientBase $nutrientBase
     *
     * @return Food
     */
    public function removeNutrientBase(NutrientBase $nutrientBase): self
    {
        $this->nutrientBases->removeElement($nutrientBase);

        return $this;
    }

    /**
     * @return Nutrient[]|ArrayCollection
     */
    public function getNutrients()
    {
        return $this->nutrients;
    }

    /**
     * @param Nutrient $nutrient
     *
     * @return Food
     */
    public function addNutrient(Nutrient $nutrient): self
    {
        if (!$this->nutrients->contains($nutrient)) {
            $this->nutrients->add($nutrient);
        }

        return $this;
    }

    /**
     * @param Nutrient $nutrient
     *
     * @return Food
     */
    public function removeNutrient(Nutrient $nutrient): self
    {
        $this->nutrients->removeElement($nutrient);

        return $this;
    }
}