<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\JoueurRepository;

#[ORM\Entity(repositoryClass: JoueurRepository::class)]

class Joueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idj = null;

    #[ORM\Column(length: 255)]
    private ?string $joueur = null;

    #[ORM\ManyToOne(targetEntity: Equipe::class, inversedBy: 'Equipe')]
    #[ORM\JoinColumn(name: 'ide', referencedColumnName: 'ide')]
    private ?Equipe $equipe = null;

   

    public function getIdj(): ?int
    {
        return $this->idj;
    }

    public function getJoueur(): ?string
    {
        return $this->joueur;
    }

    public function setJoueur(?string $joueur): self
    {
        $this->joueur = $joueur;
        return $this;
    }

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): self
    {
        $this->equipe = $equipe;
        return $this;
    }
}