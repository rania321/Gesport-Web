<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProduitRepository;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]

class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $idp=null;

    #[ORM\Column(length: 255)]
    private ?string $nomp;

    #[ORM\Column(length: 255)]
    private ?string $descrip;

    #[ORM\Column]
    private ?float $prixp=null;

    #[ORM\Column]
    private ?int $stockp;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $dateajoutp = null;

    #[ORM\Column(length: 255)]
    private ?string $imagep;

    #[ORM\Column]
    private ?int $referencep;


    public function getIdp(): ?int
    {
        return $this->idp;
    }

    public function getNomp(): ?string
    {
        return $this->nomp;
    }

    public function setNomp(string $nomp): static
    {
        $this->nomp = $nomp;

        return $this;
    }

    public function getDescrip(): ?string
    {
        return $this->descrip;
    }

    public function setDescrip(string $descrip): static
    {
        $this->descrip = $descrip;

        return $this;
    }

    public function getPrixp(): ?float
    {
        return $this->prixp;
    }

    public function setPrixp(float $prixp): static
    {
        $this->prixp = $prixp;

        return $this;
    }

    public function getStockp(): ?int
    {
        return $this->stockp;
    }

    public function setStockp(int $stockp): static
    {
        $this->stockp = $stockp;

        return $this;
    }

    public function getDateajoutp(): ?\DateTimeInterface
    {
        return $this->dateajoutp;
    }

    public function setDateajoutp(\DateTimeInterface $dateajoutp): static
    {
        $this->dateajoutp = $dateajoutp;

        return $this;
    }

    public function getImagep(): ?string
    {
        return $this->imagep;
    }

    public function setImagep(string $imagep): static
    {
        $this->imagep = $imagep;

        return $this;
    }

    public function getReferencep(): ?int
    {
        return $this->referencep;
    }

    public function setReferencep(int $referencep): static
    {
        $this->referencep = $referencep;

        return $this;
    }
}