<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    protected $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var string
     */
    protected $ciqualId;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    protected $level;

    /**
     * @ORM\ManyToOne(targetEntity="FoodCategory")
     * @var FoodCategory|null
     */
    protected $parentNode;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    protected $leftBorder;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank
     * @var integer
     */
    protected $rightBorder;


    /** @var ArrayCollection|FoodCategory[] */
    private $subCategories;

    /**
     * FoodCategory constructor.
     *
     * @param int               $ciqualId
     * @param string            $name
     * @param int               $level
     * @param FoodCategory|null $parent
     */
    function __construct(int $ciqualId, string $name, int $level, FoodCategory $parent = null)
    {
        $this->ciqualId = $ciqualId;
        $this->name = $name;
        $this->level = $level;
        if($parent) {
            $this->parentNode = $parent;
        }
        $this->subCategories = new ArrayCollection();
    }

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
    public function getCiqualId(): string
    {
        return $this->ciqualId;
    }

    /**
     * @param string $ciqualId
     */
    public function setCiqualId(string $ciqualId)
    {
        $this->ciqualId = $ciqualId;
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
    }

    /**
     * @return FoodCategory[]|ArrayCollection
     */
    public function getSubCategories(): ArrayCollection
    {
        return $this->subCategories;
    }

    /**
     * @param FoodCategory $category
     *
     * @return FoodCategory
     */
    public function addSubCategory(FoodCategory $category): self
    {
        if (!$this->subCategories->contains($category)) {
            $this->subCategories->add($category);
        }

        return $this;
    }

    /**
     * @param ArrayCollection $collection
     * @param string       $name
     *
     * @return bool|FoodCategory
     */
    static function findByName(ArrayCollection $collection, string $name) {
        return $collection->filter(function(FoodCategory $cat) use ($name) {
            return $cat->getName() === $name;
        })->first();
    }
}