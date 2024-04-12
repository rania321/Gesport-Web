<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idu = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Activitefavoris::class)]
    private $activitefavoris;
    
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Equipe::class)]
    private $equipes;

    #[Assert\NotBlank(message:"Veuillez saisir le nom.")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\-]+$/',
        message: 'Le nom ne doit contenir que des lettres et des tirets.'
    )]
    #[ORM\Column(length: 255)]
    private ?string $nomu = null;

    #[Assert\NotBlank(message:"Veuillez saisir le prenom.")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\-]+$/',
        message: 'Le prénom ne doit contenir que des lettres et des tirets.'
    )]
    #[ORM\Column(length: 255)]
    private ?string $prenomu = null;

    #[Assert\NotBlank(message:"Veuillez saisir l'email.")]
    #[Assert\Email(message: "L'adresse email '{{ value }}' n'est pas valide.")]
    #[ORM\Column(length: 255)]
    private ?string $emailu = null;

    #[Assert\NotBlank(message:"Veuillez saisir le mot de passe.")]
    #[ORM\Column(length: 255)]
    private ?string $mdpu= null;

  
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
    public function __toString(): string
    {
        return $this->nomu . ' ' . $this->prenomu;
    }
    public function getRoles(): array
    {
        // Retournez un tableau de rôles de l'utilisateur
        return ['user']; // Par exemple, vous pouvez avoir un rôle utilisateur par défaut
    }

    public function getPassword(): string
    {
        // Retournez le mot de passe de l'utilisateur
        return $this->mdpu; // Supposons que le mot de passe de l'utilisateur est stocké dans la propriété $password
    }

    public function getSalt(): ?string
    {
        // Vous pouvez retourner un sel si vous en utilisez un pour le hachage du mot de passe
        // Sinon, vous pouvez laisser cette méthode vide en retournant null
        return null;
    }

    public function getUsername(): string
    {
        // Retournez le nom d'utilisateur de l'utilisateur
        return $this->emailu;; // Supposons que le nom d'utilisateur de l'utilisateur est stocké dans la propriété $username
    }

    public function eraseCredentials(): void
    {
        // Effacez les informations sensibles stockées temporairement (par exemple, le mot de passe en texte brut)
        // Cette méthode peut être laissée vide si vous n'avez rien à nettoyer
    }
       
    public function getUserIdentifier(): string
    {
        // Retournez ici l'identifiant de l'utilisateur, par exemple l'email
        return $this->emailu;
    }

    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }


}
