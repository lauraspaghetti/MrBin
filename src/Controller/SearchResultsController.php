<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Etablissement;
use App\Entity\TypeDechet;

class SearchResultsController extends AbstractController{

    public function resultatDechetCommun($id){

        $em=$this->getDoctrine()->getManager(); 
        $typeDechet=$em->getRepository(TypeDechet::class)->find($id); 

        // $allCategories = $em->getRepository(Categories::class)->findBy(
        //     [
        //         "dechetCommun" => 1,
        //     ],

        if(!$typeDechet)
        {
            throw $this->createNotFoundException("impossible de trouver ce déchet : $id"); 
        }


        return $this->render("searchResults/dechetsCommuns.html.twig",
        [
            "typeDechet"  => $typeDechet
                    
        ]); 
    }

    public function resultatCategorieDecheterie($id){

        $em = $this->getDoctrine()->getManager(); 
        $categorieDechet =  $em->getRepository(Categories::class)->find($id); 

        return $this->render("searchResults/dechetsDecheterie.html.twig", 
            [ 
                 "categorieDechet" => $categorieDechet,
            ]); 

    }

    public function detailRecherche($id){

        $em = $this->getDoctrine()->getManager(); 
        $etablissement = $em->getRepository(Etablissement::class)->find($id); 

        if(!$etablissement)
        {
            throw $this->createNotFoundException("impossible de trouver cet établissement : $id"); 
        }

        return $this->render('searchResults/detailRecherche.html.twig', ["etablissement" => $etablissement]); 
    }


}