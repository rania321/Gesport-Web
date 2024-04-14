<?php

namespace App\Entity;
use App\Entity\User;
use App\Entity\Produit;

use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\VenteRepository;


#[ORM\Entity(repositoryClass: VenteRepository::class)]

class Vente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $idv=null;

    #[ORM\Column]
    private ?int $quantitév;

    //#[Assert\NotBlank(message:"Vous n'avez pas saisi la date.")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $datev = null;

    #[ORM\Column]
    private ?float $montantv;


    #[ORM\ManyToOne(targetEntity: Produit::class)]
    #[ORM\JoinColumn(name: 'idp', referencedColumnName: 'idp')]
    private ?Produit $idp=null;


    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'idu', referencedColumnName: 'idu')]
    private ?User $idu=null;

    
    public function getIdv(): ?int
    {
        return $this->idv;
    }

    public function getQuantitév(): ?int
    {
        return $this->quantitév;
    }

    public function setQuantitév(int $quantitév): static
    {
        $this->quantitév = $quantitév;

        return $this;
    }

    public function getDatev(): ?\DateTimeInterface
    {
        return $this->datev;
    }

    public function setDatev(\DateTimeInterface $datev): static
    {
        $this->datev = $datev;

        return $this;
    }

    public function getMontantv(): ?float
    {
        return $this->montantv;
    }

    public function setMontantv(float $montantv): static
    {
        $this->montantv = $montantv;

        return $this;
    }

    public function getIdp(): ?Produit
    {
        return $this->idp;
    }

    public function setIdp(?Produit $idp): static
    {
        $this->idp = $idp;

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