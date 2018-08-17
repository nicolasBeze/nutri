<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use App\Util\Util;
use Symfony\Component\Validator\Constraints as Assert;

class NutrientBase
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
     * @var ArrayCollection|Nutrient[]
     */
    private $nutrients;

    public function __construct()
    {
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
     * @Assert\Choice(callback={"Util", "getNutrientBase")
     *
     * @return NutrientBase
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Nutrient[]|ArrayCollection
     */
    public function getNutrients(): ArrayCollection
    {
        return $this->nutrients;
    }

    /**
     * @param Nutrient $nutrient
     *
     * @return NutrientBase
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
     * @return NutrientBase
     */
    public function removeNutrient(Nutrient $nutrient): self
    {
        $this->nutrients->removeElement($nutrient);

        return $this;
    }
}