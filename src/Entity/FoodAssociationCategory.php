<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class FoodAssociationCategory
 *
 * @package App\Entity
 *
 * @ApiResource()
 * @ORM\Entity()
 */
class FoodAssociationCategory
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
     * @var ArrayCollection|FoodAssociationCategory[]
     * @ORM\ManyToMany(targetEntity="FoodAssociationCategory", cascade={"persist"})
     */
    private $goodAssociations;

    /**
     * @var ArrayCollection|FoodAssociationCategory[]
     * @ORM\ManyToMany(targetEntity="FoodAssociationCategory", cascade={"persist"})
     */
    private $neutralAssociations;

    /**
     * @var ArrayCollection|FoodAssociationCategory[]
     * @ORM\ManyToMany(targetEntity="FoodAssociationCategory", cascade={"persist"})
     */
    private $proscribeAssociations;

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
     * @return FoodAssociationCategory
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return FoodAssociationCategory[]|ArrayCollection
     */
    public function getGoodAssociations(): ArrayCollection
    {
        return $this->goodAssociations;
    }

    /**
     * @param FoodAssociationCategory $foodAssociationCategory
     *
     * @return FoodAssociationCategory
     */
    public function addGoodAssociation(FoodAssociationCategory $foodAssociationCategory): self
    {
        if (!$this->goodAssociations->contains($foodAssociationCategory)) {
            $this->goodAssociations->add($foodAssociationCategory);
        }

        return $this;
    }

    /**
     * @param FoodAssociationCategory $foodAssociationCategory
     *
     * @return FoodAssociationCategory
     */
    public function removeGoodAssociation(FoodAssociationCategory $foodAssociationCategory): self
    {
        $this->goodAssociations->removeElement($foodAssociationCategory);

        return $this;
    }

    /**
     * @return FoodAssociationCategory[]|ArrayCollection
     */
    public function getNeutralAssociations(): ArrayCollection
    {
        return $this->neutralAssociations;
    }

    /**
     * @param FoodAssociationCategory $foodAssociationCategory
     *
     * @return FoodAssociationCategory
     */
    public function addNeutralAssociation(FoodAssociationCategory $foodAssociationCategory): self
    {
        if (!$this->neutralAssociations->contains($foodAssociationCategory)) {
            $this->neutralAssociations->add($foodAssociationCategory);
        }

        return $this;
    }

    /**
     * @param FoodAssociationCategory $foodAssociationCategory
     *
     * @return FoodAssociationCategory
     */
    public function removeNeutralAssociation(FoodAssociationCategory $foodAssociationCategory): self
    {
        $this->neutralAssociations->removeElement($foodAssociationCategory);

        return $this;
    }

    /**
     * @return FoodAssociationCategory[]|ArrayCollection
     */
    public function getProscribeAssociations(): ArrayCollection
    {
        return $this->proscribeAssociations;
    }

    /**
     * @param FoodAssociationCategory $foodAssociationCategory
     *
     * @return FoodAssociationCategory
     */
    public function addProscribeAssociation(FoodAssociationCategory $foodAssociationCategory): self
    {
        if (!$this->proscribeAssociations->contains($foodAssociationCategory)) {
            $this->proscribeAssociations->add($foodAssociationCategory);
        }

        return $this;
    }

    /**
     * @param FoodAssociationCategory $foodAssociationCategory
     *
     * @return FoodAssociationCategory
     */
    public function removeProscribeAssociation(FoodAssociationCategory $foodAssociationCategory): self
    {
        $this->proscribeAssociations->removeElement($foodAssociationCategory);

        return $this;
    }
}