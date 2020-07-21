<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContenantRepository")
 */
class Contenant
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
    private $nomContenant;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TypeDechet", mappedBy="contenant")
     */
    private $typeDechets;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\JourRamassage", inversedBy="contenants")
     */
    private $jour;

    public function __construct()
    {
        $this->typeDechets = new ArrayCollection();
        $this->jour = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomContenant(): ?string
    {
        return $this->nomContenant;
    }

    public function setNomContenant(string $nomContenant): self
    {
        $this->nomContenant = $nomContenant;

        return $this;
    }

    /**
     * @return Collection|TypeDechet[]
     */
    public function getTypeDechets(): Collection
    {
        return $this->typeDechets;
    }

    public function addTypeDechet(TypeDechet $typeDechet): self
    {
        if (!$this->typeDechets->contains($typeDechet)) {
            $this->typeDechets[] = $typeDechet;
            $typeDechet->setContenant($this);
        }

        return $this;
    }

    public function removeTypeDechet(TypeDechet $typeDechet): self
    {
        if ($this->typeDechets->contains($typeDechet)) {
            $this->typeDechets->removeElement($typeDechet);
            // set the owning side to null (unless already changed)
            if ($typeDechet->getContenant() === $this) {
                $typeDechet->setContenant(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|JourRamassage[]
     */
    public function getJour(): Collection
    {
        return $this->jour;
    }

    public function addJour(JourRamassage $jour): self
    {
        if (!$this->jour->contains($jour)) {
            $this->jour[] = $jour;
        }

        return $this;
    }

    public function removeJour(JourRamassage $jour): self
    {
        if ($this->jour->contains($jour)) {
            $this->jour->removeElement($jour);
        }

        return $this;
    }
}
