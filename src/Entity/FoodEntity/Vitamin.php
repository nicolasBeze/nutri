<?php

namespace App\Entity\FoodEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\VitaminTrait;

/**
 * Class Vitamin
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="food_vitamin")
 *
 * @package App\Entity\FoodEntity
 */
class Vitamin
{
    use VitaminTrait;

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
