<?php

namespace App\Entity\RecipeEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Recipe;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\SeasonalityTrait;

/**
 * Class Seasonality
 *
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="recipe_seasonality")
 * @package App\Entity\RecipeEntity
 */
class Seasonality
{
    use SeasonalityTrait;

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
     * @return Seasonality
     */
    public function setRecipe(Recipe $recipe): self
    {
        $this->recipe = $recipe;
        return $this;
    }
}
