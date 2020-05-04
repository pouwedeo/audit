<?php

namespace App\Controller;

use App\Entity\IdentificationccpDanger;
use App\Form\IdentificationccpDangerType;
use App\Repository\IdentificationccpDangerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\EntrepriseService;

/**
 * @Route("/identificationccp/danger")
 */
class IdentificationccpDangerController extends AbstractController
{
    /**
     * @Route("/", name="identificationccp_danger_index", methods={"GET"})
     */
    public function index(IdentificationccpDangerRepository $identificationccpDangerRepository,Request $request,EntrepriseService $entrepriseService): Response
    {        $id= $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('identificationccp_danger/index.html.twig', [
            'identificationccp_dangers' => $identificationccpDangerRepository->findBy( array('page'=>$id)),'id'=>$id
        ,'entreprise'=>$donnes]);
    }

    /**
     * @Route("/new", name="identificationccp_danger_new", methods={"GET","POST"})
     */
    public function new(Request $request, ManagerService $managerService,EntrepriseService $entrepriseService): Response
    {        $id= $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $identificationccpDanger = new IdentificationccpDanger();
        $form = $this->createForm(IdentificationccpDangerType::class, $identificationccpDanger,['identrprise'=>$id]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
         
            $risque = $identificationccpDanger->getFrequence() * $identificationccpDanger->getGravite() * $identificationccpDanger->getDetection();
            $identificationccpDanger->setRisque($risque);
            if( ($risque>=24) || ($identificationccpDanger->getGravite() >=3) ){
             $identificationccpDanger->setCcp(True);  
            }else{
             $identificationccpDanger->setCcp(False);
            }
            $identificationccpDanger->setPage($id);
            if($managerService->Amaro($identificationccpDanger)){
                $this->addFlash('identificationccp.succes','Enregistrement effectué avec succès');

                return $this->redirectToRoute('identificationccp_danger_new',array('id'=> $id));
            }else{

                $this->addFlash('identificationccp.erreur','Enregistrement non effectué ');
                return $this->redirectToRoute('identificationccp_danger_new',array('id'=> $id));

            }

        }

        return $this->render('identificationccp_danger/new.html.twig', [
            'identificationccp_danger' => $identificationccpDanger,
            'form' => $form->createView(),'id'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/{id}", name="identificationccp_danger_show", methods={"GET"})
     */
  

    public function show(IdentificationccpDanger $identificationccpDanger,Request $request,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('identificationccp_danger/show.html.twig', [
            'identificationccp_danger' => $identificationccpDanger,'ide'=>$id,'entreprise'=>$donnes
        ]);
    }
    /**
     * @Route("/{id}/edit", name="identificationccp_danger_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, IdentificationccpDanger $identificationccpDanger, EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
    
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        
        $form = $this->createForm(IdentificationccpDangerType::class, $identificationccpDanger,['identrprise'=>$id]);
        
      
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           $frequence= $form['frequence']->getData();
           $gravite= $form['gravite']->getData();
           $detection= $form['detection']->getData();

            $risque = $frequence * $gravite * $detection;
            $identificationccpDanger->setRisque($risque);
            if( ($risque>=24) || ($gravite>=3) ){
             $identificationccpDanger->setCcp(True);  
            }else{
             $identificationccpDanger->setCcp(False);
            }
            $identificationccpDanger->setPage($id);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('identificationccp.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('identificationccp_danger_edit',array('id' => $identificationccpDanger->getId(),'ide'=> $id));
        }

        return $this->render('identificationccp_danger/edit.html.twig', [
            'identificationccp_danger' => $identificationccpDanger,
            'form' => $form->createView(), 'ide'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/{id}", name="identificationccp_danger_delete", methods={"DELETE"})
     */
    public function delete(Request $request, IdentificationccpDanger $identificationccpDanger): Response
    {
        if ($this->isCsrfTokenValid('delete'.$identificationccpDanger->getId(), $request->request->get('_token'))) {
            $entreprise= $identificationccpDanger->getPage();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($identificationccpDanger);
            $entityManager->flush();
        }

        return $this->redirectToRoute('identificationccp_danger_index',array('id'=> $entreprise));
    }
}
