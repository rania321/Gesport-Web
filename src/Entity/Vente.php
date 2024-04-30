<?php

namespace App\Entity;

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

    #[ORM\ManyToOne(targetEntity: Produit::class,inversedBy: 'vente')]
    #[ORM\JoinColumn(name: 'produit_id', referencedColumnName: 'idp')]
    
   
    private ?Produit $Produit = null;

    #[ORM\ManyToOne(targetEntity: User::class,inversedBy: 'vente')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'idu')]
    
    private ?User $User = null;

    
    
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

    public function getProduit(): ?Produit
    {
        return $this->Produit;
    }

    public function setProduit(?Produit $Produit): static
    {
        $this->Produit = $Produit;

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
    /*public function getIdp(): ?Produit
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
    } */
}