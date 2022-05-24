<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\WlasnMECHRepository;
use App\Service\ArrayReduce;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WlasnMECHRepository::class)
 */
class WlasnMECH
{

    public static array $order = [
        'WytNew',
        'valueReRp',
        'valueRm',
        'valueA5',
        'valueZ',
        'valueTmp',
        'valueKV1',
        'valueKV2',
        'valueKV3',
        'valueKCU160',
        'valueKCU260',
        'valueKCU360',
        'valueKCV',
        'valueKCV2',
        'valueKCV3',
        'valueKCU20st1',
        'valueKCU20st2',
        'valueKCU20st3',
        'valueTwardosc',
        'dataOtrzymania',
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $WytNew;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueReRp;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueRm;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueA5;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueZ;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueTmp;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueKV1;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueKV2;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueKV3;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueKCU160;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueKCU260;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valueKCU360;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueKCV;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueKCV2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueKCV3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueKCU20st1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueKCU20st2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueKCU20st3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valueTwardosc;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataOtrzymania;

    /**
     * @ORM\ManyToMany(targetEntity=Cert::class, mappedBy="WlasnMECH")
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

    public function getWytNew(): ?int
    {
        return $this->WytNew;
    }

    public function setWytNew(int $WytNew): self
    {
        $this->WytNew = $WytNew;

        return $this;
    }

    public function getValueReRp(): ?float
    {
        return $this->valueReRp;
    }

    public function setValueReRp(?float $valueReRp): self
    {
        $this->valueReRp = $valueReRp;

        return $this;
    }

    public function getValueRm(): ?float
    {
        return $this->valueRm;
    }

    public function setValueRm(?float $valueRm): self
    {
        $this->valueRm = $valueRm;

        return $this;
    }

    public function getValueA5(): ?float
    {
        return $this->valueA5;
    }

    public function setValueA5(?float $valueA5): self
    {
        $this->valueA5 = $valueA5;

        return $this;
    }

    public function getValueZ(): ?float
    {
        return $this->valueZ;
    }

    public function setValueZ(?float $valueZ): self
    {
        $this->valueZ = $valueZ;

        return $this;
    }

    public function getValueTmp(): ?float
    {
        return $this->valueTmp;
    }

    public function setValueTmp(?float $valueTmp): self
    {
        $this->valueTmp = $valueTmp;

        return $this;
    }

    public function getValueKV1(): ?float
    {
        return $this->valueKV1;
    }

    public function setValueKV1(?float $valueKV1): self
    {
        $this->valueKV1 = $valueKV1;

        return $this;
    }

    public function getValueKV2(): ?float
    {
        return $this->valueKV2;
    }

    public function setValueKV2(?float $valueKV2): self
    {
        $this->valueKV2 = $valueKV2;

        return $this;
    }

    public function getValueKV3(): ?float
    {
        return $this->valueKV3;
    }

    public function setValueKV3(?float $valueKV3): self
    {
        $this->valueKV3 = $valueKV3;

        return $this;
    }

    public function getValueKCU160(): ?float
    {
        return $this->valueKCU160;
    }

    public function setValueKCU160(?float $valueKCU160): self
    {
        $this->valueKCU160 = $valueKCU160;

        return $this;
    }

    public function getValueKCU260(): ?float
    {
        return $this->valueKCU260;
    }

    public function setValueKCU260(?float $valueKCU260): self
    {
        $this->valueKCU260 = $valueKCU260;

        return $this;
    }

    public function getValueKCU360(): ?float
    {
        return $this->valueKCU360;
    }

    public function setValueKCU360(?float $valueKCU360): self
    {
        $this->valueKCU360 = $valueKCU360;

        return $this;
    }

    public function getValueKCV(): ?string
    {
        return $this->valueKCV;
    }

    public function setValueKCV(?string $valueKCV): self
    {
        $this->valueKCV = $valueKCV;

        return $this;
    }

    public function getValueKCV2(): ?string
    {
        return $this->valueKCV2;
    }

    public function setValueKCV2(?string $valueKCV2): self
    {
        $this->valueKCV2 = $valueKCV2;

        return $this;
    }

    public function getValueKCV3(): ?string
    {
        return $this->valueKCV3;
    }

    public function setValueKCV3(?string $valueKCV3): self
    {
        $this->valueKCV3 = $valueKCV3;

        return $this;
    }

    public function getValueKCU20st1(): ?string
    {
        return $this->valueKCU20st1;
    }

    public function setValueKCU20st1(?string $valueKCU20st1): self
    {
        $this->valueKCU20st1 = $valueKCU20st1;

        return $this;
    }

    public function getValueKCU20st2(): ?string
    {
        return $this->valueKCU20st2;
    }

    public function setValueKCU20st2(?string $valueKCU20st2): self
    {
        $this->valueKCU20st2 = $valueKCU20st2;

        return $this;
    }

    public function getValueKCU20st3(): ?string
    {
        return $this->valueKCU20st3;
    }

    public function setValueKCU20st3(?string $valueKCU20st3): self
    {
        $this->valueKCU20st3 = $valueKCU20st3;

        return $this;
    }

    public function getValueTwardosc(): ?string
    {
        return $this->valueTwardosc;
    }

    public function setValueTwardosc(?string $valueTwardosc): self
    {
        $this->valueTwardosc = $valueTwardosc;

        return $this;
    }

    public function getDataOtrzymania(): ?\DateTimeInterface
    {
        return $this->dataOtrzymania;
    }

    public function setDataOtrzymania(?\DateTimeInterface $dataOtrzymania): self
    {
        $this->dataOtrzymania = $dataOtrzymania;

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
            $cert->addWlasnMECH($this);
        }

        return $this;
    }

    public function removeCert(Cert $cert): self
    {
        if ($this->certs->removeElement($cert)) {
            $cert->removeWlasnMECH($this);
        }
        return $this;
    }

    public function __toString()
    {
        return (new ArrayReduce())->toString(WlasnMECH::$order,$this,'MECH');
    }
}
