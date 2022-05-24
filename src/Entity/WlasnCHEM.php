<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\WlasnCHEMRepository;
use App\Service\ArrayReduce;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WlasnCHEMRepository::class)
 */
class WlasnCHEM
{
    /**
     * @var array|string[]
     */
    public static array $order = [
        'numerWytopu',
        'koncowaProba',
        'Date',
        'Time',
        'Gatunek',
        'valueC',
        'valueSi',
        'valueMn',
        'valueP',
        'valS',
        'valueCr',
        'valueNi',
        'valueMo',
        'valueCu',
        'valueAl',
        'valueV',
        'valueCe',
        'valueSn',
        'valueTi'
    ];
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numerWytopu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $koncowaProba;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="time")
     */
    private $Time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Gatunek;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueC;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueSi;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueMn;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueP;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valS;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueCr;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueNi;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueMo;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueCu;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueAl;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueV;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueCe;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueSn;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueTi;

    /**
     * @ORM\ManyToMany(targetEntity=Cert::class, mappedBy="WlasnCHEM")
     */
    private $certs;

    public function __construct()
    {
        $this->certs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumerWytopu(): ?int
    {
        return $this->numerWytopu;
    }

    public function setNumerWytopu(int $numerWytopu): self
    {
        $this->numerWytopu = $numerWytopu;

        return $this;
    }

    public function getKoncowaProba(): ?string
    {
        return $this->koncowaProba;
    }

    public function setKoncowaProba(string $koncowaProba): self
    {
        $this->koncowaProba = $koncowaProba;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->Time;
    }

    public function setTime(\DateTimeInterface $Time): self
    {
        $this->Time = $Time;

        return $this;
    }

    public function getGatunek(): ?string
    {
        return $this->Gatunek;
    }

    public function setGatunek(string $Gatunek): self
    {
        $this->Gatunek = $Gatunek;

        return $this;
    }

    public function getValueC(): ?float
    {
        return $this->valueC;
    }

    public function setValueC(?float $valueC): self
    {
        $this->valueC = $valueC;

        return $this;
    }

    public function getValueSi(): ?float
    {
        return $this->valueSi;
    }

    public function setValueSi(?float $valueSi): self
    {
        $this->valueSi = $valueSi;

        return $this;
    }

    public function getValueMn(): ?float
    {
        return $this->valueMn;
    }

    public function setValueMn(?float $valueMn): self
    {
        $this->valueMn = $valueMn;

        return $this;
    }

    public function getValueP(): ?float
    {
        return $this->valueP;
    }

    public function setValueP(?float $valueP): self
    {
        $this->valueP = $valueP;

        return $this;
    }

    public function getValS(): ?float
    {
        return $this->valS;
    }

    public function setValS(?float $valS): self
    {
        $this->valS = $valS;

        return $this;
    }

    public function getValueCr(): ?float
    {
        return $this->valueCr;
    }

    public function setValueCr(?float $valueCr): self
    {
        $this->valueCr = $valueCr;

        return $this;
    }

    public function getValueNi(): ?float
    {
        return $this->valueNi;
    }

    public function setValueNi(?float $valueNi): self
    {
        $this->valueNi = $valueNi;

        return $this;
    }

    public function getValueMo(): ?float
    {
        return $this->valueMo;
    }

    public function setValueMo(?float $valueMo): self
    {
        $this->valueMo = $valueMo;

        return $this;
    }

    public function getValueCu(): ?float
    {
        return $this->valueCu;
    }

    public function setValueCu(?float $valueCu): self
    {
        $this->valueCu = $valueCu;

        return $this;
    }

    public function getValueAl(): ?float
    {
        return $this->valueAl;
    }

    public function setValueAl(?float $valueAl): self
    {
        $this->valueAl = $valueAl;

        return $this;
    }

    public function getValueV(): ?float
    {
        return $this->valueV;
    }

    public function setValueV(?float $valueV): self
    {
        $this->valueV = $valueV;

        return $this;
    }

    public function getValueCe(): ?float
    {
        return $this->valueCe;
    }

    public function setValueCe(?float $valueCe): self
    {
        $this->valueCe = $valueCe;

        return $this;
    }

    public function getValueSn(): ?float
    {
        return $this->valueSn;
    }

    public function setValueSn(?float $valueSn): self
    {
        $this->valueSn = $valueSn;

        return $this;
    }

    public function getValueTi(): ?float
    {
        return $this->valueTi;
    }

    public function setValueTi(?float $valueTi): self
    {
        $this->valueTi = $valueTi;

        return $this;
    }

    /**
     * @return Collection<int, Cert>
     */
    public function getCerts(): Collection
    {
        return $this->certs;
    }

    public function addCert(Cert $cert): self
    {
        if (!$this->certs->contains($cert)) {
            $this->certs[] = $cert;
            $cert->addWlasnCHEM($this);
        }

        return $this;
    }

    public function removeCert(Cert $cert): self
    {
        if ($this->certs->removeElement($cert)) {
            $cert->removeWlasnCHEM($this);
        }

        return $this;
    }

    public function __toString()
    {
        return (new ArrayReduce())->toString(WlasnCHEM::$order,$this,'CHEM');
    }
}
