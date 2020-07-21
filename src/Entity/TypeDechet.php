<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeDechetRepository")
 */
class TypeDechet
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
    private $nomTypeDechet;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contenant", inversedBy="typeDechets")
     */
    private $contenant;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categories", inversedBy="typeDechets")
     */
    private $categorie;

    


    public function __construct()
    {
        $this->etablissements = new ArrayCollection();
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTypeDechet(): ?string
    {
        return $this->nomTypeDechet;
    }

    public function setNomTypeDechet(string $nomTypeDechet): self
    {
        $this->nomTypeDechet = $nomTypeDechet;

        return $this;
    }


    public function getContenant(): ?Contenant
    {
        return $this->contenant;
    }

    public function setContenant(?Contenant $contenant): self
    {
        $this->contenant = $contenant;

        return $this;
    }

    public function getCategorie(): ?Categories
    {
        return $this->categorie;
    }

    public function setCategorie(?Categories $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }


    
}
