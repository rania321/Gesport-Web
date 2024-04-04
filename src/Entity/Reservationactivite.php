<?php

namespace App\Entity;

use App\Entity\Activite;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReservationactiviteRepository;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator\Constraints as CustomAssert;


#[ORM\Entity(repositoryClass: ReservationactiviteRepository::class)]
class Reservationactivite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idr;

    #[Assert\NotBlank(message:"Vous n'avez pas saisi la date.")]
    #[Assert\GreaterThanOrEqual("today", message:"La date doit être dans le futur.")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datedebutr = null;

    #[Assert\NotBlank(message:"Veuillez saisir l'horaire de l'activité.")]
    #[ORM\Column(length: 5)]
    private ?string $heurer = null;

    #[Assert\NotBlank(message:"Veuillez saisir le statut de la réservation.")]
    #[ORM\Column(length: 255)]
    private ?string $statutr = null;

    #[ORM\ManyToOne(targetEntity: Activite::class)]
    #[ORM\JoinColumn(name: 'ida', referencedColumnName: 'ida')]
    private ?Activite $ida=null;


    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'idu', referencedColumnName: 'idu')]
    private ?User $idu=null;

    public function __construct()
    {
        $this->datedebutr = new \DateTime(); // Initialise la date avec la date actuelle par défaut
    }
    
    public function getIdr(): ?int
    {
        return $this->idr;
    }

    public function getDatedebutr(): ?\DateTimeInterface
    {
        return $this->datedebutr;
    }

    public function setDatedebutr(\DateTimeInterface $datedebutr): static
    {
        $this->datedebutr = $datedebutr;

        return $this;
    }

    public function getHeurer(): ?string
    {
        return $this->heurer;
    }

    public function setHeurer(?string $heurer): self
    {
        $this->heurer = $heurer;

        return $this;
    }

    public function getStatutr(): ?string
    {
        return $this->statutr;
    }

    public function setStatutr(string $statutr): static
    {
        $this->statutr = $statutr;

        return $this;
    }

    public function getIda(): ?Activite
    {
        return $this->ida;
    }

    public function setIda(?Activite $ida): static
    {
        $this->ida = $ida;

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


}
