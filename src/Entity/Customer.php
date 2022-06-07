<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use App\Service\ArrayReduce;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomerRepository::class)
 */
class Customer
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
    private $short;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=512)
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity=Cert::class, mappedBy="Customer")
     */
    private $certs;

    /**
     * @ORM\ManyToOne(targetEntity=Language::class, inversedBy="customers")
     */
    private $language;

    /**
     * @ORM\OneToMany(targetEntity=Order::class, mappedBy="customer")
     */
    private $orders;

    public function __construct()
    {
        $this->certs = new ArrayCollection();
        $this->orders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getShort(): ?string
    {
        return $this->short;
    }

    public function setShort(string $short): self
    {
        $this->short = $short;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

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
            $cert->setCustomer($this);
        }

        return $this;
    }

    public function removeCert(Cert $cert): self
    {
        if ($this->certs->removeElement($cert)) {
            // set the owning side to null (unless already changed)
            if ($cert->getCustomer() === $this) {
                $cert->setCustomer(null);
            }
        }

        return $this;
    }



    public function __toString(): string
    {
        return (new ArrayReduce())->toString(['short','name','address'], $this);
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

    /**
     * @return Collection<int, Order>
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setCustomer($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if ($this->orders->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getCustomer() === $this) {
                $order->setCustomer(null);
            }
        }

        return $this;
    }
}
