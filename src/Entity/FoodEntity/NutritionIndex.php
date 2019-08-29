<?php

namespace App\Entity\FoodEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Food;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\NutritionIndexTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class NutritionIndex
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="food_nutrition_index")
 *
 * @package App\Entity\FoodEntity
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
