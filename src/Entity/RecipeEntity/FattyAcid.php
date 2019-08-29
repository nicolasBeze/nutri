<?php

namespace App\Entity\RecipeEntity;

use ApiPlatform\Core\Annotation\ApiResource;

use App\Entity\Recipe;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\FattyAcidTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class FattyAcid
 *
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="recipe_fatty_acid")
 * @package App\Entity\RecipeEntity
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
