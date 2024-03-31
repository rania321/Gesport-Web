<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\EquipeRepository;

#[ORM\Entity(repositoryClass: EquipeRepository::class)]

class Equipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $ide;

    #[ORM\Column(length: 255)]
    private ?string $nome;

    #[ORM\Column(length: 255)]
    private ?string  $statute;
    
    #[ORM\ManyToOne(targetEntity: User::class,inversedBy: 'User')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $User = null;

    #[ORM\ManyToOne(targetEntity: Tournoi::class,inversedBy: 'Tournoi')]
    #[ORM\JoinColumn(nullable: false)]
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

    /*public function getIdu(): ?User
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
    }*/

}