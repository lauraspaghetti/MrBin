<?php

namespace App\Controller;
use App\Entity\Mairie;
use App\Form\MairieType; 
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MairieController extends AbstractController{

    public function showAll()
    {
        $em = $this->getDoctrine()->getManager(); 
        $allMairies= $em->getRepository(Mairie::class)->findAll();
        // die(var_dump($allAuteurs)); 
        return $this->render("mairie/showAll.html.twig", ["AllMairies" => $allMairies]); 

    }

    public function show($id)
    {
        $em = $this->getDoctrine()->getManager(); 

        $mairie = $em->getRepository(Mairie::class)->find($id); 

        if(!$mairie)
        {
            throw $this->createNotFoundException("impossible de trouver la mairie d'id : $id"); 
        }

        return $this->render('mairie/show.html.twig', ["mairie" => $mairie]); 
    }


    public function create(Request $request)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        $mairie = new Mairie();

        $form = $this->createForm(MairieType::class, $mairie); 

        $form->handleRequest($request);//Récupérer les données du formulaire
        if ($form->isSubmitted() && $form->isValid()){
            $entityManager= $this->getDoctrine()->getManager(); 
            $entityManager->persist($mairie); 
            $entityManager->flush(); 
            return $this->redirect($this->generateUrl('mrBin_mairie_showall'));
        }
 

        return $this->render('mairie/create.html.twig', [
            'form' => $form->createView(), 
        ]); 

       
    }

    public function update(Request $request, $id){

        $this->denyAccessUnlessGranted("ROLE_USER");
        $em = $this->getDoctrine()->getManager(); 

        $mairie = $em->getRepository(Mairie::class)->find($id); 

        if(!$mairie)
        {
           
            throw $this->createNotFoundException("impossible de trouver la mairie d'id : $id"); 

        }

        $form = $this->createForm(MairieType::class, $mairie);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $entityManager= $this->getDoctrine()->getManager(); 
            $entityManager->persist($mairie); 
            $entityManager->flush(); 
            return $this->redirect($this->generateUrl('mrBin_mairie_showall')); 

        }

        return $this->render('mairie/update.html.twig', ["form" => $form->createView(), ]); 
    }


    public function delete($id){

        $this->denyAccessUnlessGranted("ROLE_USER");
        $em = $this->getDoctrine()->getManager(); 

        $mairie = $em->getRepository(Mairie::class)->find($id); 

        if($mairie)
        {
            $em->remove($mairie); 
            $em->flush(); 

        }

        return $this->redirect($this->generateUrl('mrBin_mairie_showall')); 

    }
}