<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereRepository::class)]
class Matiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_de_la_matiere = null;

    #[ORM\Column(length: 255)]
    private ?string $coefficient = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre_heure_semaine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDeLaMatiere(): ?string
    {
        return $this->nom_de_la_matiere;
    }

    public function setNomDeLaMatiere(string $nom_de_la_matiere): static
    {
        $this->nom_de_la_matiere = $nom_de_la_matiere;

        return $this;
    }

    public function getCoefficient(): ?string
    {
        return $this->coefficient;
    }

    public function setCoefficient(string $coefficient): static
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    public function getNombreHeureSemaine(): ?string
    {
        return $this->nombre_heure_semaine;
    }

    public function setNombreHeureSemaine(string $nombre_heure_semaine): static
    {
        $this->nombre_heure_semaine = $nombre_heure_semaine;

        return $this;
    }
}
