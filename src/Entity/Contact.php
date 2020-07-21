<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; 

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
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
     * min=5,
     * max=100,
     * minMessage= "Veuillez saisir au moins cinq caractères.",
     * maxMessage= "Veuillez saisir au plus cent caractères."
     * ) 
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     * message= "Veuillez remplir ce champ."),
     * @Assert\Length(
     * min=5,
     * max=100,
     * minMessage= "Veuillez saisir au moins cinq caractères.",
     * maxMessage= "Veuillez saisir au plus cent caractères."
     * ) 
     */
    private $objet;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(
     * message= "Veuillez remplir ce champ."),
     * @Assert\Length(
     * min=5,
     * max=800,
     * minMessage= "Veuillez saisir au moins cinq caractères.",
     * maxMessage= "Veuillez saisir au plus 800 caractères."
     * ) 
     */
    private $message;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(
     * message= "Veuillez remplir ce champ."),
     * @Assert\Length(
     * min=2,
     * max=100,
     * minMessage= "Veuillez saisir au moins deux caractères.",
     * maxMessage= "Veuillez saisir au plus cent caractères."
     * ) 
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(
     * message= "Veuillez remplir ce champ."),
     * @Assert\Length(
     * min=2,
     * max=100,
     * minMessage= "Veuillez saisir au moins deux caractères.",
     * maxMessage= "Veuillez saisir au plus cent caractères."
     * ) 
     */
    private $prenom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}
