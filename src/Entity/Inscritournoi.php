<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\InscritournoiRepository;

#[ORM\Entity(repositoryClass: InscritournoiRepository::class)]

class Inscritournoi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $idit;

    #[ORM\ManyToOne(targetEntity: Equipe::class,inversedBy: 'Equipe')]
    #[ORM\JoinColumn(name: 'equipe_id', referencedColumnName: 'ide', nullable: false)]
    
    private ?Equipe $Equipe = null;

    #[ORM\ManyToOne(targetEntity: Tournoi::class,inversedBy: 'Inscritournoi')]
    #[ORM\JoinColumn(name: 'tournoi_id', referencedColumnName: 'idt', nullable: false)]
  
    private ?Tournoi $Tournoi = null;

    
    public function getIdit(): ?int
    {
        return $this->idit;
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

    public function getTournoi(): ?Tournoi
    {
        return $this->Tournoi;
    }

    public function setIdt(?Tournoi $Tournoi): static
    {
        $this->Tournoi = $Tournoi;

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
    }

    public function getIdt(): ?Tournoi
    {
        return $this->idt;
    }

    public function setIdt(?Tournoi $idt): static
    {
        $this->idt = $idt;

        return $this;
    }*/

}