<?php

namespace App\Traits;

trait FattyAcid
{
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $saturated;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $monounsaturated;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $polyunsaturated;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $butyric;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $caproic;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $caprylic;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $capric;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $lauric;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $myristic;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $palmitic;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $stearic;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $oleic;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $linoleic;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $alphaLinolenic;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $arachidonic;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $EPA;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $DHA;
    /**
     * @ORM\Column(type="float", nullable=true)
     * @var float|null
     */
    private $cholesterol;
}
