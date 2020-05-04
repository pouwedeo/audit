<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Repository\EntrepriseRepository;
use App\Repository\EquipeRepository;
use App\Service\Query\ManagerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Common\EntrepriseService;


class AccueilController extends AbstractController
{
     /**
     * @Route("/liste", name="accueil_liste", methods={"GET"})
     */
    public function liste(EntrepriseRepository $entrepriseRepository): Response
    {
/*         $donne = $entrepriseService->entreprisepage($id);
 */
        return $this->render('accueil/liste.html.twig', [
            'entreprises' => $entrepriseRepository->findAll()
         ]);
    }
      /**
     * @Route("/inter", name="inter_liste", methods={"GET"})
     */
    public function inter(EntrepriseRepository $entrepriseRepository,Request $request,EntrepriseService $entrepriseService): Response
    {
    
        $id= $request->query->get('id');
        /* var_dump($id);exit(); */
        $donne = $entrepriseService->entreprisepage($id);
        $nombreequipe = $entrepriseService->nombreequipe($id);
        $nombrepersonnel = $entrepriseService->nombrepersonnel($id);

/*         var_dump($donne);exit();
 */        return $this->render('accueil/page_entreprise.html.twig',['entreprisepages'=> $donne,'id'=>$id,
                   'nombrepersonnel'=>$nombrepersonnel,'nombreequipe'=>$nombreequipe]);
    }

     /**
     * @Route("/selection", name="selection_liste", methods={"GET"})
     */
    public function selection(Request $request,EntrepriseService $equipeRepository,EntrepriseService $entrepriseService): Response
    {        $id= $request->query->get('id');
        $equipe = $equipeRepository->entrepriseequipe($id);
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('equipe/liste_equipe.html.twig', [
            'equipes' =>  $equipe,'id'=>$id,'entreprise'=>$donnes
       ]);
    }
     /**
     * @Route("/selectionproduit", name="selectionproduit_liste", methods={"GET"})
     */

    public function selectionproduit(Request $request,EntrepriseService $equipeRepository,EntrepriseService $entrepriseService): Response
    {        $id= $request->query->get('id');
        $equipe = $equipeRepository->entrepriseequipe($id);
        $entreprises = $entrepriseService->entreprisepage($id);
        foreach($entreprises as $entreprise){
            $donnes=$entreprise->getNom();
        }
        return $this->render('equipe/liste_production.html.twig', [
            'equipes' => $equipe,'id'=>$id,'entreprise'=>$donnes
        ]);
    }

}
