<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Food\Allergen;
use App\Entity\Food\FattyAcid;
use App\Entity\Food\Mineral;
use App\Entity\Food\NutritionIndex;
use App\Entity\Food\NutritionInformation;
use App\Entity\Food\Seasonality;
use App\Entity\Food\Vitamin;
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
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $carbonFootprint;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $industrial;

    /**
     * @ORM\OneToOne(targetEntity="Allergen")
     * @Assert\NotBlank
     * @var Allergen
     */
    private $allergen;

    /**
     * @ORM\OneToOne(targetEntity="FattyAcid")
     * @Assert\NotBlank
     * @var FattyAcid
     */
    private $fattyAcid;

    /**
     * @ORM\OneToOne(targetEntity="Mineral")
     * @Assert\NotBlank
     * @var Mineral
     */
    private $mineral;

    /**
     * @ORM\OneToOne(targetEntity="NutritionIndex")
     * @Assert\NotBlank
     * @var NutritionIndex
     */
    private $nutritionIndex;

    /**
     * @ORM\OneToOne(targetEntity="NutritionInformation")
     * @Assert\NotBlank
     * @var NutritionInformation
     */
    private $nutritionInformation;

    /**
     * @ORM\OneToOne(targetEntity="Seasonality")
     * @Assert\NotBlank
     * @var Seasonality
     */
    private $seasonality;

    /**
     * @ORM\OneToOne(targetEntity="Vitamin")
     * @Assert\NotBlank
     * @var Vitamin
     */
    private $vitamin;

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
     * @param $foodCategory
     *
     * @return Food
     */
    public function setFoodCategory($foodCategory): self
    {
        $this->foodCategory = $foodCategory;
        return $this;
    }

    /**
     * @return FoodAssociationCategory[]|ArrayCollection
     */
    public function getFoodAssociationCategory()
    {
        return $this->foodAssociationCategory;
    }

    /**
     * @param $foodAssociationCategory
     *
     * @return Food
     */
    public function setFoodAssociationCategory($foodAssociationCategory): self
    {
        $this->foodAssociationCategory = $foodAssociationCategory;
        return $this;
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
     *
     * @return Food
     */
    public function setCiqualId(int $ciqual_id): self
    {
        $this->ciqual_id = $ciqual_id;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getCarbonFootprint()
    {
        return $this->carbonFootprint;
    }

    /**
     * @param $carbonFootprint
     *
     * @return Food
     */
    public function setCarbonFootprint($carbonFootprint): self
    {
        $this->carbonFootprint = $carbonFootprint;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIndustrial(): bool
    {
        return $this->industrial;
    }

    /**
     * @param bool $industrial
     */
    public function setIndustrial(bool $industrial)
    {
        $this->industrial = $industrial;
    }

    /**
     * @return Allergen
     */
    public function getAllergen(): Allergen
    {
        return $this->allergen;
    }

    /**
     * @param Allergen $allergen
     *
     * @return Food
     */
    public function setAllergen(Allergen $allergen): self
    {
        $this->allergen = $allergen;
        return $this;
    }

    /**
     * @return FattyAcid
     */
    public function getFattyAcid(): FattyAcid
    {
        return $this->fattyAcid;
    }

    /**
     * @param FattyAcid $fattyAcid
     *
     * @return Food
     */
    public function setFattyAcid(FattyAcid $fattyAcid): self
    {
        $this->fattyAcid = $fattyAcid;
        return $this;
    }

    /**
     * @return Mineral
     */
    public function getMineral(): Mineral
    {
        return $this->mineral;
    }

    /**
     * @param Mineral $mineral
     *
     * @return Food
     */
    public function setMineral(Mineral $mineral): self
    {
        $this->mineral = $mineral;
        return $this;
    }

    /**
     * @return NutritionIndex
     */
    public function getNutritionIndex(): NutritionIndex
    {
        return $this->nutritionIndex;
    }

    /**
     * @param NutritionIndex $nutritionIndex
     *
     * @return Food
     */
    public function setNutritionIndex(NutritionIndex $nutritionIndex): self
    {
        $this->nutritionIndex = $nutritionIndex;
        return $this;
    }

    /**
     * @return NutritionInformation
     */
    public function getNutritionInformation(): NutritionInformation
    {
        return $this->nutritionInformation;
    }

    /**
     * @param NutritionInformation $nutritionInformation
     *
     * @return Food
     */
    public function setNutritionInformation(NutritionInformation $nutritionInformation): self
    {
        $this->nutritionInformation = $nutritionInformation;
        return $this;
    }

    /**
     * @return Seasonality
     */
    public function getSeasonality(): Seasonality
    {
        return $this->seasonality;
    }

    /**
     * @param Seasonality $seasonality
     *
     * @return Food
     */
    public function setSeasonality(Seasonality $seasonality): self
    {
        $this->seasonality = $seasonality;
        return $this;
    }

    /**
     * @return Vitamin
     */
    public function getVitamin(): Vitamin
    {
        return $this->vitamin;
    }

    /**
     * @param Vitamin $vitamin
     *
     * @return Food
     */
    public function setVitamin(Vitamin $vitamin): self
    {
        $this->vitamin = $vitamin;
        return $this;
    }
}