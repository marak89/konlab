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

    public function __construct()
    {
        $this->WlasnCHEM = new ArrayCollection();
        $this->WlasnMECH = new ArrayCollection();
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
}
