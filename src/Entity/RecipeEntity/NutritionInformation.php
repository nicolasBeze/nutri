<?php

namespace App\Entity\RecipeEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Recipe;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\NutritionInformationTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class NutritionInformation
 *
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="recipe_nutrition_information")
 * @package App\Entity\RecipeEntity
 */
class NutritionInformation
{
    use NutritionInformationTrait;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Recipe")
     * @Assert\NotBlank
     * @var Recipe
     */
    private $recipe;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
     * @return NutritionInformation
     */
    public function setRecipe(Recipe $recipe): self
    {
        $this->recipe = $recipe;
        return $this;
    }
}
