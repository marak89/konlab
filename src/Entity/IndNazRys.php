<?php

namespace App\Entity;

use App\Repository\IndNazRysRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IndNazRysRepository::class)
 */
class IndNazRys
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sysId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $valueIndex;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $indexCm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rysunek;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nazwaOdlewu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueRe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueRm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueA;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueZ;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $udarnosc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $udarnosc2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twardosc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twardoscMax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twardoscMin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idDtKarta;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idGatunek;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idNormaMaterialowa;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jakoscWewnetrzna;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chropowatosc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jakoscPowierzchni;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dokladnoscWykonania;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueOc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ogolneWarunki;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueC;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueMn;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueSi;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueP;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valS;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueCr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueNi;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueMo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueCu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueAl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueV;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $odbiorJakosciowy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSysId(): ?int
    {
        return $this->sysId;
    }

    public function setSysId(?int $sysId): self
    {
        $this->sysId = $sysId;

        return $this;
    }

    public function getValueIndex(): ?string
    {
        return $this->valueIndex;
    }

    public function setValueIndex(string $valueIndex): self
    {
        $this->valueIndex = $valueIndex;

        return $this;
    }

    public function getIndexCm(): ?string
    {
        return $this->indexCm;
    }

    public function setIndexCm(?string $indexCm): self
    {
        $this->indexCm = $indexCm;

        return $this;
    }

    public function getRysunek(): ?string
    {
        return $this->rysunek;
    }

    public function setRysunek(?string $rysunek): self
    {
        $this->rysunek = $rysunek;

        return $this;
    }

    public function getNazwaOdlewu(): ?string
    {
        return $this->nazwaOdlewu;
    }

    public function setNazwaOdlewu(string $nazwaOdlewu): self
    {
        $this->nazwaOdlewu = $nazwaOdlewu;

        return $this;
    }

    public function getValueRe(): ?string
    {
        return $this->valueRe;
    }

    public function setValueRe(?string $valueRe): self
    {
        $this->valueRe = $valueRe;

        return $this;
    }

    public function getValueRm(): ?string
    {
        return $this->valueRm;
    }

    public function setValueRm(?string $valueRm): self
    {
        $this->valueRm = $valueRm;

        return $this;
    }

    public function getValueA(): ?string
    {
        return $this->valueA;
    }

    public function setValueA(?string $valueA): self
    {
        $this->valueA = $valueA;

        return $this;
    }

    public function getValueZ(): ?string
    {
        return $this->valueZ;
    }

    public function setValueZ(?string $valueZ): self
    {
        $this->valueZ = $valueZ;

        return $this;
    }

    public function getUdarnosc(): ?string
    {
        return $this->udarnosc;
    }

    public function setUdarnosc(?string $udarnosc): self
    {
        $this->udarnosc = $udarnosc;

        return $this;
    }

    public function getUdarnosc2(): ?string
    {
        return $this->udarnosc2;
    }

    public function setUdarnosc2(?string $udarnosc2): self
    {
        $this->udarnosc2 = $udarnosc2;

        return $this;
    }

    public function getTwardosc(): ?string
    {
        return $this->twardosc;
    }

    public function setTwardosc(?string $twardosc): self
    {
        $this->twardosc = $twardosc;

        return $this;
    }

    public function getTwardoscMax(): ?string
    {
        return $this->twardoscMax;
    }

    public function setTwardoscMax(?string $twardoscMax): self
    {
        $this->twardoscMax = $twardoscMax;

        return $this;
    }

    public function getTwardoscMin(): ?string
    {
        return $this->twardoscMin;
    }

    public function setTwardoscMin(?string $twardoscMin): self
    {
        $this->twardoscMin = $twardoscMin;

        return $this;
    }

    public function getIdDtKarta(): ?string
    {
        return $this->idDtKarta;
    }

    public function setIdDtKarta(?string $idDtKarta): self
    {
        $this->idDtKarta = $idDtKarta;

        return $this;
    }

    public function getIdGatunek(): ?string
    {
        return $this->idGatunek;
    }

    public function setIdGatunek(?string $idGatunek): self
    {
        $this->idGatunek = $idGatunek;

        return $this;
    }

    public function getIdNormaMaterialowa(): ?string
    {
        return $this->idNormaMaterialowa;
    }

    public function setIdNormaMaterialowa(?string $idNormaMaterialowa): self
    {
        $this->idNormaMaterialowa = $idNormaMaterialowa;

        return $this;
    }

    public function getJakoscWewnetrzna(): ?string
    {
        return $this->jakoscWewnetrzna;
    }

    public function setJakoscWewnetrzna(?string $jakoscWewnetrzna): self
    {
        $this->jakoscWewnetrzna = $jakoscWewnetrzna;

        return $this;
    }

    public function getChropowatosc(): ?string
    {
        return $this->chropowatosc;
    }

    public function setChropowatosc(?string $chropowatosc): self
    {
        $this->chropowatosc = $chropowatosc;

        return $this;
    }

    public function getJakoscPowierzchni(): ?string
    {
        return $this->jakoscPowierzchni;
    }

    public function setJakoscPowierzchni(?string $jakoscPowierzchni): self
    {
        $this->jakoscPowierzchni = $jakoscPowierzchni;

        return $this;
    }

    public function getDokladnoscWykonania(): ?string
    {
        return $this->dokladnoscWykonania;
    }

    public function setDokladnoscWykonania(?string $dokladnoscWykonania): self
    {
        $this->dokladnoscWykonania = $dokladnoscWykonania;

        return $this;
    }

    public function getValueOc(): ?string
    {
        return $this->valueOc;
    }

    public function setValueOc(?string $valueOc): self
    {
        $this->valueOc = $valueOc;

        return $this;
    }

    public function getOgolneWarunki(): ?string
    {
        return $this->ogolneWarunki;
    }

    public function setOgolneWarunki(?string $ogolneWarunki): self
    {
        $this->ogolneWarunki = $ogolneWarunki;

        return $this;
    }

    public function getValueC(): ?string
    {
        return $this->valueC;
    }

    public function setValueC(?string $valueC): self
    {
        $this->valueC = $valueC;

        return $this;
    }

    public function getValueMn(): ?string
    {
        return $this->valueMn;
    }

    public function setValueMn(?string $valueMn): self
    {
        $this->valueMn = $valueMn;

        return $this;
    }

    public function getValueSi(): ?string
    {
        return $this->valueSi;
    }

    public function setValueSi(?string $valueSi): self
    {
        $this->valueSi = $valueSi;

        return $this;
    }

    public function getValueP(): ?string
    {
        return $this->valueP;
    }

    public function setValueP(?string $valueP): self
    {
        $this->valueP = $valueP;

        return $this;
    }

    public function getValS(): ?string
    {
        return $this->valS;
    }

    public function setValS(?string $valS): self
    {
        $this->valS = $valS;

        return $this;
    }

    public function getValueCr(): ?string
    {
        return $this->valueCr;
    }

    public function setValueCr(?string $valueCr): self
    {
        $this->valueCr = $valueCr;

        return $this;
    }

    public function getValueNi(): ?string
    {
        return $this->valueNi;
    }

    public function setValueNi(?string $valueNi): self
    {
        $this->valueNi = $valueNi;

        return $this;
    }

    public function getValueMo(): ?string
    {
        return $this->valueMo;
    }

    public function setValueMo(?string $valueMo): self
    {
        $this->valueMo = $valueMo;

        return $this;
    }

    public function getValueCu(): ?string
    {
        return $this->valueCu;
    }

    public function setValueCu(?string $valueCu): self
    {
        $this->valueCu = $valueCu;

        return $this;
    }

    public function getValueAl(): ?string
    {
        return $this->valueAl;
    }

    public function setValueAl(?string $valueAl): self
    {
        $this->valueAl = $valueAl;

        return $this;
    }

    public function getValueV(): ?string
    {
        return $this->valueV;
    }

    public function setValueV(?string $valueV): self
    {
        $this->valueV = $valueV;

        return $this;
    }

    public function getOdbiorJakosciowy(): ?string
    {
        return $this->odbiorJakosciowy;
    }

    public function setOdbiorJakosciowy(?string $odbiorJakosciowy): self
    {
        $this->odbiorJakosciowy = $odbiorJakosciowy;

        return $this;
    }
}
