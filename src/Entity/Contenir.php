<?php

namespace App\Entity;

use App\Repository\ContenirRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContenirRepository::class)]
class Contenir
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nombreMax = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Bateau $idBateau = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Type $idType = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreMax(): ?int
    {
        return $this->nombreMax;
    }

    public function setNombreMax(int $nombreMax): self
    {
        $this->nombreMax = $nombreMax;

        return $this;
    }

    public function getIdBateau(): ?Bateau
    {
        return $this->idBateau;
    }

    public function setIdBateau(?Bateau $idBateau): self
    {
        $this->idBateau = $idBateau;

        return $this;
    }

    public function getIdType(): ?Type
    {
        return $this->idType;
    }

    public function setIdType(?Type $idType): self
    {
        $this->idType = $idType;

        return $this;
    }
}
