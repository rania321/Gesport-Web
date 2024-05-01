<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReclamationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]

class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $idrec=null;

    #[ORM\Column(length: 255)]
    private ?string $name;

    #[ORM\Column(length: 255)]
    private ?string  $lastname;

    #[ORM\Column(length: 255)]
    private ?string  $descrirec;

    //private $daterec = 'current_timestamp()';
    // #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[ORM\Column(type: "date_without_time")]
    private ?DateTimeInterface $daterec = null;

    #[ORM\Column(length: 255)]
    private ?string $categorierec;

    #[ORM\Column(length: 255)]
    private ?string $statutrec;

    #[ORM\OneToMany(targetEntity: Response::class, mappedBy: 'reclamation')]
    private Collection $responses;

    #[ORM\Column(nullable: true)]
    private ?bool $archive = true;

    public function __construct()
    {
        $this->responses = new ArrayCollection();
    }

    /**
     * @return Collection|Response[]
     */
    public function getResponses(): Collection
    {
        return $this->responses;
    }



    public function getIdrec(): ?int
    {
        return $this->idrec;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getDescrirec(): ?string
    {
        return $this->descrirec;
    }

    public function setDescrirec(string $descrirec): static
    {
        $this->descrirec = $descrirec;

        return $this;
    }

    public function getDaterec(): ?\DateTimeInterface
    {
        return $this->daterec;
    }

    public function setDaterec(\DateTimeInterface $daterec): static
    {
        $this->daterec = $daterec;

        return $this;
    }

    public function getCategorierec(): ?string
    {
        return $this->categorierec;
    }

    public function setCategorierec(string $categorierec): static
    {
        $this->categorierec = $categorierec;

        return $this;
    }

    public function getStatutrec(): ?string
    {
        return $this->statutrec;
    }

    public function setStatutrec(string $statutrec): static
    {
        $this->statutrec = $statutrec;

        return $this;
    }

    public function isArchive(): ?bool
    {
        return $this->archive;
    }

    public function setArchive(?bool $archive): static
    {
        $this->archive = $archive;

        return $this;
    }
    public function updateArchiveStatus(): void
    {
        if ($this->daterec !== null) {
            $now = new \DateTime();
            $threeDaysAgo = (new \DateTime())->sub(new \DateInterval('P3D'));
            if ($this->daterec < $threeDaysAgo && $this->daterec < $now) {
                $this->archive = true;
            } else {
                $this->archive = false;
            }
        }
    }

}