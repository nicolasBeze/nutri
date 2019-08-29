<?php

namespace App\Entity\FoodEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Food;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\FattyAcidTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class FattyAcid
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="food_fatty_acid")
 *
 * @package App\Entity\FoodEntity
 */
class FattyAcid
{
    use FattyAcidTrait;

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
