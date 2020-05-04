<?php

namespace App\Controller;

use App\Entity\TypeProbleme;
use App\Form\TypeProblemeType;
use App\Repository\TypeProblemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\EntrepriseService;

/**
 * @Route("/type/probleme")
 */
class TypeProblemeController extends AbstractController
{
    /**
     * @Route("/", name="type_probleme_index", methods={"GET"})
     */
    public function index(TypeProblemeRepository $typeProblemeRepository): Response
    {
        return $this->render('type_probleme/index.html.twig', [
            'type_problemes' => $typeProblemeRepository->findAll(),
        ]);
    }
    /**
     * @Route("/new", name="type_probleme_new", methods={"GET","POST"})
     */
    public function new(Request $request, ManagerService $managerService): Response
    {
        $typeProbleme = new TypeProbleme();
        $form = $this->createForm(TypeProblemeType::class, $typeProbleme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          /*  $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeProbleme);
            $entityManager->flush();*/
            if($managerService->Amaro($typeProbleme)){
                $this->addFlash('type_probleme.succes','Enregistrement effectué avec succès');

                return $this->redirectToRoute('type_probleme_new');
            }else{

                $this->addFlash('type_probleme.erreur','Enregistrement non effectué ');
                return $this->redirectToRoute('type_probleme_new');

            }


        }

        return $this->render('type_probleme/new.html.twig', [
            'type_probleme' => $typeProbleme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_probleme_show", methods={"GET"})
     */
    public function show(TypeProbleme $typeProbleme): Response
    {
        return $this->render('type_probleme/show.html.twig', [
            'type_probleme' => $typeProbleme,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="type_probleme_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypeProbleme $typeProbleme): Response
    {
        $form = $this->createForm(TypeProblemeType::class, $typeProbleme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('type_probleme.succes','Modification effectuée avec succès');

            return $this->redirectToRoute('type_probleme_edit',array('id' => $typeProbleme->getId()));
        }

        return $this->render('type_probleme/edit.html.twig', [
            'type_probleme' => $typeProbleme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_probleme_delete", methods={"DELETE"})
     */
    public function delete(EntrepriseService $entrepriseService,Request $request, TypeProbleme $typeProbleme): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeProbleme->getId(), $request->request->get('_token'))) {
            $id= $typeProbleme->getId();
            $problemesysteme = $entrepriseService->problemesysteme($id);
            if(!empty($problemesysteme)){
                $this->addFlash('typeProbleme.suppression',' Vous ne pouvez pas supprimer cet élément; il est utilisé ailleur.');
                return $this->redirectToRoute('type_probleme_show',array('id' => $typeProbleme->getId()));
    
            }else{
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeProbleme);
            $entityManager->flush();
        }
    }
        return $this->redirectToRoute('type_probleme_index');
    }
}
