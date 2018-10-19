<?php

namespace App\Traits;

trait EcologicalImpact
{
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $carbonFootprint;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     * @Assert\NotBlank
     * @var boolean
     */
    private $seasonality;

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
     * @ORM\Column(type="float", nullable=true)
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
        $this->seasonality = false;

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
}