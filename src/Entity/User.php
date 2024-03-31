<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idu = null;

    #[Assert\NotBlank(message:"Veuillez saisir le nom.")]
    #[ORM\Column(length: 255)]
    private ?string $nomu = null;

    #[Assert\NotBlank(message:"Veuillez saisir le prenom.")]
    #[ORM\Column(length: 255)]
    private ?string $prenomu = null;

    #[Assert\NotBlank(message:"Veuillez saisir l'email.")]
    #[ORM\Column(length: 255)]
    private ?string $emailu = null;

    #[Assert\NotBlank(message:"Veuillez saisir le mot de passe.")]
    #[ORM\Column(length: 255)]
    private ?string $mdpu= null;

    #[Assert\NotBlank(message:"Veuillez saisir le role.")]
    #[ORM\Column(length: 255)]
    private ?string $roleu = null;

    public function getIdu(): ?int
    {
        return $this->idu;
    }

    public function getNomu(): ?string
    {
        return $this->nomu;
    }

    public function setNomu(string $nomu): static
    {
        $this->nomu = $nomu;

        return $this;
    }

    public function getPrenomu(): ?string
    {
        return $this->prenomu;
    }

    public function setPrenomu(string $prenomu): static
    {
        $this->prenomu = $prenomu;

        return $this;
    }

    public function getEmailu(): ?string
    {
        return $this->emailu;
    }

    public function setEmailu(string $emailu): static
    {
        $this->emailu = $emailu;

        return $this;
    }

    public function getMdpu(): ?string
    {
        return $this->mdpu;
    }

    public function setMdpu(string $mdpu): static
    {
        $this->mdpu = $mdpu;

        return $this;
    }

    public function getRoleu(): ?string
    {
        return $this->roleu;
    }

    public function setRoleu(string $roleu): static
    {
        $this->roleu = $roleu;

        return $this;
    }


}
