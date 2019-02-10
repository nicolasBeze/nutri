<?php

namespace App\Traits;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity()
 * Class Allergens
 *
 * @package App\Entity
 */
trait AllergenTrait
{
    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $gluten;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $lactose;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $crustacean;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $egg;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $peanut;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $fish;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $soy;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $nuts;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $celery;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $mustard;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $sesame;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $lupine;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $mollusc;

    /**
     * Allergens constructor.
     */
    public function __construct()
    {
        $this->gluten = false;
        $this->lactose = false;
        $this->crustacean = false;
        $this->egg = false;
        $this->peanut = false;
        $this->fish = false;
        $this->soy = false;
        $this->nuts = false;
        $this->celery = false;
        $this->mustard = false;
        $this->sesame = false;
        $this->lupine = false;
        $this->mollusc = false;
    }

    /**
     * @return bool
     */
    public function isGluten(): bool
    {
        return $this->gluten;
    }

    /**
     * @param bool $gluten
     */
    public function setGluten(bool $gluten)
    {
        $this->gluten = $gluten;
    }

    /**
     * @return bool
     */
    public function isLactose(): bool
    {
        return $this->lactose;
    }

    /**
     * @param bool $lactose
     */
    public function setLactose(bool $lactose)
    {
        $this->lactose = $lactose;
    }

    /**
     * @return bool
     */
    public function isCrustacean(): bool
    {
        return $this->crustacean;
    }

    /**
     * @param bool $crustacean
     */
    public function setCrustacean(bool $crustacean)
    {
        $this->crustacean = $crustacean;
    }

    /**
     * @return bool
     */
    public function isEgg(): bool
    {
        return $this->egg;
    }

    /**
     * @param bool $egg
     */
    public function setEgg(bool $egg)
    {
        $this->egg = $egg;
    }

    /**
     * @return bool
     */
    public function isPeanut(): bool
    {
        return $this->peanut;
    }

    /**
     * @param bool $peanut
     */
    public function setPeanut(bool $peanut)
    {
        $this->peanut = $peanut;
    }

    /**
     * @return bool
     */
    public function isFish(): bool
    {
        return $this->fish;
    }

    /**
     * @param bool $fish
     */
    public function setFish(bool $fish)
    {
        $this->fish = $fish;
    }

    /**
     * @return bool
     */
    public function isSoy(): bool
    {
        return $this->soy;
    }

    /**
     * @param bool $soy
     */
    public function setSoy(bool $soy)
    {
        $this->soy = $soy;
    }

    /**
     * @return bool
     */
    public function isNuts(): bool
    {
        return $this->nuts;
    }

    /**
     * @param bool $nuts
     */
    public function setNuts(bool $nuts)
    {
        $this->nuts = $nuts;
    }

    /**
     * @return bool
     */
    public function isCelery(): bool
    {
        return $this->celery;
    }

    /**
     * @param bool $celery
     */
    public function setCelery(bool $celery)
    {
        $this->celery = $celery;
    }

    /**
     * @return bool
     */
    public function isMustard(): bool
    {
        return $this->mustard;
    }

    /**
     * @param bool $mustard
     */
    public function setMustard(bool $mustard)
    {
        $this->mustard = $mustard;
    }

    /**
     * @return bool
     */
    public function isSesame(): bool
    {
        return $this->sesame;
    }

    /**
     * @param bool $sesame
     */
    public function setSesame(bool $sesame)
    {
        $this->sesame = $sesame;
    }

    /**
     * @return bool
     */
    public function isLupine(): bool
    {
        return $this->lupine;
    }

    /**
     * @param bool $lupine
     */
    public function setLupine(bool $lupine)
    {
        $this->lupine = $lupine;
    }

    /**
     * @return bool
     */
    public function isMollusc(): bool
    {
        return $this->mollusc;
    }

    /**
     * @param bool $mollusc
     */
    public function setMollusc(bool $mollusc)
    {
        $this->mollusc = $mollusc;
    }
}