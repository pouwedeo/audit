<?php

namespace App\Controller;

use App\Entity\Etape;
use App\Form\EtapeType;
use App\Repository\EtapeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\EntrepriseService;
use App\Service\Common\FileUploader;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @Route("/etape")
 */
class EtapeController extends AbstractController
{
    /**
     * @Route("/", name="etape_index", methods={"GET"})
     */
    public function index(EtapeRepository $etapeRepository,Request $request,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('id');
  $entreprises = $entrepriseService->entreprisepage($id);
 foreach($entreprises as $entreprise){
    $donnes=$entreprise->getNom();
}
        return $this->render('etape/index.html.twig', [
            'etapes' => $etapeRepository->findBy( array('page'=>$id)),'id'=>$id,'entreprise'=>$donnes
        ]);
    }
    /**
     * @Route("/new", name="etape_new", methods={"GET","POST"})
     */
    public function new(Request $request, ManagerService $managerService,EntrepriseService $entrepriseService,FileUploader $fileUploader): Response
    {
        $etape = new Etape();
        $id= $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }

       $form = $this->createForm(EtapeType::class, $etape);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $photo = $form['imageproduitobtenu']->getData();
            /* if ($photo) {
                $photoName = $fileUploader->upload($photo);
                $etape->setImageproduitobtenu($photoName);
            } */
            if (is_string($photo) && $photo == 'photo.JPEG') {
                $etape->setImageproduitobtenu($photo);
            } else if (!is_string($photo) && $photo != 'photo.JPEG') {
                $photoName = $fileUploader->upload($photo);
                $etape->setImageproduitobtenu($photoName);
            }
            $etape->setPage($id);

            if($managerService->Amaro($etape)){
                $this->addFlash('etape.succes','Enregistrement effectué avec succès');

                return $this->redirectToRoute('etape_new',array('id'=> $id));
            }else{

                $this->addFlash('etape.erreur','Enregistrement non effectué ');
                return $this->redirectToRoute('etape_new',array('id'=> $id));
        }
    }
        return $this->render('etape/new.html.twig', [
            'etape' => $etape,
            'form' => $form->createView(),'id'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/{id}", name="etape_show", methods={"GET"})
     */
 
    public function show(Etape $etape,Request $request,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('etape/show.html.twig', [
            'etape' => $etape,'ide'=>$id,'entreprise'=>$donnes
        ]);
    }
    /**
     * @Route("/{id}/edit", name="etape_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Etape $etape,EntrepriseService $entrepriseService,FileUploader $fileUploader): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $oldFileimageNamePath = $this->getParameter('brochures_directory').'/'.$etape->getImageproduitobtenu();
        $pictureimageFile = new File($oldFileimageNamePath);
        $etape->setImageproduitobtenu($pictureimageFile);
        $form = $this->createForm(EtapeType::class, $etape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photo = $form['imageproduitobtenu']->getData();
            if (is_string($photo) && $photo == 'photo.JPEG') {
                $etape->setImageproduitobtenu($photo);
            } else if (!is_string($photo) && $photo != 'photo.JPEG') {
                $photoName = $fileUploader->upload($photo);
                $etape->setImageproduitobtenu($photoName);
            }
            $etape->setPage($id);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('etape.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('etape_edit',array('id' => $etape->getId(),'ide'=> $id));
        }

        return $this->render('etape/edit.html.twig', [
            'etape' => $etape,
            'form' => $form->createView(),'ide'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/{id}", name="etape_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Etape $etape,EntrepriseService $entrepriseService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$etape->getId(), $request->request->get('_token'))) {
            $id= $etape->getId();
/*             dump($id);exit();
 */            $entreprise= $etape->getPage();
             $etapeutiliser = $entrepriseService->etapeutiliser($id);
/*             dump($etapeutiliser);exit(); 
 */            $etapeccp = $entrepriseService->etapeccp($id);
/*  dump($etapeccp);exit();
 */            $etapesysteme = $entrepriseService->etapesysteme($id);
            if(!empty($etapeutiliser)){
                $this->addFlash('etape.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('personnel_show',array('id' => $etape->getId(),'ide' => $entreprise));
    
            }else if(!empty($etapeccp)){
                $this->addFlash('etape.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('etape_show',array('id' => $etape->getId(),'ide' => $entreprise));
    
            } else if(!empty($etapesysteme)){
                $this->addFlash('etape.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('etape_show',array('id' => $etape->getId(),'ide' => $entreprise));
    
            }else{
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($etape);
            $entityManager->flush();
        }
    }
        return $this->redirectToRoute('etape_index',array('id'=> $entreprise));
} 
}
