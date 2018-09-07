<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity()
 * Class RecipeStep
 *
 * @package App\Entity
 */
class RecipeStep
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
     * @var integer
     */
    private $step;

    /**
     * @ORM\Column
     * @Assert\NotBlank
     * @var string
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Ingredient", cascade={"persist"})
     * @var ArrayCollection|Ingredient[]
     */
    private $ingredients;

    /**
     * @ORM\ManyToOne(targetEntity="Cooking")
     * @var Cooking
     */
    private $cooking;

    /**
     * @ORM\Column
     * @var integer
     */
    private $cookingTemperature;

    /**
     * @ORM\Column
     * @var integer
     */
    private $cookingTime;

    /**
     * @ORM\Column
     * @var integer
     */
    private $preparationTime;

    /**
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @Assert\NotBlank
     * @var Recipe
     */
    private $recipe;

    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getStep(): int
    {
        return $this->step;
    }

    /**
     * @param int $step
     *
     * @return RecipeStep
     */
    public function setStep(int $step): self
    {
        $this->step = $step;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return RecipeStep
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Ingredient[]|ArrayCollection
     */
    public function getIngredients(): ArrayCollection
    {
        return $this->ingredients;
    }

    /**
     * @param Ingredient $ingredient
     *
     * @return RecipeStep
     */
    public function addIngredient(Ingredient $ingredient): self
    {
        if (!$this->ingredients->contains($ingredient)) {
            $this->ingredients->add($ingredient);
        }

        return $this;
    }

    /**
     * @param Ingredient $ingredient
     *
     * @return RecipeStep
     */
    public function removeIngredient(Ingredient $ingredient): self
    {
        $this->ingredients->removeElement($ingredient);

        return $this;
    }

    /**
     * @return Cooking
     */
    public function getCooking(): Cooking
    {
        return $this->cooking;
    }

    /**
     * @param Cooking $cooking
     *
     * @return RecipeStep
     */
    public function setCooking(Cooking $cooking): self
    {
        $this->cooking = $cooking;

        return $this;
    }

    /**
     * @return int
     */
    public function getCookingTemperature(): int
    {
        return $this->cookingTemperature;
    }

    /**
     * @param int $cookingTemperature
     *
     * @return RecipeStep
     */
    public function setCookingTemperature(int $cookingTemperature): self
    {
        $this->cookingTemperature = $cookingTemperature;

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
     * @return RecipeStep
     */
    public function setCookingTime(int $cookingTime): self
    {
        $this->cookingTime = $cookingTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }

    /**
     * @param int $preparationTime
     *
     * @return RecipeStep
     */
    public function setPreparationTime($preparationTime):self
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * @return Recipe
     */
    public function getRecipe(): Recipe
    {
        return $this->recipe;
    }

    /**
     * @param Recipe $recipe
     *
     * @return RecipeStep
     */
    public function setRecipe(Recipe $recipe):self
    {
        $this->recipe = $recipe;

        return $this;
    }
}