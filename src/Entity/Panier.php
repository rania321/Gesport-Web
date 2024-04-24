<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PanierRepository;

#[ORM\Entity(repositoryClass: PanierRepository::class)]

class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $idpa=null;

    #[ORM\Column]
    private ?int $quantitep = NULL;

    #[ORM\Column]
    private ?float $totalpa = NULL;

    #[ORM\ManyToOne(targetEntity: Vente::class,inversedBy: 'Vente')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vente $Vente = null;

    #[ORM\ManyToOne(targetEntity: Produit::class,inversedBy: 'Produit')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Produit $Produit = null;

    public function getIdpa(): ?int
    {
        return $this->idpa;
    }

    public function getQuantitep(): ?int
    {
        return $this->quantitep;
    }

    public function setQuantitep(?int $quantitep): static
    {
        $this->quantitep = $quantitep;

        return $this;
    }

    public function getTotalpa(): ?float
    {
        return $this->totalpa;
    }

    public function setTotalpa(?float $totalpa): static
    {
        $this->totalpa = $totalpa;

        return $this;
    }

    public function getVente(): ?Vente
    {
        return $this->Vente;
    }

    public function setVente(?Vente $Vente): static
    {
        $this->Vente = $Vente;

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

    /*public function getIdv(): ?Vente
    {
        return $this->idv;
    }

    public function setIdv(?Vente $idv): static
    {
        $this->idv = $idv;

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
    } */
}