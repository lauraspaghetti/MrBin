<?php

namespace App\Controller;

use App\Entity\Etablissement;
use App\Form\EtablissementType; 
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EtablissementController extends AbstractController
{

    public function showAll()
    {
        $em = $this->getDoctrine()->getManager(); 
        $allEtablissements= $em->getRepository(Etablissement::class)->findAll();
        // die(var_dump($allAuteurs)); 
        return $this->render("etablissement/showAll.html.twig", ["AllEtablissements" => $allEtablissements]); 

    }

    public function show($id)
    {
        $em = $this->getDoctrine()->getManager(); 

        $etablissement = $em->getRepository(Etablissement::class)->find($id); 

        if(!$etablissement)
        {
            throw $this->createNotFoundException("impossible de trouver l'auteur d'id : $id"); 
        }

        return $this->render('etablissement/show.html.twig', ["etablissement" => $etablissement]); 
    }

    public function create(Request $request)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        $etablissement = new Etablissement();

        $form = $this->createForm(EtablissementType::class, $etablissement);//Pour créer le formulaire

        $form->handleRequest($request);//Récupérer les données du formulaire
        if ($form->isSubmitted() && $form->isValid()){
            // exit("l'établisement :".$etablissement->getNomEtablissement().$etablissement->getTypeEtablissement()." est valide"); 
            $entityManager= $this->getDoctrine()->getManager(); 
            $entityManager->persist($etablissement); 
            $entityManager->flush(); 
            return $this->redirect($this->generateUrl('mrBin_etablissement_showall'));
        }
 

        return $this->render('etablissement/create.html.twig', [
            'form' => $form->createView(), 
        ]); 

       
    }

    public function update(Request $request, $id){

        $this->denyAccessUnlessGranted("ROLE_USER");
        $em = $this->getDoctrine()->getManager(); 

        $etablissement = $em->getRepository(Etablissement::class)->find($id); 

        if(!$etablissement)
        {
           
            throw $this->createNotFoundException("impossible de trouver l'établissement d'id : $id"); 

        }

        $form = $this->createForm(EtablissementType::class, $etablissement);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $entityManager= $this->getDoctrine()->getManager(); 
            $entityManager->persist($etablissement); 
            $entityManager->flush(); 
            return $this->redirect($this->generateUrl('mrBin_etablissement_showall')); 

        }

        return $this->render('etablissement/update.html.twig', ["form" => $form->createView(), ]); 
    }


    public function delete($id){

        $this->denyAccessUnlessGranted("ROLE_USER");
        $em = $this->getDoctrine()->getManager(); 

        $etablissement = $em->getRepository(Etablissement::class)->find($id); 

        if($etablissement)
        {
            $em->remove($etablissement); 
            $em->flush(); 

        }

        return $this->redirect($this->generateUrl('mrBin_etablissement_showall')); 

    }
}
