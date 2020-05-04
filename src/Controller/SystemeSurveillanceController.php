<?php

namespace App\Controller;

use App\Entity\SystemeSurveillance;
use App\Form\SystemeSurveillanceType;
use App\Repository\SystemeSurveillanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\EntrepriseService;

/**
 * @Route("/systeme/surveillance")
 */
class SystemeSurveillanceController extends AbstractController
{
    /**
     * @Route("/", name="systeme_surveillance_index", methods={"GET"})
     */
    public function index(SystemeSurveillanceRepository $systemeSurveillanceRepository,Request $request,EntrepriseService $entrepriseService): Response
    {        $id= $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('systeme_surveillance/index.html.twig', [
            'systeme_surveillances' => $systemeSurveillanceRepository->findBy( array('page'=>$id)),'id'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/new", name="systeme_surveillance_new", methods={"GET","POST"})
     */
    public function new(Request $request, ManagerService $managerService,EntrepriseService $entrepriseService): Response
    {        $id= $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $systemeSurveillance = new SystemeSurveillance();
        $form = $this->createForm(SystemeSurveillanceType::class, $systemeSurveillance,['identrprise'=>$id]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
       
            $systemeSurveillance->setPage($id);

            if($managerService->Amaro($systemeSurveillance)){
                $this->addFlash('systeme_surveillance.succes','Enregistrement effectué avec succès');

                return $this->redirectToRoute('systeme_surveillance_new',array('id'=> $id));
            }else{

                $this->addFlash('systeme_surveillance.erreur','Enregistrement non effectué ');
                return $this->redirectToRoute('systeme_surveillance_new',array('id'=> $id));

            }

        }

        return $this->render('systeme_surveillance/new.html.twig', [
            'systeme_surveillance' => $systemeSurveillance,
            'form' => $form->createView(),'id'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/{id}", name="systeme_surveillance_show", methods={"GET"})
     */
   
    public function show(SystemeSurveillance $systemeSurveillance,Request $request,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('systeme_surveillance/show.html.twig', [
            'systeme_surveillance' => $systemeSurveillance,'ide'=>$id,'entreprise'=>$donnes
        ]);
    }
    /**
     * @Route("/{id}/edit", name="systeme_surveillance_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SystemeSurveillance $systemeSurveillance,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        $form = $this->createForm(SystemeSurveillanceType::class, $systemeSurveillance,['identrprise'=>$id]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $systemeSurveillance->setPage($id);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('systeme_surveillance.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('systeme_surveillance_edit',array('id' => $systemeSurveillance->getId(),'ide'=> $id));
        }

        return $this->render('systeme_surveillance/edit.html.twig', [
            'systeme_surveillance' => $systemeSurveillance,
            'form' => $form->createView(),'ide'=>$id,'entreprise'=>$donnes
        ]);
    }

    /**
     * @Route("/{id}", name="systeme_surveillance_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SystemeSurveillance $systemeSurveillance): Response
    {
        if ($this->isCsrfTokenValid('delete'.$systemeSurveillance->getId(), $request->request->get('_token'))) {
            $entreprise= $systemeSurveillance->getPage();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($systemeSurveillance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('systeme_surveillance_index',array('id'=> $entreprise));
    }
}
