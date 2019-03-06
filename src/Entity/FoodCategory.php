<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class FoodCategory
 *
 * @package App\Entity
 *
 * @ApiResource()
 * @ORM\Entity()
 */
class FoodCategory
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    private $level;

    /**
     * @ORM\ManyToOne(targetEntity="FoodCategory")
     * @var FoodCategory|null
     */
    private $parentNode;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    private $leftBorder;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    private $rightBorder;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return FoodCategory
     */
    public function setName(string $name) :self
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     *
     * @return FoodCategory
     */
    public function setLevel(int $level) :self
    {
        $this->level = $level;
    }

    /**
     * @return FoodCategory|null
     */
    public function getParentNode()
    {
        return $this->parentNode;
    }

    /**
     * @param $parentNode
     *
     * @return FoodCategory
     */
    public function setParentNode($parentNode) :self
    {
        $this->parentNode = $parentNode;
    }

    /**
     * @return int
     */
    public function getLeftBorder(): int
    {
        return $this->leftBorder;
    }

    /**
     * @param int $leftBorder
     *
     * @return FoodCategory
     */
    public function setLeftBorder(int $leftBorder) :self
    {
        $this->leftBorder = $leftBorder;
    }

    /**
     * @return int
     */
    public function getRightBorder(): int
    {
        return $this->rightBorder;
    }

    /**
     * @param int $rightBorder
     *
     * @return FoodCategory
     */
    public function setRightBorder(int $rightBorder) :self
    {
        $this->rightBorder = $rightBorder;
    }
}