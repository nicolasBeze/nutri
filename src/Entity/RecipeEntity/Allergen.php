<?php

namespace App\Entity\RecipeEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Recipe;
use App\Traits\AllergenTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Allergen
 *
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="recipe_allergen")
 * @package App\Entity\RecipeEntity
 */
class Allergen
{
    use AllergenTrait;

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
     * @return Allergen
     */
    public function setRecipe(Recipe $recipe): self
    {
        $this->recipe = $recipe;
        return $this;
    }
}