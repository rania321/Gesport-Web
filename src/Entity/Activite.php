<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ActiviteRepository;

#[ORM\Entity(repositoryClass: ActiviteRepository::class)]
class Activite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $ida = null;

    #[Assert\NotBlank(message:"Veuillez saisir le nom de l'activité.")]
    #[ORM\Column(length: 255)]
    private ?string $noma = null;

    #[Assert\NotBlank(message:"Veuillez saisir le type de l'activité.")]
    #[ORM\Column(length: 255)]
    private ?string $typea = null;

    #[Assert\NotBlank(message:"Veuillez saisir la disponibilité de l'activité.")]
    #[ORM\Column(length: 255)]
    private ?string $dispoa = null;

    #[Assert\NotBlank(message:"Veuillez saisir la description de l'activité.")]
    #[ORM\Column(length: 65535)]
    private ?string $descria = null;

    #[Assert\NotBlank(message:"Veuillez saisir l'image de l'activité.")]
    #[ORM\Column(length: 255)]
    private ?string $imagea= null;

    public function getIda(): ?int
    {
        return $this->ida;
    }

    public function getNoma(): ?string
    {
        return $this->noma;
    }

    public function setNoma(string $noma): static
    {
        $this->noma = $noma;

        return $this;
    }

    public function getTypea(): ?string
    {
        return $this->typea;
    }

    public function setTypea(string $typea): static
    {
        $this->typea = $typea;

        return $this;
    }

    public function getDispoa(): ?string
    {
        return $this->dispoa;
    }

    public function setDispoa(string $dispoa): static
    {
        $this->dispoa = $dispoa;

        return $this;
    }

    public function getDescria(): ?string
    {
        return $this->descria;
    }

    public function setDescria(string $descria): static
    {
        $this->descria = $descria;

        return $this;
    }

    public function getImagea(): ?string
    {
        return $this->imagea;
    }

    public function setImagea(string $imagea): static
    {
        $this->imagea = $imagea;

        return $this;
    }


}
