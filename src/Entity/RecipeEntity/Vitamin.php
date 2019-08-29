<?php

namespace App\Entity\RecipeEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Recipe;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\VitaminTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Vitamin
 *
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="recipe_vitamin")
 * @package App\Entity\RecipeEntity
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
