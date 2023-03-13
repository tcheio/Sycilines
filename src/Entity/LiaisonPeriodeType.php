<?php

namespace App\Entity;

use App\Repository\LiaisonPeriodeTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LiaisonPeriodeTypeRepository::class)]
class LiaisonPeriodeType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $tarif = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Periode $Periode = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Liaison $Liaison = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Type $Type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTarif(): ?int
    {
        return $this->tarif;
    }

    public function setTarif(int $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getPeriode(): ?Periode
    {
        return $this->Periode;
    }

    public function setPeriode(?Periode $Periode): self
    {
        $this->Periode = $Periode;

        return $this;
    }

    public function getLiaison(): ?Liaison
    {
        return $this->Liaison;
    }

    public function setLiaison(?Liaison $Liaison): self
    {
        $this->Liaison = $Liaison;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->Type;
    }

    public function setType(?Type $Type): self
    {
        $this->Type = $Type;

        return $this;
    }
}
