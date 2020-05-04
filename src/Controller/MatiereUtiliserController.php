<?php

namespace App\Controller;

use App\Entity\MatiereUtiliser;
use App\Form\MatiereUtiliserType;
use App\Repository\MatiereUtiliserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Query\ManagerService;
use App\Service\Common\EntrepriseService;
use App\Repository\EtapeRepository;
use App\Repository\MatierePremiereRepository;

/**
 * @Route("/matiere/utiliser")
 */
class MatiereUtiliserController extends AbstractController
{
    /**
     * @Route("/", name="matiere_utiliser_index", methods={"GET"})
     */
    public function index(Request $request, MatiereUtiliserRepository $matiereUtiliserRepository, EntrepriseService $entrepriseService): Response
    {
        $id = $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach ($entreprises as $entreprise) {
            $donnes = $entreprise->getNom();
        }
        return $this->render('matiere_utiliser/index.html.twig', [
            'matiere_utilisers' => $matiereUtiliserRepository->findBy(array('page' => $id)), 'id' => $id, 'entreprise' => $donnes
        ]);
    }

    /**
     * @Route("/new", name="matiere_utiliser_new", methods={"GET","POST"})
     */
    public function new(Request $request, EtapeRepository $etapeRepository, MatierePremiereRepository $matierePremiereRepository, ManagerService $managerService, EntrepriseService $entrepriseService): Response
    {
        $id = $request->query->get('id');
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach ($entreprises as $entreprise) {
            $donnes = $entreprise->getNom();
        }
        $matiereUtiliser = new MatiereUtiliser();
        $matiere = $matierePremiereRepository->findAll();

        $etape = $etapeRepository->findBy(array('page' => $id));
        if ($request->getMethod() == 'POST') {
            $id = $request->query->get('id');
            $etape = $request->get('etape');
            $matieres = $request->get('role');

            $etapes = $etapeRepository->findOneBy(array('id' => $etape));

                $etap= $etapes->getNom();  
            if (!empty($matieres)) {

                for ($i = 0; $i < count($matieres); $i++) {
                    $matiere = $this->getDoctrine()->getRepository('App:MatierePremiere')->findOneBy(array('id' => $matieres[$i]));
                        $matier= $matiere->getNom();  
                      $etapeproduit = $entrepriseService->etapeproduit($etapes,$matieres[$i]);
                      if(!empty($etapeproduit)){
                        $this->addFlash('utiliser.erreur','la matiere '. $matier.' est déjà utilisee aucours de l\'etape  '.$etap);
                        return $this->redirectToRoute('produir_new', array('id' => $id)); 
                      }else{ 
                    $matiereUtiliser->setMatierepremiere($matiere);
                    $matiereUtiliser->setEtape($etapes);
                    $matiereUtiliser->setPage($id);
                    $managerService->Amaro($matiereUtiliser);
                    $matiereUtiliser = new MatiereUtiliser();
                }
            }
                $this->addFlash('matiere_utiliser.succes', 'Enregistrement effectué avec succès');

                return $this->redirectToRoute('matiere_utiliser_new', array('id' => $id));
            } else {
                $this->addFlash('matiere_utiliser.erreur', 'Enregistrement non effectué ');
                return $this->redirectToRoute('matiere_utiliser_new', array('id' => $id));
            }
        }

        return $this->render('matiere_utiliser/new.html.twig', [
            'matiere_utiliser' => $matiereUtiliser,
            'id' => $id, 'entreprise' => $donnes,'matieres'=>$matiere,'etapes'=>$etape
        ]);
    }

    /**
     * @Route("/{id}", name="matiere_utiliser_show", methods={"GET"})
     */
   

    public function show(MatiereUtiliser $matiereUtiliser,Request $request,EntrepriseService $entrepriseService): Response
    {
        $id= $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);
        
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('matiere_utiliser/show.html.twig', [
            'matiere_utiliser' => $matiereUtiliser,'ide'=>$id,'entreprise'=>$donnes
        ]);
    }
    /**
     * @Route("/{id}/edit", name="matiere_utiliser_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MatiereUtiliser $matiereUtiliser, EntrepriseService $entrepriseService): Response
    {
        $id = $request->query->get('ide');
        $entreprises = $entrepriseService->entreprisepage($id);

        foreach ($entreprises as $entreprise) {
            $donnes = $entreprise->getNom();
        }
        $form = $this->createForm(MatiereUtiliserType::class, $matiereUtiliser, ['identrprise' => $id]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $etapenom = $form['etape']->getData()->getNom();
            $etapeid = $form['etape']->getData()->getId();

            $matierepremierenom = $form['matierepremiere']->getData()->getConteneure();
            $matierepremiereid = $form['matierepremiere']->getData()->getId();
            $etapeproduit = $entrepriseService->etapeproduit($etapeid,$matierepremiereid);
            if(!empty($etapeproduit)){
              $this->addFlash('utiliser.erreur','la matiere '. $matierepremierenom.' est déjà utilisee aucours de l\'etape  '.$etapenom);
              return $this->redirectToRoute('matiere_utiliser_edit', array('id' => $matiereUtiliser->getId(), 'ide' => $id)); 
            }else{
            $matiereUtiliser->setPage($id);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('matiere_utiliser.succes', 'Modification effectuée avec succès');

            return $this->redirectToRoute('matiere_utiliser_edit', array('id' => $matiereUtiliser->getId(), 'ide' => $id));
        }
    }
        return $this->render('matiere_utiliser/edit.html.twig', [
            'matiere_utiliser' => $matiereUtiliser,
            'form' => $form->createView(), 'ide' => $id, 'entreprise' => $donnes
        ]);
    }

    /**
     * @Route("/{id}", name="matiere_utiliser_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MatiereUtiliser $matiereUtiliser): Response
    {
        if ($this->isCsrfTokenValid('delete' . $matiereUtiliser->getId(), $request->request->get('_token'))) {
            $entreprise= $matiereUtiliser->getPage();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($matiereUtiliser);
            $entityManager->flush();
        }

        return $this->redirectToRoute('matiere_utiliser_index',array('id'=> $entreprise));
    }
}
