<?php

namespace App\Entity;

use App\Repository\NormRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NormRepository::class)
 */
class Norm
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
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=Language::class, inversedBy="norms")
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $confirms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $norm;

    /**
     * @ORM\OneToMany(targetEntity=Cert::class, mappedBy="norm")
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
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

    public function getLanguage(): ?Language
    {
        return $this->language;
    }

    public function setLanguage(?Language $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getConfirms(): ?string
    {
        return $this->confirms;
    }

    public function setConfirms(string $confirms): self
    {
        $this->confirms = $confirms;

        return $this;
    }

    public function getNorm(): ?string
    {
        return $this->norm;
    }

    public function setNorm(string $norm): self
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
            $cert->setNorm($this);
        }

        return $this;
    }

    public function removeCert(Cert $cert): self
    {
        if ($this->certs->removeElement($cert)) {
            // set the owning side to null (unless already changed)
            if ($cert->getNorm() === $this) {
                $cert->setNorm(null);
            }
        }

        return $this;
    }
}
