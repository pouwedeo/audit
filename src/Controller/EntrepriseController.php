<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Form\EntrepriseType;
use App\Repository\EntrepriseRepository;
use App\Service\Query\ManagerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Common\EntrepriseService;

/**
 * @Route("/entreprise")
 */
class EntrepriseController extends AbstractController
{
    /**
     * @Route("/", name="entreprise_index", methods={"GET"})
     */
    public function index(EntrepriseRepository $entrepriseRepository): Response
    {
        return $this->render('entreprise/index.html.twig', [
            'entreprises' => $entrepriseRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="entreprise_new", methods={"GET","POST"})
     */
    public function new(Request $request,ManagerService $managerService): Response
    {
        $entreprise = new Entreprise();
        $form = $this->createForm(EntrepriseType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           /* $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entreprise);
            $entityManager->flush();*/
            /*dump($entreprise);

            dump($managerService->Amaro($entreprise));exit();*/
            if($managerService->Amaro($entreprise)){
                $this->addFlash('entreprise.succes','Enregistrement effectué avec succès');

                return $this->redirectToRoute('entreprise_new');
            }else{

                $this->addFlash('entreprise.erreur','Enregistrement non effectué ');
                return $this->redirectToRoute('entreprise_new');

            }

        }

        return $this->render('entreprise/new.html.twig', [
            'entreprise' => $entreprise,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="entreprise_show", methods={"GET"})
     */
    public function show(Entreprise $entreprise): Response
    {
        return $this->render('entreprise/show.html.twig', [
            'entreprise' => $entreprise,
        ]);
    }

    
    /**
     * @Route("/{id}/edit", name="entreprise_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Entreprise $entreprise): Response
    {
        $form = $this->createForm(EntrepriseType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('entreprise.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('entreprise_edit',array('id' => $entreprise->getId()));
        } 

        return $this->render('entreprise/edit.html.twig', [
            'entreprise' => $entreprise,
            'form' => $form->createView(),'id' => $entreprise->getId()
        ]);
    }

    /**
     * @Route("/{id}", name="entreprise_delete", methods={"DELETE"})
     */
    public function delete(EntrepriseService $entrepriseService,Request $request, Entreprise $entreprise): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entreprise->getId(), $request->request->get('_token'))) {
            $id= $entreprise->getId();
            $entrepriseidequipe = $entrepriseService->entrepriseidequipe($id);
            $entrepriseidpersonnel = $entrepriseService->entrepriseidpersonnel($id);

            if(!empty($entrepriseidequipe)){
                $this->addFlash('entreprise.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('entreprise_show',array('id' => $entreprise->getId()));
    
            }else if(!empty($entrepriseidpersonnel)){
                $this->addFlash('entreprise.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('entreprise_show',array('id' => $entreprise->getId()));
    
            }else{
          
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($entreprise);
            $entityManager->flush();
        }
    }
        return $this->redirectToRoute('entreprise_index');
    }

   

}
