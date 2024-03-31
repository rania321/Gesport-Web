<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReservationactiviteRepository;


#[ORM\Entity(repositoryClass: ReservationactiviteRepository::class)]
class Reservationactivite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idr;

    #[Assert\NotBlank(message:"Vous n'avez pas saisi la date.")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $datedebutr = null;

    #[Assert\NotBlank(message:"Veuillez saisir l'horaire de l'activité.")]
    #[ORM\Column(length: 5)]
    private ?string $heurer = null;

    #[Assert\NotBlank(message:"Veuillez saisir le statut de la réservation.")]
    #[ORM\Column(length: 255)]
    private ?string $statutr = null;

    #[ORM\ManyToOne(targetEntity: Activite::class,inversedBy: 'Reservationsactivite')]
    private ?Activite $activite= null;

    #[ORM\ManyToOne(targetEntity: User::class,inversedBy: 'Reservationsactivite')]
    private ?User $user= null;

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

    public function setHeurer(string $heurer): static
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

    public function getActivite(): ?Activite
    {
        return $this->Activite;
    }

    public function setActivite(?Activite $activite): static
    {
        $this->activite = $activite;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setIdu(?User $user): static
    {
        $this->user = $user;

        return $this;
    }


}
