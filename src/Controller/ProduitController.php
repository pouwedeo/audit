<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\FileUploader;
use Symfony\Component\HttpFoundation\File\File;
use App\Service\Common\EntrepriseService;

/**
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="produit_index", methods={"GET"})
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="produit_new", methods={"GET","POST"})
     */
    public function new(Request $request,ManagerService $managerService,FileUploader $fileUploader): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $emballage = $form['emballage']->getData();
           /*  if ($emballage) {
                $emballageName = $fileUploader->upload($emballage);
                $produit->setEmballage($emballageName);
            } */
            if (is_string($emballage) && $emballage == 'photo.JPEG') {
                $produit->setEmballage($emballage);
            } else if (!is_string($emballage) && $emballage != 'photo.JPEG') {
                $emballageName = $fileUploader->upload($emballage);
                $produit->setEmballage($emballageName);
            }
            $imageproduit = $form['imageproduit']->getData();
            if (is_string($imageproduit) && $imageproduit == 'photo.JPEG') {
                $produit->setImageproduit($imageproduit);
            } else if (!is_string($imageproduit) && $imageproduit != 'photo.JPEG') {
                $imageproduitName = $fileUploader->upload($imageproduit);
                $produit->setImageproduit($imageproduitName);
            }
           /*  if ($imageproduit) {
                $imageproduitName = $fileUploader->upload($imageproduit);
                $produit->setImageproduit($imageproduitName);
            } */
            if($managerService->Amaro($produit)){
                $this->addFlash('produit.succes','Enregistrement effectué avec succès');

                return $this->redirectToRoute('produit_new');
            }else{

                $this->addFlash('produit.erreur','Enregistrement non effectué ');
                return $this->redirectToRoute('produit_new');

            }
        }
        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produit_show", methods={"GET"})
     */
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="produit_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Produit $produit,FileUploader $fileUploader): Response
    {
      $oldFileNamePath = $this->getParameter('brochures_directory').'/'.$produit->getEmballage();
      $pictureFile = new File($oldFileNamePath);
      $produit->setEmballage($pictureFile);
      $oldFileimageNamePath = $this->getParameter('brochures_directory').'/'.$produit->getImageproduit();
      $pictureimageFile = new File($oldFileimageNamePath);
      $produit->setImageproduit($pictureimageFile);

        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          /*   $emballage = $form['emballage']->getData();
            if ($emballage) {
                $emballageName = $fileUploader->upload($emballage);
                $produit->setEmballage($emballageName);
            }
            $imageproduit = $form['imageproduit']->getData();
            if ($imageproduit) {
                $imageproduitName = $fileUploader->upload($imageproduit);
                $produit->setImageproduit($imageproduitName);
            } */
            $emballage = $form['emballage']->getData();
            if (is_string($emballage) && $emballage == 'photo.JPEG') {
                $produit->setEmballage($emballage);
            } else if (!is_string($emballage) && $emballage != 'photo.JPEG') {
                $emballageName = $fileUploader->upload($emballage);
                $produit->setEmballage($emballageName);
            }
            $imageproduit = $form['imageproduit']->getData();
            if (is_string($imageproduit) && $imageproduit == 'photo.JPEG') {
                $produit->setImageproduit($imageproduit);
            } else if (!is_string($imageproduit) && $imageproduit != 'photo.JPEG') {
                $imageproduitName = $fileUploader->upload($imageproduit);
                $produit->setImageproduit($imageproduitName);
            }
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('produit.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('produit_edit',array('id' => $produit->getId()));
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produit_delete", methods={"DELETE"})
     */
    public function delete(EntrepriseService $entrepriseService,Request $request, Produit $produit): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $id= $produit->getId();
            $produitetape = $entrepriseService->produitetape($id);
            $produitproduir = $entrepriseService->produitproduir($id);

            if(!empty($produitetape)){
                $this->addFlash('produit.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('produit_show',array('id' => $produit->getId()));
    
            }else  if(!empty($produitproduir)){
                $this->addFlash('produit.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('produit_show',array('id' => $produit->getId()));
    
            }else{
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($produit);
            $entityManager->flush();
            
        }
    }
        return $this->redirectToRoute('produit_index');
    }
}
