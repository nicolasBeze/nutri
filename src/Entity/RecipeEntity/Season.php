<?php

namespace App\Entity\RecipeEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Recipe;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\SeasonTrait;

/**
 * Class Season
 *
 * @ApiResource()
 * @ORM\Entity()
 * @ORM\Table(name="recipe_season")
 * @package App\Entity\RecipeEntity
 */
class Season
{
    use SeasonTrait;

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
