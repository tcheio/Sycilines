<?php

namespace App\Entity;

use App\Repository\LiaisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LiaisonRepository::class)]
class Liaison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 4)]
    private ?string $duree = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Secteur $idSecteur = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Port $idPortDepart = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Port $idPortArrivee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getIdSecteur(): ?Secteur
    {
        return $this->idSecteur;
    }

    public function setIdSecteur(?Secteur $idSecteur): self
    {
        $this->idSecteur = $idSecteur;

        return $this;
    }

    public function getIdPortDepart(): ?Port
    {
        return $this->idPortDepart;
    }

    public function setIdPortDepart(?Port $idPortDepart): self
    {
        $this->idPortDepart = $idPortDepart;

        return $this;
    }

    public function getIdPortArrivee(): ?Port
    {
        return $this->idPortArrivee;
    }

    public function setIdPortArrivee(?Port $idPortArrivee): self
    {
        $this->idPortArrivee = $idPortArrivee;

        return $this;
    }
}
