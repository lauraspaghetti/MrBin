<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MairieRepository")
 */
class Mairie
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
    private $nomMairie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commune;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $horaires;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Utilisateur", mappedBy="mairie")
     */
    private $liker;

    public function __construct()
    {
        $this->liker = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMairie(): ?string
    {
        return $this->nomMairie;
    }

    public function setNomMairie(string $nomMairie): self
    {
        $this->nomMairie = $nomMairie;

        return $this;
    }

    /**
     * toString
     */

    public function __toString(){

        return $this->getNomMairie(); 

     }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getHoraires(): ?string
    {
        return $this->horaires;
    }

    public function setHoraires(string $horaires): self
    {
        $this->horaires = $horaires;

        return $this;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getLiker(): Collection
    {
        return $this->liker;
    }

    public function addLiker(Utilisateur $liker): self
    {
        if (!$this->liker->contains($liker)) {
            $this->liker[] = $liker;
            $liker->setMairie($this);
        }

        return $this;
    }

    public function removeLiker(Utilisateur $liker): self
    {
        if ($this->liker->contains($liker)) {
            $this->liker->removeElement($liker);
            // set the owning side to null (unless already changed)
            if ($liker->getMairie() === $this) {
                $liker->setMairie(null);
            }
        }

        return $this;
    }
}
