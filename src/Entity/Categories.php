<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoriesRepository")
 */
class Categories
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
    private $nomCategorie;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $dechetCommun;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TypeDechet", mappedBy="categorie")
     */
    private $typeDechets;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_picto;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Etablissement", inversedBy="categories")
     */
    private $etablissements;

    public function __construct()
    {
        $this->typeDechets = new ArrayCollection();
        $this->etablissements = new ArrayCollection();
    }

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nomCategorie;
    }

    public function setNomCategorie(string $nomCategorie): self
    {
        $this->nomCategorie = $nomCategorie;

        return $this;
    }

    public function getDechetCommun(): ?bool
    {
        return $this->dechetCommun;
    }

    public function setDechetCommun(?bool $dechetCommun): self
    {
        $this->dechetCommun = $dechetCommun;

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
            $typeDechet->setCategorie($this);
        }

        return $this;
    }

    public function removeTypeDechet(TypeDechet $typeDechet): self
    {
        if ($this->typeDechets->contains($typeDechet)) {
            $this->typeDechets->removeElement($typeDechet);
            // set the owning side to null (unless already changed)
            if ($typeDechet->getCategorie() === $this) {
                $typeDechet->setCategorie(null);
            }
        }

        return $this;
    }

    public function getUrlPicto(): ?string
    {
        return $this->url_picto;
    }
    

    public function setUrlPicto(?string $url_picto): self
    {
        $this->url_picto = $url_picto;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Etablissement[]
     */
    public function getEtablissements(): Collection
    {
        return $this->etablissements;
    }

    public function addEtablissement(Etablissement $etablissement): self
    {
        if (!$this->etablissements->contains($etablissement)) {
            $this->etablissements[] = $etablissement;
        }

        return $this;
    }

    public function removeEtablissement(Etablissement $etablissement): self
    {
        if ($this->etablissements->contains($etablissement)) {
            $this->etablissements->removeElement($etablissement);
        }

        return $this;
    }

    
}
