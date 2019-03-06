<?php

namespace App\Entity\FoodEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Food;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\SeasonalityTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Seasonality
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="food_seasonality")
 *
 * @package App\Entity\FoodEntity
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
     * @ORM\OneToOne(targetEntity="App\Entity\Food")
     * @Assert\NotBlank
     * @var Food
     */
    private $food;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Food
     */
    public function getFood(): Food
    {
        return $this->food;
    }

    /**
     * @param Food $food
     *
     * @return Seasonality
     */
    public function setFood(Food $food): self
    {
        $this->food = $food;

        return $this;
    }
}
