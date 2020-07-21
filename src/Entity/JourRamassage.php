<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JourRamassageRepository")
 */
class JourRamassage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomDuJour;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numeroJour;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Contenant", mappedBy="jour")
     */
    private $contenants;

    public function __construct()
    {
        $this->contenants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getNomDuJour(): ?string
    {
        return $this->nomDuJour;
    }

    public function setNomDuJour(string $nomDuJour): self
    {
        $this->nomDuJour = $nomDuJour;

        return $this;
    }

    public function getNumeroJour(): ?int
    {
        return $this->numeroJour;
    }

    public function setNumeroJour(?int $numeroJour): self
    {
        $this->numeroJour = $numeroJour;

        return $this;
    }

    /**
     * @return Collection|Contenant[]
     */
    public function getContenants(): Collection
    {
        return $this->contenants;
    }

    public function addContenant(Contenant $contenant): self
    {
        if (!$this->contenants->contains($contenant)) {
            $this->contenants[] = $contenant;
            $contenant->addJour($this);
        }

        return $this;
    }

    public function removeContenant(Contenant $contenant): self
    {
        if ($this->contenants->contains($contenant)) {
            $this->contenants->removeElement($contenant);
            $contenant->removeJour($this);
        }

        return $this;
    }
}
