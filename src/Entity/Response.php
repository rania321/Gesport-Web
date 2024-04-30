<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ResponseRepository;

#[ORM\Entity(repositoryClass: ResponseRepository::class)]
class Response
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $idrep=null;

    /**
     * @var int
     *
     * @ORM\Column(name="idRec", type="integer", nullable=false)
     */
    private $idrec;//a changer clé etrangere de reclamation!!!
    
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?DateTimeInterface $daterep = null;

    #[ORM\Column(length: 255)]
    private ?string $contenurep;


    public function getIdrep(): ?int
    {
        return $this->idrep;
    }

    public function getIdrec(): ?int
    {
        return $this->idrec;
    }

    public function setIdrec(int $idrec): static
    {
        $this->idrec = $idrec;

        return $this;
    }

    public function getDaterep(): ?\DateTimeInterface
    {
        return $this->daterep;
    }

    public function setDaterep(\DateTimeInterface $daterep): static
    {
        $this->daterep = $daterep;

        return $this;
    }

    public function getContenurep(): ?string
    {
        return $this->contenurep;
    }

    public function setContenurep(string $contenurep): static
    {
        $this->contenurep = $contenurep;

        return $this;
    }
}