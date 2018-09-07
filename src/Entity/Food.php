<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Food
 * @ApiResource()
 * @ORM\Entity()
 *
 * @package App\Entity
 */
class Food
{
    use NutritionInformation, Allergens {
        Allergens::__construct as private __aConstruct;
    }

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank
     * @var string
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="NutrientBase", mappedBy="food", cascade={"persist"})
     * @var ArrayCollection|NutrientBase[]
     */
    private $nutrientBases;

    /**
     * @ORM\OneToMany(targetEntity="Nutrient", mappedBy="food", cascade={"persist"})
     * @var ArrayCollection|Nutrient[]
     */
    private $nutrients;

    public function __construct()
    {
        $this->nutrientBases = new ArrayCollection();
        $this->nutrients = new ArrayCollection();
        $this->__aConstruct();
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
    public function getNutrientBases(): ArrayCollection
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
            $nutrientBase->setFood($this);
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
    public function getNutrients(): ArrayCollection
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
            $nutrient->setFood($this);
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