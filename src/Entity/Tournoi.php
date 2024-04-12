<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TournoiRepository;

#[ORM\Entity(repositoryClass: TournoiRepository::class)]
class Tournoi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $idt=null;
    
    #[ORM\OneToMany(mappedBy: 'tournoi', targetEntity: Equipe::class)]
    private $equipes;
    
   
    #[ORM\Column(length: 255)]
    private ?string $nomt;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $datedebutt = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $datefint = null;

    #[ORM\Column(length: 255)]
    private ?string $descrit;

    #[ORM\Column(length: 255)]
    private ?string $statutt;

    public function getIdt(): ?int
    {
        return $this->idt;
    }

    public function getNomt(): ?string
    {
        return $this->nomt;
    }

    public function setNomt(string $nomt): static
    {
        $this->nomt = $nomt;

        return $this;
    }

    public function getDatedebutt(): ?\DateTimeInterface
    {
        return $this->datedebutt;
    }

    public function setDatedebutt(\DateTimeInterface $datedebutt): static
    {
        $this->datedebutt = $datedebutt;

        return $this;
    }

    public function getDatefint(): ?\DateTimeInterface
    {
        return $this->datefint;
    }

    public function setDatefint(\DateTimeInterface $datefint): static
    {
        $this->datefint = $datefint;

        return $this;
    }

    public function getDescrit(): ?string
    {
        return $this->descrit;
    }

    public function setDescrit(string $descrit): static
    {
        $this->descrit = $descrit;

        return $this;
    }

    public function getStatutt(): ?string
    {
        return $this->statutt;
    }

    public function setStatutt(string $statutt): static
    {
        $this->statutt = $statutt;

        return $this;
    }
}