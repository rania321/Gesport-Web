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

    private ?int $idj=null;

    #[ORM\Column(length: 255)]
    private ?string $joueur = 'NULL';

    #[ORM\ManyToOne(targetEntity: Activite::class,inversedBy: 'Equipe')]
    #[ORM\JoinColumn(name: 'activite_id', referencedColumnName: 'ida')]
   
    private ?Equipe $Equipe = null;

    public function getIdj(): ?int
    {
        return $this->idj;
    }

    public function getJoueur(): ?string
    {
        return $this->joueur;
    }

    public function setJoueur(?string $joueur): static
    {
        $this->joueur = $joueur;

        return $this;
    }

    public function getEquipe(): ?Equipe
    {
        return $this->Equipe;
    }

    public function setEquipe(?Equipe $Equipe): static
    {
        $this->Equipe = $Equipe;

        return $this;
    }

    /*public function getIde(): ?Equipe
    {
        return $this->ide;
    }

    public function setIde(?Equipe $ide): static
    {
        $this->ide = $ide;

        return $this;
    } */
}