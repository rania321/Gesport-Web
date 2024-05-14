<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\EquipeRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity; 
use Symfony\Component\Validator\Constraints as Assert; 

#[UniqueEntity(fields: ['nome','Tournoi'], message: 'Ce nom d équipe est déjà utilisé pour ce tournoi.')]
 #[ORM\Entity(repositoryClass: EquipeRepository::class)]

class Equipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $ide;

    #[Assert\NotBlank(message:"Veuillez saisir le nom de l equipe.")]
    #[ORM\Column(length: 255)]
    private ?string $nome;

    #[Assert\NotBlank(message:"Veuillez saisir le statut de l equipe  .")]
    #[ORM\Column(length: 255)]
    private ?string  $statute;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'idu', referencedColumnName: 'idu')]
    private ?User $User = null;

    #[Assert\NotBlank(message:"Veuillez choisir un tournoi  .")]
    #[ORM\ManyToOne(targetEntity: Tournoi::class,inversedBy: 'equipes')]
    #[ORM\JoinColumn(name: 'idt', referencedColumnName: 'idt')]
    private ?Tournoi $Tournoi = null;

    
    public function getIde(): ?int
    {
        return $this->ide;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getStatute(): ?string
    {
        return $this->statute;
    }

    public function setStatute(string $statute): static
    {
        $this->statute = $statute;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): static
    {
        $this->User = $User;

        return $this;
    }

    public function getTournoi(): ?Tournoi
    {
        return $this->Tournoi;
    }

    public function setTournoi(?Tournoi $Tournoi): static
    {
        $this->Tournoi = $Tournoi;

        return $this;
    }

    public function getIdu(): ?User
    {
        return $this->idu;
    }

    public function setIdu(?User $idu): static
    {
        $this->idu = $idu;

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
    }

}