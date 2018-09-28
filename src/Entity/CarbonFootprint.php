<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity()
 * Class Ingredient
 *
 * @package App\Entity
 */
class CarbonFootprint
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
     * @ORM\Column(type="float", nullable=false)
     * @Assert\NotBlank
     * @var float
     */
    private $default;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @Assert\NotBlank
     * @var float
     */
    private $nationalProximity;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @Assert\NotBlank
     * @var float
     */
    private $maxProximity;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @Assert\NotBlank
     * @var float
     */
    private $notInSeason;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @Assert\NotBlank
     * @var float
     */
    private $fresh;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @Assert\NotBlank
     * @var float
     */
    private $dried;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @Assert\NotBlank
     * @var float
     */
    private $canned;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @Assert\NotBlank
     * @var float
     */
    private $chilled;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @Assert\NotBlank
     * @var float
     */
    private $frozen;

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
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return float
     */
    public function getDefault(): float
    {
        return $this->default;
    }

    /**
     * @param float $default
     *
     * @return $this
     */
    public function setDefault(float $default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return float
     */
    public function getNationalProximity(): float
    {
        return $this->nationalProximity;
    }

    /**
     * @param float $nationalProximity
     *
     * @return $this
     */
    public function setNationalProximity(float $nationalProximity)
    {
        $this->nationalProximity = $nationalProximity;

        return $this;
    }

    /**
     * @return float
     */
    public function getMaxProximity(): float
    {
        return $this->maxProximity;
    }

    /**
     * @param float $maxProximity
     *
     * @return $this
     */
    public function setMaxProximity(float $maxProximity)
    {
        $this->maxProximity = $maxProximity;

        return $this;
    }

    /**
     * @return float
     */
    public function getNotInSeason(): float
    {
        return $this->notInSeason;
    }

    /**
     * @param float $notInSeason
     *
     * @return $this
     */
    public function setNotInSeason(float $notInSeason)
    {
        $this->notInSeason = $notInSeason;

        return $this;
    }

    /**
     * @return float
     */
    public function getFresh(): float
    {
        return $this->fresh;
    }

    /**
     * @param float $fresh
     *
     * @return $this
     */
    public function setFresh(float $fresh)
    {
        $this->fresh = $fresh;

        return $this;
    }

    /**
     * @return float
     */
    public function getDried(): float
    {
        return $this->dried;
    }

    /**
     * @param float $dried
     *
     * @return $this
     */
    public function setDried(float $dried)
    {
        $this->dried = $dried;

        return $this;
    }

    /**
     * @return float
     */
    public function getCanned(): float
    {
        return $this->canned;
    }

    /**
     * @param float $canned
     *
     * @return $this
     */
    public function setCanned(float $canned)
    {
        $this->canned = $canned;

        return $this;
    }

    /**
     * @return float
     */
    public function getChilled(): float
    {
        return $this->chilled;
    }

    /**
     * @param float $chilled
     *
     * @return $this
     */
    public function setChilled(float $chilled)
    {
        $this->chilled = $chilled;

        return $this;
    }

    /**
     * @return float
     */
    public function getFrozen(): float
    {
        return $this->frozen;
    }

    /**
     * @param float $frozen
     *
     * @return $this
     */
    public function setFrozen(float $frozen)
    {
        $this->frozen = $frozen;

        return $this;
    }
}