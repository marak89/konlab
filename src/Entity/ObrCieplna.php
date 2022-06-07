<?php

namespace App\Entity;

use App\Repository\ObrCieplnaRepository;
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
}
