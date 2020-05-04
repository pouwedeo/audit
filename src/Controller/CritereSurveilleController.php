<?php

namespace App\Controller;

use App\Entity\CritereSurveille;
use App\Form\CritereSurveilleType;
use App\Repository\CritereSurveilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\EntrepriseService;


/**
 * @Route("/critere/surveille")
 */
class CritereSurveilleController extends AbstractController
{
    /**
     * @Route("/", name="critere_surveille_index", methods={"GET"})
     */
    public function index(CritereSurveilleRepository $critereSurveilleRepository): Response
    {
        return $this->render('critere_surveille/index.html.twig', [
            'critere_surveilles' => $critereSurveilleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="critere_surveille_new", methods={"GET","POST"})
     */
    public function new(Request $request,ManagerService $managerService): Response
    {
        $critereSurveille = new CritereSurveille();
        $form = $this->createForm(CritereSurveilleType::class, $critereSurveille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           /* $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($critereSurveille);
            $entityManager->flush();*/
            if($managerService->Amaro($critereSurveille)){
                $this->addFlash('critere.succes','Enregistrement effectué avec succès');

                return $this->redirectToRoute('critere_surveille_new');
            }else{

                $this->addFlash('critere.erreur','Enregistrement non effectué ');
                return $this->redirectToRoute('critere_surveille_new');

            }

        }

        return $this->render('critere_surveille/new.html.twig', [
            'critere_surveille' => $critereSurveille,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="critere_surveille_show", methods={"GET"})
     */

     
    public function show(CritereSurveille $critereSurveille): Response
    {
        return $this->render('critere_surveille/show.html.twig', [
            'critere_surveille' => $critereSurveille,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="critere_surveille_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CritereSurveille $critereSurveille): Response
    {
        $form = $this->createForm(CritereSurveilleType::class, $critereSurveille);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('critere.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('critere_surveille_edit',array('id' => $critereSurveille->getId()));
        }

        return $this->render('critere_surveille/edit.html.twig', [
            'critere_surveille' => $critereSurveille,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="critere_surveille_delete", methods={"DELETE"})
     */
    public function delete(EntrepriseService $entrepriseService,Request $request, CritereSurveille $critereSurveille): Response
    {
        if ($this->isCsrfTokenValid('delete'.$critereSurveille->getId(), $request->request->get('_token'))) {
            $id= $critereSurveille->getId();
        $CritereSurveilleid = $entrepriseService->CritereSurveilleid($id);
        if(!empty($CritereSurveilleid)){
            $this->addFlash('critere.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
            return $this->redirectToRoute('critere_surveille_show',array('id' => $critereSurveille->getId()));

        }else{
      
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($critereSurveille);
            $entityManager->flush();
        }      
    }

        return $this->redirectToRoute('critere_surveille_index');
    }
}
