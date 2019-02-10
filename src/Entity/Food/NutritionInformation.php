<?php

namespace App\Entity\Food;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Food;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\NutritionInformationTrait;

/**
 * Class NutritionInformation
 * @ApiResource()
 * @ORM\Entity()
 *
 * @package App\Entity\Food
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
     * @ORM\OneToOne(targetEntity="Food")
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
     * @return NutritionInformation
     */
    public function setFood(Food $food): self
    {
        $this->food = $food;

        return $this;
    }
}
