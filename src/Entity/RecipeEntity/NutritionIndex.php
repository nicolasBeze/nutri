<?php

namespace App\Entity\RecipeEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Recipe;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\NutritionIndexTrait;

/**
 * Class NutritionIndex
 *
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="recipe_nutrition_index")
 * @package App\Entity\RecipeEntity
 */
class NutritionIndex
{
    use NutritionIndexTrait;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
