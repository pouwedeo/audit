<?php
namespace App\Service\Common;

use App\Repository\TravaillerPersonnelRepository;
use App\Repository\EntrepriseRepository;
use App\Repository\EquipeRepository;
use App\Repository\ProduirRepository;
use App\Repository\PersonnelRepository;
use App\Repository\MatiereUtiliserRepository;
use App\Repository\CritereSurveilleRepository;
use App\Repository\EtapeRepository;
use App\Repository\MatierePremiereRepository;
use App\Repository\PosteRepository;
use App\Repository\ProduitRepository;
use App\Repository\TypeProblemeRepository;


class EntrepriseService
{
    private $travaillerPersonnelRepository;
    private  $entrepriseRepository;
    private  $equipeRepository;
    private  $produirRepository;
    private  $personnelRepository;
    private  $matiereUtiliserRepository;
    private  $critereSurveilleRepository;
    private  $etapeRepository;
    private  $matierePremiereRepository;
    private  $posteRepository;
    private  $produitRepository;
    private  $typeProblemeRepository;

    public function __construct(TypeProblemeRepository $typeProblemeRepository,ProduitRepository $produitRepository,PosteRepository $posteRepository,MatierePremiereRepository $matierePremiereRepository,EtapeRepository $etapeRepository,CritereSurveilleRepository $critereSurveilleRepository,MatiereUtiliserRepository $matiereUtiliserRepository,TravaillerPersonnelRepository $travaillerPersonnelRepository,EntrepriseRepository $entrepriseRepository,EquipeRepository $equipeRepository,ProduirRepository $produirRepository,PersonnelRepository $personnelRepository)
    {
        $this->etapeRepository= $etapeRepository;
        $this->typeProblemeRepository= $typeProblemeRepository;
        $this->produitRepository= $produitRepository;
        $this->posteRepository= $posteRepository;
        $this->matierePremiereRepository= $matierePremiereRepository;
        $this->travaillerPersonnelRepository= $travaillerPersonnelRepository;
        $this->entrepriseRepository= $entrepriseRepository;
        $this->equipeRepository= $equipeRepository;
        $this->produirRepository= $produirRepository;
        $this->personnelRepository= $personnelRepository;
        $this->matiereUtiliserRepository= $matiereUtiliserRepository;
        $this->critereSurveilleRepository= $critereSurveilleRepository;
    }

    public function entreprisePersonnel($entreprise){
        $entreprisePersonnel= $this->travaillerPersonnelRepository->entreprisePersonnel($entreprise);
        return $entreprisePersonnel;
    }
    

    public function entreprisepage($id){
        $entreprisepage= $this->entrepriseRepository->entreprisepage($id);
        return $entreprisepage;
    }

    
    public function entrepriseequipe($entreprise){
        $entrepriseeequipe= $this->equipeRepository->entrepriseeequipe($entreprise);
        return $entrepriseeequipe;
    }
    public function equipeentreprise($equipe){
        $equipeentreprise= $this->entrepriseRepository->equipeentreprise($equipe);
        return $equipeentreprise;
    }
    public function travailPersonnel($entreprise){
        $travailPersonnel= $this->travaillerPersonnelRepository->travailPersonnel($entreprise);
        return $travailPersonnel;
    }

    public function produirentreprise($entreprise){
        $produirentreprise= $this->produirRepository->produirentreprise($entreprise);
        return $produirentreprise;
    }

    public function perconnelentreprise($entreprise){
        $perconnelentreprise= $this->personnelRepository->perconnelentreprise($entreprise);
        return $perconnelentreprise;
    }

    public function nombrepersonnel($entreprise){
        $nombrepersonnel= $this->entrepriseRepository->nombrepersonnel($entreprise);
        return $nombrepersonnel;
    }

    public function nombreequipe($entreprise){
        $nombreequipe= $this->entrepriseRepository->nombreequipe($entreprise);
        return $nombreequipe;
    }

    
    public function nombrepersonnelequipe($equipe){
        $nombrepersonnelequipe= $this->equipeRepository->nombrepersonnelequipe($equipe);
        return $nombrepersonnelequipe;
    }

     
    public function perconnel($conteneure){
        $personne= $this->personnelRepository->perconnel($conteneure);
        return $personne;
    }
    public function equpuepersonnel($equipe,$personne){
        $equpuepersonnel= $this->travaillerPersonnelRepository->equpuepersonnel($equipe,$personne);
        return $equpuepersonnel;
    }
    public function equpueproduit($equipe,$produit){
        $equpueproduit= $this->produirRepository->equpueproduit($equipe,$produit);
        return $equpueproduit;
    }
    public function etapeproduit($etape,$matiere){
        $etapeproduit= $this->matiereUtiliserRepository->etapeproduit($etape,$matiere);
        return $etapeproduit;
    }

    public function CritereSurveilleid($criteresurveille){
        $CritereSurveilleid= $this->critereSurveilleRepository->CritereSurveilleid($criteresurveille);
        return $CritereSurveilleid;
    }

    public function entrepriseidequipe($entreprise){
        $entrepriseidequipe= $this->entrepriseRepository->entrepriseidequipe($entreprise);
        return $entrepriseidequipe;
    }
    public function entrepriseidpersonnel($entreprise){
        $entrepriseidpersonnel= $this->entrepriseRepository->entrepriseidpersonnel($entreprise);
        return $entrepriseidpersonnel;
    }
    public function equipeidproduir($equipe){
        $equipeidproduir= $this->equipeRepository->equipeidproduir($equipe);
        return $equipeidproduir;
    }
    public function equipeidtravail($equipe){
        $equipeidtravail= $this->equipeRepository->equipeidtravail($equipe);
        return $equipeidtravail;
    }

    public function etapeutiliser($etape){
        $etapeutiliser= $this->etapeRepository->etapeutiliser($etape);
        return $etapeutiliser;
    }
    public function etapeccp($etape){
        $etapeccp= $this->etapeRepository->etapeccp($etape);
        return $etapeccp;
    }
    public function etapesysteme($etape){
        $etapesysteme= $this->etapeRepository->etapesysteme($etape);
        return $etapesysteme;
    }
    public function matiereutiliser($matiere){
        $matiereutiliser= $this->matierePremiereRepository->matiereutiliser($matiere);
        return $matiereutiliser;
    }

public function perconneltravail($personnel){
    $perconneltravail= $this->personnelRepository->perconneltravail($personnel);
    return $perconneltravail;
}

public function perconnelequipe($personnel){
    $perconnelequipe= $this->personnelRepository->perconnelequipe($personnel);
    return $perconnelequipe;
}

public function perconnelesysteme($personnel){
    $perconnelesysteme= $this->personnelRepository->perconnelesysteme($personnel);
    return $perconnelesysteme;
}

public function perconnelposte($poste){
    $perconnelposte= $this->posteRepository->perconnelposte($poste);
    return $perconnelposte;
}
public function produitetape($produit){
    $produitetape= $this->produitRepository->produitetape($produit);
    return $produitetape;
}
public function produitproduir($produit){
    $produitproduir= $this->produitRepository->produitproduir($produit);
    return $produitproduir;
}
public function problemesysteme($probleme){
    $problemesysteme= $this->typeProblemeRepository->problemesysteme($probleme);
    return $problemesysteme;
}

}