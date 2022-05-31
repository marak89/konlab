<?php

namespace App\Entity;

use App\Repository\LanguageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LanguageRepository::class)
 */
class Language
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
     * @ORM\Column(type="string", length=255)
     */
    private $international;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $alfa2;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $alfa3;

    /**
     * @ORM\Column(type="integer")
     */
    private $num;

    /**
     * @ORM\OneToMany(targetEntity=Customer::class, mappedBy="language")
     */
    private $customers;

    public function __construct()
    {
        $this->customers = new ArrayCollection();
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

    public function getInternational(): ?string
    {
        return $this->international;
    }

    public function setInternational(string $international): self
    {
        $this->international = $international;

        return $this;
    }

    public function getAlfa2(): ?string
    {
        return $this->alfa2;
    }

    public function setAlfa2(string $alfa2): self
    {
        $this->alfa2 = $alfa2;

        return $this;
    }

    public function getAlfa3(): ?string
    {
        return $this->alfa3;
    }

    public function setAlfa3(string $alfa3): self
    {
        $this->alfa3 = $alfa3;

        return $this;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

    /**
     * @return Collection<int, Customer>
     */
    public function getCustomers(): Collection
    {
        return $this->customers;
    }

    public function addCustomer(Customer $customer): self
    {
        if (!$this->customers->contains($customer)) {
            $this->customers[] = $customer;
            $customer->setLanguage($this);
        }

        return $this;
    }

    public function removeCustomer(Customer $customer): self
    {
        if ($this->customers->removeElement($customer)) {
            // set the owning side to null (unless already changed)
            if ($customer->getLanguage() === $this) {
                $customer->setLanguage(null);
            }
        }

        return $this;
    }
}
