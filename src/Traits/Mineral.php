<?php

namespace App\Traits;

trait Mineral
{
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $sodiumChloride;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $calcium;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $chloride;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $copper;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $iron;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $iodine;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $magnesium;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $manganese;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $phosphorus;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $potassium;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $selenium;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $sodium;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $zinc;
}
