<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Form\EquipeType;
use App\Repository\EquipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\EntrepriseService;


/**
 * @Route("/equipe")
 */
class EquipeController extends AbstractController
{
    /**
     * @Route("/", name="equipe_index", methods={"GET"})
     */
    public function index(Request $request,EquipeRepository $equipeRepository,EntrepriseService $entrepriseService): Response
    {        $id= $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
           foreach($entreprises as $entreprise){
               $donnes=$entreprise->getNom();
           }
        return $this->render('equipe/index.html.twig', [
            'equipes' => $equipeRepository->findBy( array('entreprise'=>$id)),'id'=>$id,'entreprise'=>$donnes
        ]);
    }
    /**
     * @Route("/new", name="equipe_new", methods={"GET","POST"})
     */
    public function new(Request $request,ManagerService $managerService,EntrepriseService $entrepriseService): Response
    {        $id= $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }

        $equipe = new Equipe();
        $form = $this->createForm(EquipeType::class, $equipe,['identrprise'=>$id]);
        $form->handleRequest($request);
        $en= $this->getDoctrine()->getRepository('App:Entreprise')->findOneBy(array('id' => $id));

        if ($form->isSubmitted() && $form->isValid()) {
        
            $equipe->setEntreprise($en);

            if($managerService->Amaro($equipe)){
                $this->addFlash('equipe.succes','Enregistrement effectué avec succès');

                return $this->redirectToRoute('equipe_new',array('id'=> $id));
            }else{

                $this->addFlash('equipe.erreur','Enregistrement non effectué ');
                return $this->redirectToRoute('equipe_new',array('id'=> $id));

            }

        }
        return $this->render('equipe/new.html.twig', [
            'equipe' => $equipe,
            'form' => $form->createView(),'id'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/{id}", name="equipe_show", methods={"GET"})
     */
    public function show(Equipe $equipe,Request $request,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('equipe/show.html.twig', [
        'equipe' => $equipe,'ide'=>$id,'entreprise'=>$donnes
        ]);
    }
    /**
     * @Route("/{id}/edit", name="equipe_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Equipe $equipe,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $form = $this->createForm(EquipeType::class, $equipe,['identrprise'=>$id]);
        $form->handleRequest($request);
        $en= $this->getDoctrine()->getRepository('App:Entreprise')->findOneBy(array('id' => $id));

               if ($form->isSubmitted() && $form->isValid()) {
                $equipe->setEntreprise($en);

            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('equipe.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('equipe_edit',array('id' => $equipe->getId(),'ide'=> $id));
        }

        return $this->render('equipe/edit.html.twig', [
            'equipe' => $equipe,
            'form' => $form->createView(),'ide'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/{id}", name="equipe_delete", methods={"DELETE"})
     */
    public function delete(EntrepriseService $entrepriseService,Request $request, Equipe $equipe): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipe->getId(), $request->request->get('_token'))) {
            $id= $equipe->getId();
            $entreprise= $equipe->getEntreprise()->getId();
            $equipeidtravail = $entrepriseService->equipeidtravail($id);
            $perconneltravail = $entrepriseService->perconneltravail($id);

            if(!empty($equipeidtravail)){
                $this->addFlash('equipe.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('equipe_show',array('id' => $equipe->getId(),'ide' => $entreprise));
    
            }else if(!empty($perconneltravail)){
                $this->addFlash('equipe.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('equipe_show',array('id' => $equipe->getId(),'ide' => $entreprise));
    
            } else{
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($equipe);
            $entityManager->flush();
        }
    }
        return $this->redirectToRoute('equipe_index',array('id'=> $entreprise));
    }
}
