<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonnelRepository")
 * @UniqueEntity(fields={"telephone"}, message="ce numero est déjà enrégistré.")
 *  @UniqueEntity(fields={"email"}, message="cet email est déjà enrégistré."
 * )
 */
class Personnel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]+$/i",
     *     htmlPattern = "^[a-zA-Z]+$",
     *     message="le nom ne contient que des lettres"
     * )
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "le nom  doit avoir au minimum 2 caracteres",
     *      allowEmptyString = false
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]+$/i",
     *     htmlPattern = "^[a-zA-Z]+$",
     *     message="le prenom ne contient que des lettres"
     * )
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "le prenom  doit avoir au minimum 2 caracteres",
     *      allowEmptyString = false
     * )
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sexe;

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
    private $adresse;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Poste", inversedBy="personnels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $poste;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Entreprise", inversedBy="personnels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $conteneure;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TravaillerPersonnel", mappedBy="personnel")
     */
    private $travaillerPersonnels;

    public function __construct()
    {
        $this->travaillerPersonnels = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPoste(): ?Poste
    {
        return $this->poste;
    }

    public function setPoste(?Poste $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getConteneure(): ?string
    {
        return $this->conteneure;
    }

    public function setConteneure(string $conteneure): self
    {
        $this->conteneure = $conteneure;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection|TravaillerPersonnel[]
     */
    public function getTravaillerPersonnels(): Collection
    {
        return $this->travaillerPersonnels;
    }

    public function addTravaillerPersonnel(TravaillerPersonnel $travaillerPersonnel): self
    {
        if (!$this->travaillerPersonnels->contains($travaillerPersonnel)) {
            $this->travaillerPersonnels[] = $travaillerPersonnel;
            $travaillerPersonnel->setPersonnel($this);
        }

        return $this;
    }

    public function removeTravaillerPersonnel(TravaillerPersonnel $travaillerPersonnel): self
    {
        if ($this->travaillerPersonnels->contains($travaillerPersonnel)) {
            $this->travaillerPersonnels->removeElement($travaillerPersonnel);
            // set the owning side to null (unless already changed)
            if ($travaillerPersonnel->getPersonnel() === $this) {
                $travaillerPersonnel->setPersonnel(null);
            }
        }

        return $this;
    }
}
