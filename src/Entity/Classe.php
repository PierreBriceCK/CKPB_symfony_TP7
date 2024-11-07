<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClasseRepository::class)]
class Classe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(length: 255)]
    private ?string $niveau = null;

    #[ORM\Column(length: 255)]
    private ?string $effectif_actuel = null;

    #[ORM\Column(length: 255)]
    private ?string $effectif_max = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): static
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getEffectifActuel(): ?string
    {
        return $this->effectif_actuel;
    }

    public function setEffectifActuel(string $effectif_actuel): static
    {
        $this->effectif_actuel = $effectif_actuel;

        return $this;
    }

    public function getEffectifMax(): ?string
    {
        return $this->effectif_max;
    }

    public function setEffectifMax(string $effectif_max): static
    {
        $this->effectif_max = $effectif_max;

        return $this;
    }
}
