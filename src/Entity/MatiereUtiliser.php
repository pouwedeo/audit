<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatiereUtiliserRepository")
 */
class MatiereUtiliser
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
    private $page;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MatierePremiere", inversedBy="matiereUtilisers")
     * @ORM\JoinColumn(nullable=false)
     */

    private $matierepremiere;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Etape", inversedBy="matiereUtilisers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etape;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPage(): ?string
    {
        return $this->page;
    }

    public function setPage(?string $page): self
    {
        $this->page = $page;

        return $this;
    }
    public function getMatierepremiere(): ?MatierePremiere
    {
        return $this->matierepremiere;
    }

    public function setMatierepremiere(?MatierePremiere $matierepremiere): self
    {
        $this->matierepremiere = $matierepremiere;

        return $this;
    }

    public function getEtape(): ?Etape
    {
        return $this->etape;
    }

    public function setEtape(?Etape $etape): self
    {
        $this->etape = $etape;

        return $this;
    }
}
