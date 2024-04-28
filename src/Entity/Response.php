<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ResponseRepository;

#[ORM\Entity(repositoryClass: ResponseRepository::class)]
class Response
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idrep = null;

    // Replace the $idrec property with a Many-To-One association
    #[ORM\ManyToOne(targetEntity: Reclamation::class, inversedBy: 'responses')]
    #[ORM\JoinColumn(nullable: false, name: "idrec", referencedColumnName: "idrec")]
    private ?Reclamation $reclamation = null;

    #[ORM\Column(type: 'datetime')]
    private ?DateTimeInterface $daterep = null;

    #[ORM\Column(length: 255)]
    private ?string $contenurep;

    // Getters and setters...

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): self
    {
        $this->reclamation = $reclamation;

        return $this;
    }


    public function getIdrep(): ?int
    {
        return $this->idrep;
    }

    public function getIdrec(): ?int
    {
        return $this->reclamation ? $this->reclamation->getIdrec() : null;
    }

    public function setIdrec(int $idrec): static
    {
        if ($this->reclamation) {
            $this->reclamation->setIdrec($idrec);
        }

        return $this;
    }

    public function getDaterep(): ?\DateTimeInterface
    {
        return $this->daterep;
    }

    public function setDaterep(\DateTimeInterface $daterep): static
    {
        $this->daterep = $daterep;

        return $this;
    }

    public function getContenurep(): ?string
    {
        return $this->contenurep;
    }

    public function setContenurep(string $contenurep): static
    {
        $this->contenurep = $contenurep;

        return $this;
    }
    
}