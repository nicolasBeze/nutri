<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Traits\Allergens;
use App\Traits\FattyAcid;
use App\Traits\Mineral;
use App\Traits\NutritionIndex;
use App\Traits\NutritionInformation;
use App\Traits\Vitamin;
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
     * @ORM\ManyToOne(targetEntity="FoodCategory")
     * @var ArrayCollection|FoodCategory[]
     */
    private $foodCategory;

    /**
     * @ORM\ManyToOne(targetEntity="FoodAssociationCategory")
     * @var ArrayCollection|FoodAssociationCategory[]
     */
    private $foodAssociationCategory;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    private $ciqual_id;

    /**
     * @ORM\ManyToMany(targetEntity="Allergen")
     * @var Allergen
     */
    private $allergens;

    public function __construct()
    {
        $this->allergens = new ArrayCollection();
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
     * @return FoodCategory[]|ArrayCollection
     */
    public function getFoodCategory()
    {
        return $this->foodCategory;
    }

    /**
     * @param FoodCategory[]|ArrayCollection $foodCategory
     */
    public function setFoodCategory($foodCategory)
    {
        $this->foodCategory = $foodCategory;
    }

    /**
     * @return FoodAssociationCategory[]|ArrayCollection
     */
    public function getFoodAssociationCategory()
    {
        return $this->foodAssociationCategory;
    }

    /**
     * @param FoodAssociationCategory[]|ArrayCollection $foodAssociationCategory
     */
    public function setFoodAssociationCategory($foodAssociationCategory)
    {
        $this->foodAssociationCategory = $foodAssociationCategory;
    }

    /**
     * @return int
     */
    public function getCiqualId(): int
    {
        return $this->ciqual_id;
    }

    /**
     * @param int $ciqual_id
     */
    public function setCiqualId(int $ciqual_id)
    {
        $this->ciqual_id = $ciqual_id;
    }

    /**
     * @return Allergen[]|ArrayCollection
     */
    public function getAllergens(): ArrayCollection
    {
        return $this->allergens;
    }

    /**
     * @param Allergen $allergen
     *
     * @return Food
     */
    public function addAllergen(Allergen $allergen): self
    {
        if (!$this->allergens->contains($allergen)) {
            $this->allergens->add($allergen);
        }

        return $this;
    }

    /**
     * @param Allergen $allergen
     *
     * @return Food
     */
    public function removeAllergen(Allergen $allergen): self
    {
        $this->allergens->removeElement($allergen);

        return $this;
    }
}