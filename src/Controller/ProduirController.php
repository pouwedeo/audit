<?php

namespace App\Controller;

use App\Entity\Produir;
use App\Form\ProduirType;
use App\Repository\ProduirRepository;
use App\Service\Query\ManagerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Common\EntrepriseService;
use App\Repository\ProduitRepository;
use App\Repository\EquipeRepository;

/**
 * @Route("/produir")
 */
class ProduirController extends AbstractController
{
    /**
     * @Route("/", name="produir_index", methods={"GET"})
     */
    public function index(ProduirRepository $produirRepository,Request $request,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('id');
     
        $entreprises = $entrepriseService->entreprisepage( $id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $produirs=$entrepriseService->produirentreprise($id);

        return $this->render('produir/index.html.twig', [
            'produirs' => $produirs,'id'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/new", name="produir_new", methods={"GET","POST"})
     */

    public function new(Request $request,EquipeRepository $equipeRepository, ManagerService $managerService,EntrepriseService $entrepriseService,ProduitRepository $produitRepository): Response
    {
        $produir = new Produir();
        $id= $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage( $id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $produits = $produitRepository->findAll();
        $equipes = $equipeRepository->findBy( array('entreprise'=>$id));       
                if ($request->getMethod() == 'POST') {
                  $id=$request->query->get('id');
                  $equipe=$request->get('equipe');
                  $produits=$request->get('role');  

                  $equipes = $equipeRepository->findOneBy( array('id'=>$equipe));
                  $equip= $equipes->getNom();
                  /* foreach($equipes as $equipe){
                    $equip= $equipe->getNom();  
                 } */
                
                  if(!Empty($produits)){
                   
                    for($i=0 ; $i<count($produits) ; $i++){
                      $produit = $this->getDoctrine()->getRepository('App:Produit')->findOneBy(array('id' => $produits[$i]));
                     
                        $produi= $produit->getNom();  
                    
                      $equpueproduit = $entrepriseService->equpueproduit($equipes,$produits[$i]);
                      if(!empty($equpueproduit)){
                        $this->addFlash('produirs.erreur', $equip.' produit déjà  '.$produi);
                        return $this->redirectToRoute('produir_new', array('id' => $id)); 
                      }else{ 
                      $produir->setProduit($produit);
                           $produir->setEquipe($equipes);
                           $managerService->Amaro($produir); 
                           $produir = new produir();
                  }
                }
                $this->addFlash('produir.succes','Enregistrement effectué avec succès');

                return $this->redirectToRoute('produir_new',array('id'=> $id));
            }else{

                $this->addFlash('produir.erreur','Enregistrement non effectué ');
                return $this->redirectToRoute('produir_new',array('id'=> $id));

            }

        } 

        return $this->render('produir/new.html.twig',[ 'produir' => $produir,
        'id'=>$id,'entreprise'=>$donnes,'produits'=>$produits,'equipes'=>$equipes]);
    }


    /**
     * @Route("/{id}", name="produir_show", methods={"GET"})
     */
  

    public function show(Produir $produir,Request $request,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('produir/show.html.twig', [
            'produir' => $produir,'ide'=>$id,'entreprise'=>$donnes
        ]);
    }
    /**
     * @Route("/{id}/edit", name="produir_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Produir $produir,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $form = $this->createForm(ProduirType::class, $produir,['identrprise'=>$id]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $equipenom = $form['equipe']->getData()->getNom();
            $equipeid = $form['equipe']->getData()->getId();

            $produitnom = $form['produit']->getData()->getNom();
            $produitid = $form['produit']->getData()->getId();
            $equpueproduit = $entrepriseService->equpueproduit($equipeid,$produitid);
            if(!empty($equpueproduit)){
              $this->addFlash('produirs.erreur', $equipenom.' produit déjà  '.$produitnom);
              return $this->redirectToRoute('produir_edit',array('id' => $produir->getId(),'ide'=> $id)); 
            }else{

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('produir.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('produir_edit',array('id' => $produir->getId(),'ide'=> $id));
            }
        }

        return $this->render('produir/edit.html.twig', [
            'produir' => $produir,
            'form' => $form->createView(),'ide'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/{id}", name="produir_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Produir $produir,EntrepriseService $entrepriseService): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produir->getId(), $request->request->get('_token'))) {
            $equipe=$produir->getEquipe()->getId();
            $entreprises=$entrepriseService->equipeentreprise($equipe);
            foreach( $entreprises as  $entreprise){
                $entreprise= $entreprise->getId();
            }
/*             dump($entreprise);exit();
 */            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($produir);
            $entityManager->flush();
        }

        return $this->redirectToRoute('produir_index',array('id'=> $entreprise));
    }
}
