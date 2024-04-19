<?php

namespace App\Entity;

use App\Entity\Activitefavoris;
use App\Entity\User;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ActiviteRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[UniqueEntity(fields: ['noma'], message: 'Ce nom de l"activité est déjà utilisé.')]
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

    #[ORM\Column(length: 255,nullable: true)]
    private ?string $imagea= null;

    public function getIda(): ?int
    {
        return $this->ida;
    }

    public function getNoma(): ?string
    {
        return $this->noma;
    }

    public function setNoma(?string $noma): static
    {
        $this->noma = $noma;

        return $this;
    }

    public function getTypea(): ?string
    {
        return $this->typea;
    }

    public function setTypea(?string $typea): static
    {
        $this->typea = $typea;

        return $this;
    }

    public function getDispoa(): ?string
    {
        return $this->dispoa;
    }

    public function setDispoa(?string $dispoa): static
    {
        $this->dispoa = $dispoa;

        return $this;
    }

    public function getDescria(): ?string
    {
        return $this->descria;
    }

    public function setDescria(?string $descria): static
    {
        $this->descria = $descria;

        return $this;
    }

    public function getImagea(): ?string
    {
        return $this->imagea;
    }

    public function setImagea(?string $imagea): static
    {
        $this->imagea = $imagea;

        return $this;
    }

    #[ORM\OneToMany(mappedBy: 'activite', targetEntity: Activitefavoris::class)]
    private Collection $activitefavoriss;

    public function __construct()
    {
        $this->activitefavoriss = new ArrayCollection();
    }

    /**
     * @return Collection|Activitefavoris[]
     */
    public function getActivitefavoriss(): Collection
    {
        return $this->activitefavoriss;
    }

    public function addActivitefavoris(Activitefavoris $activitefavoris): self
    {
        if (!$this->activitefavoriss->contains($activitefavoris)) {
            $this->activitefavoriss[] = $activitefavoris;
            $activitefavoris->setActivite($this);
        }

        return $this;
    }

    public function removeActivitefavoris(Activitefavoris $activitefavoris): self
    {
        if ($this->activitefavoriss->removeElement($activitefavoris)) {
            // Définit le côté propriétaire sur null (sauf si déjà modifié)
            if ($activitefavoris->getActivite() === $this) {
                $activitefavoris->setActivite(null);
            }
        }

        return $this;
    }

}
