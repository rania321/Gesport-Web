<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ActivitefavorisRepository;

#[ORM\Entity(repositoryClass: ActivitefavorisRepository::class)]
class Activitefavoris
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idf = null;

    
    #[ORM\ManyToOne(targetEntity: User::class,inversedBy: 'activitefavoriss')]
    private ?User $user= null;

    
    #[ORM\ManyToOne(targetEntity: Activite::class,inversedBy: 'activitefavoriss')]
    private ?Activite $activite = null;

    public function getIdf(): ?int
    {
        return $this->idf;
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

    public function getActivite(): ?Activite
    {
        return $this->activite;
    }

    public function setActivite(?Activite $activite): static
    {
        $this->activite = $activite;

        return $this;
    }


}
