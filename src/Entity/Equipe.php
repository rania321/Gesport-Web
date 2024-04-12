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
    
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'equipe')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'idu')]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Tournoi::class, inversedBy: 'equipe')]
    #[ORM\JoinColumn(name: 'tournois_id', referencedColumnName: 'idt')]
    private ?Tournoi $tournoi = null;

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
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getTournoi(): ?Tournoi
    {
        return $this->tournoi;
    }

    public function setTournoi(?Tournoi $tournoi): static
    {
        $this->tournoi = $tournoi;

        return $this;
    }
}
