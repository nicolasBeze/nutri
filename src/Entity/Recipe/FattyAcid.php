<?php

namespace App\Entity\Recipe;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Recipe;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\FattyAcidTrait;

/**
 * Class FattyAcid
 * @ApiResource()
 * @ORM\Entity()
 *
 * @package App\Entity\Food
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
     * @ORM\OneToOne(targetEntity="Recipe")
     * @Assert\NotBlank
     * @var Recipe
     */
    private $recipe;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Recipe
     */
    public function getRecipe(): Recipe
    {
        return $this->recipe;
    }

    /**
     * @param Recipe $recipe
     *
     * @return FattyAcid
     */
    public function setRecipe(Recipe $recipe): self
    {
        $this->recipe = $recipe;
        return $this;
    }
}
