<?php
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Vente;
use App\Entity\Produit;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idpa = null;

    #[ORM\Column]
    private ?int $quantitep = null;

    #[ORM\Column]
    private ?float $totalpa = null;

    #[ORM\ManyToOne(targetEntity: Vente::class, inversedBy: 'panier')]
    #[ORM\JoinColumn(name: 'vente_id', referencedColumnName: 'idv', nullable: false)]
    private ?Vente $vente = null;

    #[ORM\ManyToOne(targetEntity: Produit::class, inversedBy: 'panier')]
    #[ORM\JoinColumn(name: 'produit_id', referencedColumnName: 'idp', nullable: false)]
    private ?Produit $produit = null;

    public function getIdpa(): ?int
    {
        return $this->idpa;
    }

    public function getQuantitep(): ?int
    {
        return $this->quantitep;
    }

    public function setQuantitep(?int $quantitep): self
    {
        $this->quantitep = $quantitep;
        return $this;
    }

    public function getTotalpa(): ?float
    {
        return $this->totalpa;
    }

    public function setTotalpa(?float $totalpa): self
    {
        $this->totalpa = $totalpa;
        return $this;
    }

    public function getVente(): ?Vente
    {
        return $this->vente;
    }

    public function setVente(?Vente $vente): self
    {
        $this->vente = $vente;
        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;
        return $this;
    }
}
