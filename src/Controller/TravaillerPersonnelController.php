<?php

namespace App\Controller;

use App\Entity\TravaillerPersonnel;
use App\Form\TravaillerPersonnelType;
use App\Repository\TravaillerPersonnelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\EntrepriseService;
use App\Repository\EquipeRepository;

/**
 * @Route("/travailler/personnel")
 */
class TravaillerPersonnelController extends AbstractController
{
    /**
     * @Route("/", name="travailler_personnel_index", methods={"GET"})
     */
    public function index(EntrepriseService $entrepriseService, TravaillerPersonnelRepository $travaillerPersonnelRepository,Request $request): Response
    {
        $id= $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $personnels=$entrepriseService->travailPersonnel($id);

        return $this->render('travailler_personnel/index.html.twig', [
            'travailler_personnels' => $personnels,'id'=>$id,'entreprise'=>$donnes]);
    }

    /**
     * @Route("/new", name="travailler_personnel_new", methods={"GET","POST"})
     */
  
    public function new(Request $request,EquipeRepository $equipeRepository, EntrepriseService $entrepriseService,ManagerService $managerService): Response
    {
    
        $travaillerPersonnel = new TravaillerPersonnel();
        $id= $request->query->get('id');
      
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $personnels=$entrepriseService->perconnelentreprise($id);
        $equipes = $equipeRepository->findBy( array('entreprise'=>$id));       
                if ($request->getMethod() == 'POST') {
                  $id=$request->query->get('id');
                  $equipe=$request->get('equipe');
                  $personnes=$request->get('role');  

                  $personnels=$entrepriseService->perconnelentreprise($id);
                  $equipes = $equipeRepository->findOneBy( array('id'=>$equipe));
                    $equip= $equipes->getNom();  
               
                  if(!Empty($personnes)){
                   
                    for($i=0 ; $i<count($personnes) ; $i++){
                      $personnel = $this->getDoctrine()->getRepository('App:personnel')->findOneBy(array('id' => $personnes[$i]));
                        $contenu= $personnel->getConteneure();  

                      $equpuepersonnel = $entrepriseService->equpuepersonnel($equipes,$personnes[$i]);
                      if(!empty($equpuepersonnel)){
                        $this->addFlash('travail.erreur', $contenu.' fait déjà partir de l\'equipe '.$equip);
                        return $this->redirectToRoute('travailler_personnel_new', array('id' => $id)); 
                      }else{
                      $travaillerPersonnel->setPersonnel($personnel);
                           $travaillerPersonnel->setEquipe($equipes);
                           $managerService->Amaro($travaillerPersonnel); 
                           $travaillerPersonnel = new TravaillerPersonnel();
                      }
                  }
                     $this->addFlash('travailler_personnel.succes','Enregistrement effectué avec succès');

                    return $this->redirectToRoute('travailler_personnel_new',array('id'=> $id)); 
                }else{

                    $this->addFlash('travailler_personnel.erreur','Enregistrement non effectué ');
                    return $this->redirectToRoute('travailler_personnel_new',array('id'=> $id));
    
                } 
         
            }

        
        

        return $this->render('travailler_personnel/new.html.twig',[ 'travailler_personnel' => $travaillerPersonnel,
        'id'=>$id,'entreprise'=>$donnes, 'equipes'=> $equipes, 'personnels' => $personnels]);
    }
  
    
    /**
     * @Route("/{id}", name="travailler_personnel_show", methods={"GET"})
     */

    public function show(TravaillerPersonnel $travaillerPersonnel,Request $request,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('travailler_personnel/show.html.twig', [
            'travailler_personnel' => $travaillerPersonnel,'ide'=>$id,'entreprise'=>$donnes
        ]);
    }
    /**
     * @Route("/{id}/edit", name="travailler_personnel_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TravaillerPersonnel $travaillerPersonnel,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $form = $this->createForm(TravaillerPersonnelType::class, $travaillerPersonnel,['identrprise'=>$id]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $equipenom = $form['equipe']->getData()->getNom();
            $equipeid = $form['equipe']->getData()->getId();

            $personnelnom = $form['personnel']->getData()->getConteneure();
            $personnelid = $form['personnel']->getData()->getId();
            $equpuepersonnel = $entrepriseService->equpuepersonnel($equipeid,$personnelid);
            if(!empty($equpuepersonnel)){
              $this->addFlash('travail.erreur', $personnelnom.' fait déjà partir de l\'equipe '.$equipenom);
              return $this->redirectToRoute('travailler_personnel_edit',array('id' => $travaillerPersonnel->getId(),'ide'=> $id)); 
            }else{
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('travailler_personnel_.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('travailler_personnel_edit',array('id' => $travaillerPersonnel->getId(),'ide'=> $id));
            }
        }

        return $this->render('travailler_personnel/edit.html.twig', [
            'travailler_personnel' => $travaillerPersonnel,
            'form' => $form->createView(),'ide'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/{id}", name="travailler_personnel_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TravaillerPersonnel $travaillerPersonnel,EntrepriseService $entrepriseService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$travaillerPersonnel->getId(), $request->request->get('_token'))) {
           
            $equipe=$travaillerPersonnel->getEquipe()->getId();
            $entreprises=$entrepriseService->equipeentreprise($equipe);
            foreach( $entreprises as  $entreprise){
                $entreprise= $entreprise->getId();
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($travaillerPersonnel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('travailler_personnel_index',array('id'=> $entreprise));
    }


      

        
}
