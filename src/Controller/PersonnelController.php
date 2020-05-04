<?php

namespace App\Controller;

use App\Entity\Personnel;
use App\Entity\Entreprise;
use App\Form\PersonnelType;
use App\Repository\PersonnelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\EntrepriseService;
use App\Service\Common\FileUploader;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @Route("/personnel")
 */
class PersonnelController extends AbstractController
{
    /**
     * @Route("/", name="personnel_index", methods={"GET"})
     */
    public function index(PersonnelRepository $personnelRepository, Request $request, EntrepriseService $entrepriseService): Response
    {
        $id = $request->query->get('id');
        $personnels = $entrepriseService->perconnelentreprise($id);
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach ($entreprises as $entreprise) {
            $donnes = $entreprise->getNom();
        }
        return $this->render('personnel/index.html.twig', [
            'personnels' => $personnels, 'id' => $id, 'entreprise' => $donnes
        ]);
    }

    /**
     * @Route("/new", name="personnel_new", methods={"GET","POST"})
     */
    public function new(Request $request, FileUploader $fileUploader, ManagerService $managerService, EntrepriseService $entrepriseService): Response
    {
        $donnes = '';

        $id = $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach ($entreprises as $entreprise) {
            $donnes = $entreprise->getNom();
        }
        $personnel = new Personnel();
        $form = $this->createForm(PersonnelType::class, $personnel);
        $form->handleRequest($request);
        $en = $this->getDoctrine()->getRepository('App:Entreprise')->findOneBy(array('id' => $id));

        if ($form->isSubmitted() && $form->isValid()) {

            $contenu = $personnel->getNom() . ' ' . $personnel->getPrenom();
            $perconnel = $entrepriseService->perconnel($contenu);
          if(!empty($perconnel)){
            $this->addFlash('conteneur.erreur', $contenu.' est déjà enregistré');
            return $this->redirectToRoute('personnel_new', array('id' => $id)); 
          }else{
        
            $personnel->setConteneure($contenu);
            $personnel->setEntreprise($en);

            $brochureFile = $form['photo']->getData();

            if (is_string($brochureFile) && $brochureFile == 'photo.JPEG') {
                $personnel->setPhoto($brochureFile);
            } else if (!is_string($brochureFile) && $brochureFile != 'photo.JPEG') {
                $brochureFileName = $fileUploader->upload($brochureFile);
                $personnel->setPhoto($brochureFileName);
            }

            if ($managerService->Amaro($personnel)) {
                $this->addFlash('personnel.succes', 'Enregistrement effectué avec succès');

                return $this->redirectToRoute('personnel_new', array('id' => $id));
            } else {

                $this->addFlash('personnel.erreur', 'Enregistrement non effectué ');
                return $this->redirectToRoute('personnel_new', array('id' => $id));
            }
                  
          }
        }
        return $this->render('personnel/new.html.twig', [
            'personnel' => $personnel,
            'form' => $form->createView(), 'id' => $id, 'entreprise' => $donnes
        ]);
    }

    /**
     * @Route("/{id}", name="personnel_show", methods={"GET"})
     */
  

    public function show(Personnel $personnel,Request $request,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('personnel/show.html.twig', [
            'personnel' => $personnel,'ide'=>$id,'entreprise'=>$donnes
        ]);
    }
    /**
     * @Route("/{id}/edit", name="personnel_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FileUploader $fileUploader, Personnel $personnel, EntrepriseService $entrepriseService): Response
    {

        $id = $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);

        foreach ($entreprises as $entreprise) {
            $donnes = $entreprise->getNom();
        }



        $oldFileNamePath = $this->getParameter('brochures_directory') . '/' . $personnel->getPhoto();
        $pictureFile = new File($oldFileNamePath);
        $photo = $personnel->getPhoto();
 
        $personnel->setPhoto($pictureFile);

        $form = $this->createForm(PersonnelType::class, $personnel);

        $form->handleRequest($request);

        $en = $this->getDoctrine()->getRepository('App:Entreprise')->findOneBy(array('id' => $id));
        if ($form->isSubmitted() && $form->isValid()) {

            $brochureFile = $form['photo']->getData();
 
            if (is_string($brochureFile) && $brochureFile == 'photo.JPEG') {
                $personnel->setPhoto($photo);
            }
             else if (!is_string($brochureFile) && $brochureFile != 'photo.JPEG') {
                $brochureFileName = $fileUploader->upload($brochureFile);
                $personnel->setPhoto($brochureFileName);
            }
            $contenu = $form['nom']->getData() . ' ' . $form['prenom']->getData();
            $perconnel = $entrepriseService->perconnel($contenu);
          /*   if(!empty($perconnel)){
              $this->addFlash('conteneur.erreur', $contenu.' est déjà enregistré');
              return $this->redirectToRoute('personnel_edit', array('id' => $personnel->getId(), 'ide' => $id)); 
            }else{ */
            $personnel->setConteneure($contenu);
           // }
            $personnel->setEntreprise($en);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('personnel.succes', 'Modification effectuée avec succès');

            return $this->redirectToRoute('personnel_edit', array('id' => $personnel->getId(), 'ide' => $id));
        }

        return $this->render('personnel/edit.html.twig', [
            'personnel' => $personnel,
            'form' => $form->createView(), 'ide' => $id, 'entreprise' => $donnes
        ]);
    }

    /**
     * @Route("/{id}", name="personnel_delete", methods={"DELETE"})
     */
    public function delete(EntrepriseService $entrepriseService,Request $request, Personnel $personnel): Response
    {
        if ($this->isCsrfTokenValid('delete' . $personnel->getId(), $request->request->get('_token'))) {
            $id= $personnel->getId();
            $entreprise= $personnel->getEntreprise()->getId();
            $perconnelequipe = $entrepriseService->perconnelequipe($id);
            $perconneltravail = $entrepriseService->perconneltravail($id);
            $perconnelesysteme = $entrepriseService->perconnelesysteme($id);

            if(!empty($perconnelequipe)){
                $this->addFlash('personnel.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('personnel_show',array('id' => $personnel->getId(),'ide' => $entreprise));
    
            }else if(!empty($perconneltravail)){
                $this->addFlash('personnel.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('personnel_show',array('id' => $personnel->getId(),'ide' => $entreprise));
    
            } else if(!empty($perconnelesysteme)){
                $this->addFlash('personnel.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('personnel_show',array('id' => $personnel->getId(),'ide' => $entreprise));
    
            }else{
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($personnel);
            $entityManager->flush();
        }
    }
    
        return $this->redirectToRoute('personnel_index',array('id'=> $entreprise));
    }
}
