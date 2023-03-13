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
    private ?Secteur $Secteur = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Port $portDepart = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Port $portArrivee = null;

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

    public function getSecteur(): ?Secteur
    {
        return $this->Secteur;
    }

    public function setSecteur(?Secteur $Secteur): self
    {
        $this->Secteur = $Secteur;

        return $this;
    }

    public function getportDepart(): ?Port
    {
        return $this->portDepart;
    }

    public function setportDepart(?Port $portDepart): self
    {
        $this->portDepart = $portDepart;

        return $this;
    }

    public function getportArrivee(): ?Port
    {
        return $this->portArrivee;
    }

    public function setportArrivee(?Port $portArrivee): self
    {
        $this->portArrivee = $portArrivee;

        return $this;
    }
}
