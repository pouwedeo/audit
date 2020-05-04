<?php

namespace App\Controller;

use App\Entity\MatierePremiere;
use App\Form\MatierePremiereType;
use App\Repository\MatierePremiereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\FileUploader;
use Symfony\Component\HttpFoundation\File\File;
use App\Service\Common\EntrepriseService;

/**
 * @Route("/matiere/premiere")
 */
class MatierePremiereController extends AbstractController
{
    /**
     * @Route("/", name="matiere_premiere_index", methods={"GET"})
     */
    public function index(MatierePremiereRepository $matierePremiereRepository): Response
    {
        return $this->render('matiere_premiere/index.html.twig', [
            'matiere_premieres' => $matierePremiereRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="matiere_premiere_new", methods={"GET","POST"})
     */
    public function new(Request $request, ManagerService $managerService,FileUploader $fileUploader): Response
    {
        $matierePremiere = new MatierePremiere();
        $form = $this->createForm(MatierePremiereType::class, $matierePremiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photo = $form['photo']->getData();
           /*  if ($photo) {
                $photoName = $fileUploader->upload($photo);
                $matierePremiere->setPhoto($photoName);
            } */
            if (is_string($photo) && $photo == 'photo.JPEG') {
                $matierePremiere->setPhoto($photo);
            } else if (!is_string($photo) && $photo != 'photo.JPEG') {
                $photoName = $fileUploader->upload($photo);
                $matierePremiere->setPhoto($photoName);
            }
            if($managerService->Amaro($matierePremiere)){
                $this->addFlash('matiere_premiere.succes','Enregistrement effectué avec succès');

                return $this->redirectToRoute('matiere_premiere_new');
            }else{

                $this->addFlash('matiere_premiere.erreur','Enregistrement non effectué ');
                return $this->redirectToRoute('matiere_premiere_new');

            }

        }

        return $this->render('matiere_premiere/new.html.twig', [
            'matiere_premiere' => $matierePremiere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="matiere_premiere_show", methods={"GET"})
     */
    public function show(MatierePremiere $matierePremiere): Response
    {
        return $this->render('matiere_premiere/show.html.twig', [
            'matiere_premiere' => $matierePremiere,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="matiere_premiere_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MatierePremiere $matierePremiere,FileUploader $fileUploader): Response
    {
        $oldFileimageNamePath = $this->getParameter('brochures_directory').'/'.$matierePremiere->getPhoto();
        $pictureimageFile = new File($oldFileimageNamePath);
        $matierePremiere->setPhoto($pictureimageFile);
        $form = $this->createForm(MatierePremiereType::class, $matierePremiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photo = $form['photo']->getData();
          /*   if ($photo) {
                $photoName = $fileUploader->upload($photo);
                $matierePremiere->setPhoto($photoName);
            } */
            if (is_string($photo) && $photo == 'photo.JPEG') {
                $matierePremiere->setPhoto($photo);
            } else if (!is_string($photo) && $photo != 'photo.JPEG') {
                $photoName = $fileUploader->upload($photo);
                $matierePremiere->setPhoto($photoName);
            }
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('matiere_premiere.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('matiere_premiere_edit',array('id' => $matierePremiere->getId()));
        }

        return $this->render('matiere_premiere/edit.html.twig', [
            'matiere_premiere' => $matierePremiere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="matiere_premiere_delete", methods={"DELETE"})
     */
    public function delete(EntrepriseService $entrepriseService,Request $request, MatierePremiere $matierePremiere): Response
    {
        if ($this->isCsrfTokenValid('delete'.$matierePremiere->getId(), $request->request->get('_token'))) {
            $id= $matierePremiere->getId();
            $matiereutiliser = $entrepriseService->matiereutiliser($id);
            if(!empty($matiereutiliser)){
                $this->addFlash('matierePremiere.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('matiere_premiere_show',array('id' => $matierePremiere->getId()));
    
            }else{
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($matierePremiere);
            $entityManager->flush();
        }
    }
        return $this->redirectToRoute('matiere_premiere_index');
    }
}
