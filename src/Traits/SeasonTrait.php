<?php

namespace App\Traits;

trait SeasonTrait
{
    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $january;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $february;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $march;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $april;

    /**
     * @ORM\Column(type="float", nullable=false)
     * @var float|null
     */
    private $may;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $june;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $july;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $august;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $september;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $october;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $november;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $december;

    public function __construct()
    {
        $this->january = false;
        $this->february = false;
        $this->march = false;
        $this->april = false;
        $this->may = false;
        $this->june = false;
        $this->july = false;
        $this->august = false;
        $this->september = false;
        $this->october = false;
        $this->november = false;
        $this->december = false;
    }

    /**
     * @return bool
     */
    public function isJanuary(): bool
    {
        return $this->january;
    }

    /**
     * @param bool $january
     */
    public function setJanuary(bool $january)
    {
        $this->january = $january;
    }

    /**
     * @return bool
     */
    public function isFebruary(): bool
    {
        return $this->february;
    }

    /**
     * @param bool $february
     */
    public function setFebruary(bool $february)
    {
        $this->february = $february;
    }

    /**
     * @return bool
     */
    public function isMarch(): bool
    {
        return $this->march;
    }

    /**
     * @param bool $march
     */
    public function setMarch(bool $march)
    {
        $this->march = $march;
    }

    /**
     * @return bool
     */
    public function isApril(): bool
    {
        return $this->april;
    }

    /**
     * @param bool $april
     */
    public function setApril(bool $april)
    {
        $this->april = $april;
    }

    /**
     * @return mixed
     */
    public function getMay()
    {
        return $this->may;
    }

    /**
     * @param mixed $may
     */
    public function setMay($may)
    {
        $this->may = $may;
    }

    /**
     * @return bool
     */
    public function isJune(): bool
    {
        return $this->june;
    }

    /**
     * @param bool $june
     */
    public function setJune(bool $june)
    {
        $this->june = $june;
    }

    /**
     * @return mixed
     */
    public function getJuly()
    {
        return $this->july;
    }

    /**
     * @param mixed $july
     */
    public function setJuly($july)
    {
        $this->july = $july;
    }

    /**
     * @return bool
     */
    public function isAugust(): bool
    {
        return $this->august;
    }

    /**
     * @param bool $august
     */
    public function setAugust(bool $august)
    {
        $this->august = $august;
    }

    /**
     * @return bool
     */
    public function isSeptember(): bool
    {
        return $this->september;
    }

    /**
     * @param bool $september
     */
    public function setSeptember(bool $september)
    {
        $this->september = $september;
    }

    /**
     * @return bool
     */
    public function isOctober(): bool
    {
        return $this->october;
    }

    /**
     * @param bool $october
     */
    public function setOctober(bool $october)
    {
        $this->october = $october;
    }

    /**
     * @return bool
     */
    public function isNovember(): bool
    {
        return $this->november;
    }

    /**
     * @param bool $november
     */
    public function setNovember(bool $november)
    {
        $this->november = $november;
    }

    /**
     * @return bool
     */
    public function isDecember(): bool
    {
        return $this->december;
    }

    /**
     * @param bool $december
     */
    public function setDecember(bool $december)
    {
        $this->december = $december;
    }
}