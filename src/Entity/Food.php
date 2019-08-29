<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\FoodEntity\Allergen;
use App\Entity\FoodEntity\FattyAcid;
use App\Entity\FoodEntity\Mineral;
use App\Entity\FoodEntity\NutritionIndex;
use App\Entity\FoodEntity\NutritionInformation;
use App\Entity\FoodEntity\Season;
use App\Entity\FoodEntity\Vitamin;
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
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    private $ciqualId;

    /**
     * @ORM\ManyToOne(targetEntity="FoodCategory")
     * @var FoodCategory|null
     */
    private $foodCategory;

    /**
     * @ORM\ManyToOne(targetEntity="FoodAssociationCategory")
     * @var FoodAssociationCategory
     */
    private $foodAssociationCategory;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $carbonFootprint;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Assert\NotBlank
     * @var boolean
     */
    private $industrial;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FoodEntity\Allergen", cascade={"persist", "remove"})
     * @Assert\NotBlank
     * @var Allergen
     */
    private $allergen;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FoodEntity\FattyAcid", cascade={"persist", "remove"})
     * @Assert\NotBlank
     * @var FattyAcid
     */
    private $fattyAcid;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FoodEntity\Mineral", cascade={"persist", "remove"})
     * @Assert\NotBlank
     * @var Mineral
     */
    private $mineral;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FoodEntity\NutritionIndex", cascade={"persist", "remove"})
     * @Assert\NotBlank
     * @var NutritionIndex
     */
    private $nutritionIndex;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FoodEntity\NutritionInformation", cascade={"persist", "remove"})
     * @Assert\NotBlank
     * @var NutritionInformation
     */
    private $nutritionInformation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Assert\NotBlank
     * @var boolean
     */
    private $seasonality;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FoodEntity\Season", cascade={"persist", "remove"})
     * @Assert\NotBlank
     * @var Season
     */
    private $season;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FoodEntity\Vitamin", cascade={"persist", "remove"})
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
     * @return FoodCategory
     */
    public function getFoodCategory(): ?FoodCategory
    {
        return $this->foodCategory;
    }

    /**
     * @param FoodCategory $foodCategory
     *
     * @return Food
     */
    public function setFoodCategory(?FoodCategory $foodCategory): self
    {
        $this->foodCategory = $foodCategory;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFoodAssociationCategory(): ?FoodAssociationCategory
    {
        return $this->foodAssociationCategory;
    }

    /**
     * @param FoodAssociationCategory|null $foodAssociationCategory
     *
     * @return Food
     */
    public function setFoodAssociationCategory(?FoodAssociationCategory $foodAssociationCategory): self
    {
        $this->foodAssociationCategory = $foodAssociationCategory;

        return $this;
    }

    /**
     * @return int
     */
    public function getCiqualId(): int
    {
        return $this->ciqualId;
    }

    /**
     * @param int $ciqualId
     *
     * @return Food
     */
    public function setCiqualId(int $ciqualId): self
    {
        $this->ciqualId = $ciqualId;

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
     *
     * @return Food
     */
    public function setIndustrial(bool $industrial): self
    {
        $this->industrial = $industrial;

        return $this;
    }

    /**
     * @return Allergen
     */
    public function getAllergen(): ?Allergen
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
    public function getFattyAcid(): ?FattyAcid
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
    public function getMineral(): ?Mineral
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
    public function getNutritionIndex(): ?NutritionIndex
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
    public function getNutritionInformation(): ?NutritionInformation
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
     * @return bool
     */
    public function isSeasonality(): bool
    {
        return $this->seasonality;
    }

    /**
     * @param bool $seasonality
     *
     * @return Food
     */
    public function setSeasonality(bool $seasonality): self
    {
        $this->seasonality = $seasonality;

        return $this;
    }

    /**
     * @return Season
     */
    public function getSeason(): ?Season
    {
        return $this->season;
    }

    /**
     * @param Season $season
     *
     * @return Food
     */
    public function setSeason(Season $season): self
    {
        $this->season = $season;

        return $this;
    }

    /**
     * @return Vitamin
     */
    public function getVitamin(): ?Vitamin
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

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __isset($prop): bool
    {
        return isset($this->$prop);
    }

    /**
     * @param ArrayCollection $collection
     * @param int             $ciqualId
     *
     * @return Food|bool
     */
    static function findByCiqualId(ArrayCollection $collection, int $ciqualId) {
        return $collection->filter(function(Food $food) use ($ciqualId) {
            return $food->getCiqualId() === $ciqualId;
        })->first();
    }
}