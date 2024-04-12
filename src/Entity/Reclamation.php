<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReclamationRepository;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]

class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $idrec=null;

    #[ORM\Column(length: 255)]
    private ?string $name;

    #[ORM\Column(length: 255)]
    private ?string  $lastname;

    #[ORM\Column(length: 255)]
    private ?string  $descrirec;

    //private $daterec = 'current_timestamp()';
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $daterec = null;

    #[ORM\Column(length: 255)]
    private ?string $categorierec;

    #[ORM\Column(length: 255)]
    private ?string $statutrec;


    public function getIdrec(): ?int
    {
        return $this->idrec;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getDescrirec(): ?string
    {
        return $this->descrirec;
    }

    public function setDescrirec(string $descrirec): static
    {
        $this->descrirec = $descrirec;

        return $this;
    }

    public function getDaterec(): ?\DateTimeInterface
    {
        return $this->daterec;
    }

    public function setDaterec(\DateTimeInterface $daterec): static
    {
        $this->daterec = $daterec;

        return $this;
    }

    public function getCategorierec(): ?string
    {
        return $this->categorierec;
    }

    public function setCategorierec(string $categorierec): static
    {
        $this->categorierec = $categorierec;

        return $this;
    }

    public function getStatutrec(): ?string
    {
        return $this->statutrec;
    }

    public function setStatutrec(string $statutrec): static
    {
        $this->statutrec = $statutrec;

        return $this;
    }

}