<?php

namespace App\Entity;

use App\Repository\ObrCieplnaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ObrCieplnaRepository::class)
 */
class ObrCieplna
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
    private $oc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $confirmationOc;

    /**
     * @ORM\OneToMany(targetEntity=Cert::class, mappedBy="obrCieplna")
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

    public function getOc(): ?string
    {
        return $this->oc;
    }

    public function setOc(string $oc): self
    {
        $this->oc = $oc;

        return $this;
    }

    public function getConfirmationOc(): ?string
    {
        return $this->confirmationOc;
    }

    public function setConfirmationOc(?string $confirmationOc): self
    {
        $this->confirmationOc = $confirmationOc;

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
            $cert->setObrCieplna($this);
        }

        return $this;
    }

    public function removeCert(Cert $cert): self
    {
        if ($this->certs->removeElement($cert)) {
            // set the owning side to null (unless already changed)
            if ($cert->getObrCieplna() === $this) {
                $cert->setObrCieplna(null);
            }
        }

        return $this;
    }
}
