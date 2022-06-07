<?php

namespace App\Entity;

use App\Repository\GatunekRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GatunekRepository::class)
 */
class Gatunek
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $norm;

    /**
     * @ORM\OneToMany(targetEntity=Cert::class, mappedBy="gatunek")
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNorm(): ?string
    {
        return $this->norm;
    }

    public function setNorm(?string $norm): self
    {
        $this->norm = $norm;

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
            $cert->setGatunek($this);
        }

        return $this;
    }

    public function removeCert(Cert $cert): self
    {
        if ($this->certs->removeElement($cert)) {
            // set the owning side to null (unless already changed)
            if ($cert->getGatunek() === $this) {
                $cert->setGatunek(null);
            }
        }

        return $this;
    }
}
