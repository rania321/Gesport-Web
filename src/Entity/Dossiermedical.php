<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\DossiermedicalRepository;

#[ORM\Entity(repositoryClass: DossiermedicalRepository::class)]
class Dossiermedical
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $iddm;

    #[ORM\Column]
    private ?float $poidsdm;

    #[ORM\Column]
    private ?float $tailledm;

    #[ORM\Column]
    private ?int $agedm;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'idu', referencedColumnName: 'idu')]
    private ?User $User = null;

    public function getIddm(): ?int
    {
        return $this->iddm;
    }

    public function getPoidsdm(): ?float
    {
        return $this->poidsdm;
    }

    public function setPoidsdm(float $poidsdm): static
    {
        $this->poidsdm = $poidsdm;

        return $this;
    }

    public function getTailledm(): ?float
    {
        return $this->tailledm;
    }

    public function setTailledm(float $tailledm): static
    {
        $this->tailledm = $tailledm;

        return $this;
    }

    public function getAgedm(): ?int
    {
        return $this->agedm;
    }

    public function setAgedm(int $agedm): static
    {
        $this->agedm = $agedm;

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
}
