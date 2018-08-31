<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use App\Util\Util;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ApiResource()
 * @ORM\Entity()
 * Class NutrientBase
 *
 * @package App\Entity
 */
class NutrientBase
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
     * @Assert\Choice(callback={"Util", "getNutrientBase"})
     * @var string
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Nutrient", mappedBy="nutrimentBase", cascade={"persist"})
     * @var ArrayCollection|Nutrient[]
     */
    private $nutrients;

    /**
     * @ORM\ManyToOne(targetEntity="Food", inversedBy="nutrientBases")
     * @Assert\NotBlank
     * @var Food
     */
    private $food;

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
     * @return NutrientBase
     */
    public function setFood(Food $food): self
    {
        $this->food = $food;

        return $this;
    }
}