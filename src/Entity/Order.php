<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Customer::class, inversedBy="orders")
     */
    private $customer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $val1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $val2;

    /**
     * @ORM\OneToMany(targetEntity=Cert::class, mappedBy="customerOrder")
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

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getVal1(): ?string
    {
        return $this->val1;
    }

    public function setVal1(string $val1): self
    {
        $this->val1 = $val1;

        return $this;
    }

    public function getVal2(): ?string
    {
        return $this->val2;
    }

    public function setVal2(?string $val2): self
    {
        $this->val2 = $val2;

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
            $cert->setCustomerOrder($this);
        }

        return $this;
    }

    public function removeCert(Cert $cert): self
    {
        if ($this->certs->removeElement($cert)) {
            // set the owning side to null (unless already changed)
            if ($cert->getCustomerOrder() === $this) {
                $cert->setCustomerOrder(null);
            }
        }

        return $this;
    }
}
