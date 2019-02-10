<?php

namespace App\Entity;

use App\Entity\Recipe\Allergen;
use App\Entity\Recipe\FattyAcid;
use App\Entity\Recipe\Mineral;
use App\Entity\Recipe\NutritionIndex;
use App\Entity\Recipe\NutritionInformation;
use App\Entity\Recipe\Seasonality;
use App\Entity\Recipe\Vitamin;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity()
 * Class Recipe
 *
 * @package App\Entity
 */
class Recipe
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
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank
     * @var string
     */
    private $image;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank
     * @var string
     */
    private $author;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     * @Assert\NotBlank
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $status;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $checked;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    private $people;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    private $preparationTime;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    private $maxCookingTemperature;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    private $cookingTime;

    /**
     * @ORM\OneToMany(targetEntity="RecipeStep", mappedBy="recipe", cascade={"persist"})
     * @var ArrayCollection|RecipeStep[]
     */
    private $recipeSteps;

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

    public function __construct()
    {
        $this->recipeSteps = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
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
     * @return Recipe
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     *
     * @return Recipe
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     *
     * @return Recipe
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     *
     * @return Recipe
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate(): \DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime $creationDate
     *
     * @return Recipe
     */
    public function setCreationDate(\DateTime $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     *
     * @return Recipe
     */
    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return bool
     */
    public function isChecked(): bool
    {
        return $this->checked;
    }

    /**
     * @param bool $checked
     *
     * @return Recipe
     */
    public function setChecked(bool $checked): self
    {
        $this->checked = $checked;

        return $this;
    }

    /**
     * @return int
     */
    public function getPeople(): int
    {
        return $this->people;
    }

    /**
     * @param int $people
     *
     * @return Recipe
     */
    public function setPeople(int $people): self
    {
        $this->people = $people;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        return $this->preparationTime;
    }

    /**
     * @param int $preparationTime
     *
     * @return Recipe
     */
    public function setPreparationTime(int $preparationTime): self
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getCookingTime(): int
    {
        return $this->cookingTime;
    }

    /**
     * @param int $cookingTime
     *
     * @return Recipe
     */
    public function setCookingTime(int $cookingTime): self
    {
        $this->cookingTime = $cookingTime;

        return $this;
    }

    /**
     * @return RecipeStep[]|ArrayCollection
     */
    public function getRecipeSteps()
    {
        return $this->recipeSteps;
    }

    /**
     * @param $recipeSteps
     *
     * @return Recipe
     */
    public function setRecipeSteps($recipeSteps): self
    {
        $this->recipeSteps = $recipeSteps;

        return $this;
    }
}