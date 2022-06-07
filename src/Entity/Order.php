<?php

namespace App\Entity;

use App\Repository\OrderRepository;
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
}
