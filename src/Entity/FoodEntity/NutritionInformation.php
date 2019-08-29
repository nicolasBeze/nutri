<?php

namespace App\Entity\FoodEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\NutritionInformationTrait;

/**
 * Class NutritionInformation
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="food_nutrition_information")
 *
 * @package App\Entity\FoodEntity
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
