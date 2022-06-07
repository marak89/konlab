<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\CertRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CertRepository::class)
 */
class Cert
{


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=WlasnCHEM::class, inversedBy="certs", cascade={"persist"})
     * @ORM\JoinTable(
     *     name="cert_wlasn_chem",
     *     joinColumns={
     *          @ORM\JoinColumn(name="cert_id", referencedColumnName="id")
     *     },
     *     inverseJoinColumns={
     *          @ORM\JoinColumn(name="wlasn_chem_id", referencedColumnName="id")
     *     }
     * )
     */
    private $WlasnCHEM;

    /**
     * @ORM\ManyToMany(targetEntity=WlasnMECH::class, inversedBy="certs")
     */
    private $WlasnMECH;

    /**
     * @ORM\Column(type="boolean")
     */
    private $readyToPrint;

    /**
     * @ORM\ManyToOne(targetEntity=Customer::class, inversedBy="certs")
     */
    private $Customer;

    /**
     * @ORM\ManyToOne(targetEntity=Norm::class, inversedBy="certs")
     */
    private $norm;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number;

    /**
     * @ORM\Column(type="date")
     */
    private $creationDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateOfSignature;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $printDate;

    /**
     * @ORM\ManyToMany(targetEntity=IndNazRys::class, inversedBy="certs")
     */
    private $indNazRys;

    /**
     * @ORM\ManyToOne(targetEntity=Gatunek::class, inversedBy="certs")
     */
    private $gatunek;

    /**
     * @ORM\ManyToOne(targetEntity=ObrCieplna::class, inversedBy="certs")
     */
    private $obrCieplna;

    /**
     * @ORM\ManyToOne(targetEntity=Order::class, inversedBy="certs")
     */
    private $customerOrder;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $amount;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $weight;

    public function __construct()
    {
        $this->WlasnCHEM = new ArrayCollection();
        $this->WlasnMECH = new ArrayCollection();
        $this->indNazRys = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, WlasnCHEM>
     */
    public function getWlasnCHEM(): Collection
    {
        return $this->WlasnCHEM;
    }

    public function addWlasnCHEM(WlasnCHEM $wlasnCHEM): self
    {
        if (!$this->WlasnCHEM->contains($wlasnCHEM)) {
            $this->WlasnCHEM[] = $wlasnCHEM;
        }

        return $this;
    }

    public function removeWlasnCHEM(WlasnCHEM $wlasnCHEM): self
    {
        $this->WlasnCHEM->removeElement($wlasnCHEM);

        return $this;
    }

    /**
     * @return Collection<int, WlasnMECH>
     */
    public function getWlasnMECH(): Collection
    {
        return $this->WlasnMECH;
    }

    public function addWlasnMECH(WlasnMECH $wlasnMECH): self
    {
        if (!$this->WlasnMECH->contains($wlasnMECH)) {
            $this->WlasnMECH[] = $wlasnMECH;
        }

        return $this;
    }

    public function removeWlasnMECH(WlasnMECH $wlasnMECH): self
    {
        $this->WlasnMECH->removeElement($wlasnMECH);

        return $this;
    }

    public function isReadyToPrint(): ?bool
    {
        return $this->readyToPrint;
    }

    public function setReadyToPrint(bool $readyToPrint): self
    {
        $this->readyToPrint = $readyToPrint;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->Customer;
    }

    public function setCustomer(?Customer $Customer): self
    {
        $this->Customer = $Customer;

        return $this;
    }

    public function getNorm(): ?Norm
    {
        return $this->norm;
    }

    public function setNorm(?Norm $norm): self
    {
        $this->norm = $norm;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getDateOfSignature(): ?\DateTimeInterface
    {
        return $this->dateOfSignature;
    }

    public function setDateOfSignature(?\DateTimeInterface $dateOfSignature): self
    {
        $this->dateOfSignature = $dateOfSignature;

        return $this;
    }

    public function getPrintDate(): ?\DateTimeInterface
    {
        return $this->printDate;
    }

    public function setPrintDate(?\DateTimeInterface $printDate): self
    {
        $this->printDate = $printDate;

        return $this;
    }

    /**
     * @return Collection<int, IndNazRys>
     */
    public function getIndNazRys(): Collection
    {
        return $this->indNazRys;
    }

    public function addIndNazRy(IndNazRys $indNazRy): self
    {
        if (!$this->indNazRys->contains($indNazRy)) {
            $this->indNazRys[] = $indNazRy;
        }

        return $this;
    }

    public function removeIndNazRy(IndNazRys $indNazRy): self
    {
        $this->indNazRys->removeElement($indNazRy);

        return $this;
    }

    public function getGatunek(): ?Gatunek
    {
        return $this->gatunek;
    }

    public function setGatunek(?Gatunek $gatunek): self
    {
        $this->gatunek = $gatunek;

        return $this;
    }

    public function getObrCieplna(): ?ObrCieplna
    {
        return $this->obrCieplna;
    }

    public function setObrCieplna(?ObrCieplna $obrCieplna): self
    {
        $this->obrCieplna = $obrCieplna;

        return $this;
    }

    public function getCustomerOrder(): ?Order
    {
        return $this->customerOrder;
    }

    public function setCustomerOrder(?Order $customerOrder): self
    {
        $this->customerOrder = $customerOrder;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
