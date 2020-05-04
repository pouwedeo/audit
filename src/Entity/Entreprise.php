<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntrepriseRepository")
 * @UniqueEntity(fields={"nom"}, message="cette entreprise est déjà enrégistrée.")
 * @UniqueEntity(fields={"telephone"}, message="ce numero est déjà enrégistré.")
 * @UniqueEntity(fields={"email"}, message="cet email est déjà enrégistré.")
 */
class Entreprise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $engagement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $politique;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\Regex(
     *     pattern="/^[0-9]+$/i",
     *     htmlPattern = "^[0-9]+$",
     *     message="le numero de telephone ne contient que des nombres"
     * )
     * @Assert\Length(
     *      min = 8,
     *      max = 11,
     *      minMessage = "le numero de telephone doit avoir au minimum 8 caracteres",
     *      maxMessage = "le numero de telephone doit avoir au maximum 11 caracteres",
     *      allowEmptyString = false
     * )
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, unique=true)
     * @Assert\Email(
     *     message = "l'adresse mail n'est pas valide."
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Personnel", mappedBy="entreprise")
     */
    private $personnels;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Equipe", mappedBy="entreprise")
     */
    private $equipes;

    public function __construct()
    {
        $this->personnels = new ArrayCollection();
        $this->equipes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getObjectif(): ?string
    {
        return $this->objectif;
    }

    public function setObjectif(string $objectif): self
    {
        $this->objectif = $objectif;

        return $this;
    }

    public function getEngagement(): ?string
    {
        return $this->engagement;
    }

    public function setEngagement(string $engagement): self
    {
        $this->engagement = $engagement;

        return $this;
    }

    public function getPolitique(): ?string
    {
        return $this->politique;
    }

    public function setPolitique(string $politique): self
    {
        $this->politique = $politique;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * @return Collection|Personnel[]
     */
    public function getPersonnels(): Collection
    {
        return $this->personnels;
    }

    public function addPersonnel(Personnel $personnel): self
    {
        if (!$this->personnels->contains($personnel)) {
            $this->personnels[] = $personnel;
            $personnel->setEntreprise($this);
        }

        return $this;
    }

    public function removePersonnel(Personnel $personnel): self
    {
        if ($this->personnels->contains($personnel)) {
            $this->personnels->removeElement($personnel);
            // set the owning side to null (unless already changed)
            if ($personnel->getEntreprise() === $this) {
                $personnel->setEntreprise(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getEquipes(): Collection
    {
        return $this->equipes;
    }

    public function addEquipe(Equipe $equipe): self
    {
        if (!$this->equipes->contains($equipe)) {
            $this->equipes[] = $equipe;
            $equipe->setEntreprise($this);
        }

        return $this;
    }

    public function removeEquipe(Equipe $equipe): self
    {
        if ($this->equipes->contains($equipe)) {
            $this->equipes->removeElement($equipe);
            // set the owning side to null (unless already changed)
            if ($equipe->getEntreprise() === $this) {
                $equipe->setEntreprise(null);
            }
        }

        return $this;
    }
}
