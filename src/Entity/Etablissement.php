<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; 
use App\Validator\Constraints as AppAssert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtablissementRepository")
 */
class Etablissement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     * message= "Veuillez remplir ce champ."),
     * @Assert\Length(
     * min=2,
     * max=100,
     * minMessage= "Veuillez saisir au moins deux caractères.",
     * maxMessage= "Veuillez saisir au plus cent caractères."
     * ) 
     */
    private $nomEtablissement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     * message= "Veuillez remplir ce champ."),
     * @Assert\Length(
     * min=2,
     * max=100,
     * minMessage= "Veuillez saisir au moins deux caractères.",
     * maxMessage= "Veuillez saisir au plus cent caractères."
     * ) 
     */
    private $typeEtablissement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     * message= "Veuillez remplir ce champ."),
     * @Assert\Length(
     * min=2,
     * max=100,
     * minMessage= "Veuillez saisir au moins deux caractères.",
     * maxMessage= "Veuillez saisir au plus cent caractères."
     * ) 
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank(
     * message= "Veuillez remplir ce champ.")
     * @AppAssert\Telephone()
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     * min=2,
     * max=100,
     * minMessage= "Veuillez saisir au moins deux caractères.",
     * maxMessage= "Veuillez saisir au plus cent caractères."
     * ) 
     */
    private $horaires;

    /**
     * @ORM\Column(type="boolean",  nullable=true)
     * ) 
     */
    private $reconditionnement;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Utilisateur", inversedBy="favorisEtablissement")
     */
    private $liker;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lattitude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $longitude;

    /**
     * @ORM\Column(type="text", length=900, nullable=true)
     */
    private $iframe;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Categories", mappedBy="etablissements")
     */
    private $categories;

    public function __construct()
    {
        $this->typeDechet = new ArrayCollection();
        $this->liker = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEtablissement(): ?string
    {
        return $this->nomEtablissement;
    }

    public function setNomEtablissement(string $nomEtablissement): self
    {
        $this->nomEtablissement = $nomEtablissement;

        return $this;
    }

    public function getTypeEtablissement(): ?string
    {
        return $this->typeEtablissement;
    }

    public function setTypeEtablissement(string $typeEtablissement): self
    {
        $this->typeEtablissement = $typeEtablissement;

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

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getReconditionnement(): ?bool
    {
        return $this->reconditionnement;
    }

    public function setReconditionnement(bool $reconditionnement): self
    {
        $this->reconditionnement = $reconditionnement;

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
        }

        return $this;
    }

    public function removeLiker(Utilisateur $liker): self
    {
        if ($this->liker->contains($liker)) {
            $this->liker->removeElement($liker);
        }

        return $this;
    }

    public function getLattitude(): ?string
    {
        return $this->lattitude;
    }

    public function setLattitude(string $lattitude): self
    {
        $this->lattitude = $lattitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getIframe(): ?string
    {
        return $this->iframe;
    }

    public function setIframe(?string $iframe): self
    {
        $this->iframe = $iframe;

        return $this;
    }

    /**
     * @return Collection|Categories[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categories $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->addEtablissement($this);
        }

        return $this;
    }

    public function removeCategory(Categories $category): self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
            $category->removeEtablissement($this);
        }

        return $this;
    }

}