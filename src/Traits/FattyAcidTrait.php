<?php

namespace App\Traits;

trait FattyAcidTrait
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

    /**
     * @return float|null
     */
    public function getSaturated()
    {
        return $this->saturated;
    }

    /**
     * @param float|null $saturated
     */
    public function setSaturated($saturated)
    {
        $this->saturated = $saturated;
    }

    /**
     * @return float|null
     */
    public function getMonounsaturated()
    {
        return $this->monounsaturated;
    }

    /**
     * @param float|null $monounsaturated
     */
    public function setMonounsaturated($monounsaturated)
    {
        $this->monounsaturated = $monounsaturated;
    }

    /**
     * @return float|null
     */
    public function getPolyunsaturated()
    {
        return $this->polyunsaturated;
    }

    /**
     * @param float|null $polyunsaturated
     */
    public function setPolyunsaturated($polyunsaturated)
    {
        $this->polyunsaturated = $polyunsaturated;
    }

    /**
     * @return float|null
     */
    public function getButyric()
    {
        return $this->butyric;
    }

    /**
     * @param float|null $butyric
     */
    public function setButyric($butyric)
    {
        $this->butyric = $butyric;
    }

    /**
     * @return float|null
     */
    public function getCaproic()
    {
        return $this->caproic;
    }

    /**
     * @param float|null $caproic
     */
    public function setCaproic($caproic)
    {
        $this->caproic = $caproic;
    }

    /**
     * @return float|null
     */
    public function getCaprylic()
    {
        return $this->caprylic;
    }

    /**
     * @param float|null $caprylic
     */
    public function setCaprylic($caprylic)
    {
        $this->caprylic = $caprylic;
    }

    /**
     * @return float|null
     */
    public function getCapric()
    {
        return $this->capric;
    }

    /**
     * @param float|null $capric
     */
    public function setCapric($capric)
    {
        $this->capric = $capric;
    }

    /**
     * @return float|null
     */
    public function getLauric()
    {
        return $this->lauric;
    }

    /**
     * @param float|null $lauric
     */
    public function setLauric($lauric)
    {
        $this->lauric = $lauric;
    }

    /**
     * @return float|null
     */
    public function getMyristic()
    {
        return $this->myristic;
    }

    /**
     * @param float|null $myristic
     */
    public function setMyristic($myristic)
    {
        $this->myristic = $myristic;
    }

    /**
     * @return float|null
     */
    public function getPalmitic()
    {
        return $this->palmitic;
    }

    /**
     * @param float|null $palmitic
     */
    public function setPalmitic($palmitic)
    {
        $this->palmitic = $palmitic;
    }

    /**
     * @return float|null
     */
    public function getStearic()
    {
        return $this->stearic;
    }

    /**
     * @param float|null $stearic
     */
    public function setStearic($stearic)
    {
        $this->stearic = $stearic;
    }

    /**
     * @return float|null
     */
    public function getOleic()
    {
        return $this->oleic;
    }

    /**
     * @param float|null $oleic
     */
    public function setOleic($oleic)
    {
        $this->oleic = $oleic;
    }

    /**
     * @return float|null
     */
    public function getLinoleic()
    {
        return $this->linoleic;
    }

    /**
     * @param float|null $linoleic
     */
    public function setLinoleic($linoleic)
    {
        $this->linoleic = $linoleic;
    }

    /**
     * @return float|null
     */
    public function getAlphaLinolenic()
    {
        return $this->alphaLinolenic;
    }

    /**
     * @param float|null $alphaLinolenic
     */
    public function setAlphaLinolenic($alphaLinolenic)
    {
        $this->alphaLinolenic = $alphaLinolenic;
    }

    /**
     * @return float|null
     */
    public function getArachidonic()
    {
        return $this->arachidonic;
    }

    /**
     * @param float|null $arachidonic
     */
    public function setArachidonic($arachidonic)
    {
        $this->arachidonic = $arachidonic;
    }

    /**
     * @return float|null
     */
    public function getEPA()
    {
        return $this->EPA;
    }

    /**
     * @param float|null $EPA
     */
    public function setEPA($EPA)
    {
        $this->EPA = $EPA;
    }

    /**
     * @return float|null
     */
    public function getDHA()
    {
        return $this->DHA;
    }

    /**
     * @param float|null $DHA
     */
    public function setDHA($DHA)
    {
        $this->DHA = $DHA;
    }

    /**
     * @return float|null
     */
    public function getCholesterol()
    {
        return $this->cholesterol;
    }

    /**
     * @param float|null $cholesterol
     */
    public function setCholesterol($cholesterol)
    {
        $this->cholesterol = $cholesterol;
    }
}
