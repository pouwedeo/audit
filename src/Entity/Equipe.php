<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipeRepository")
 * @UniqueEntity(fields={"nom"}, message="cette equipe est déjà enrégistrée.")
 */
class Equipe
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
     * @ORM\Column(type="string")
     */
    private $datecreation;

    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectif;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TravaillerPersonnel", mappedBy="equipe")
     */
    private $travaillerPersonnels;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Entreprise", inversedBy="equipes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $entreprise;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Produir", mappedBy="equipe")
     */
    private $produirs;

    

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Personnel")
     */
    private $personnel;

    public function __construct()
    {
        $this->travaillerPersonnels = new ArrayCollection();
        $this->produirs = new ArrayCollection();
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

    public function getDatecreation(): ?string
    {
        return $this->datecreation;
    }

    public function setDatecreation(string $datecreation): self
    {
        $this->datecreation = $datecreation;

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
            $travaillerPersonnel->setEquipe($this);
        }

        return $this;
    }

    public function removeTravaillerPersonnel(TravaillerPersonnel $travaillerPersonnel): self
    {
        if ($this->travaillerPersonnels->contains($travaillerPersonnel)) {
            $this->travaillerPersonnels->removeElement($travaillerPersonnel);
            // set the owning side to null (unless already changed)
            if ($travaillerPersonnel->getEquipe() === $this) {
                $travaillerPersonnel->setEquipe(null);
            }
        }

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

    /**
     * @return Collection|Produir[]
     */
    public function getProduirs(): Collection
    {
        return $this->produirs;
    }

    public function addProduir(Produir $produir): self
    {
        if (!$this->produirs->contains($produir)) {
            $this->produirs[] = $produir;
            $produir->setEquipe($this);
        }

        return $this;
    }

    public function removeProduir(Produir $produir): self
    {
        if ($this->produirs->contains($produir)) {
            $this->produirs->removeElement($produir);
            // set the owning side to null (unless already changed)
            if ($produir->getEquipe() === $this) {
                $produir->setEquipe(null);
            }
        }

        return $this;
    }

   

    public function getPersonnel(): ?Personnel
    {
        return $this->personnel;
    }

    public function setPersonnel(?Personnel $personnel): self
    {
        $this->personnel = $personnel;

        return $this;
    }
}
