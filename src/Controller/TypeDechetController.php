<?php

namespace App\Controller;

use App\Entity\TypeDechet;
use App\Form\TypeDechetType; 
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TypeDechetController extends AbstractController
{

    public function showAll()
    {
        $em = $this->getDoctrine()->getManager(); 
        $allTypeDechets= $em->getRepository(TypeDechet::class)->findAll();
        // die(var_dump($allAuteurs)); 
        return $this->render("typeDechet/showAll.html.twig", ["AllTypeDechets" => $allTypeDechets]); 

    }

    public function show($id)
    {
        $em = $this->getDoctrine()->getManager(); 

        $typeDechet = $em->getRepository(TypeDechet::class)->find($id); 

        if(!$typeDechet)
        {
            throw $this->createNotFoundException("impossible de trouver le déchet d'id : $id"); 
        }

        return $this->render('typeDechet/show.html.twig', ["typeDechet" => $typeDechet]); 
    }


    public function create(Request $request)
    {
        // $this->denyAccessUnlessGranted("ROLE_USER");

        $typeDechet = new TypeDechet();

        $form = $this->createForm(TypeDechetType::class, $typeDechet);//Pour créer le formulaire

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $entityManager= $this->getDoctrine()->getManager(); 
            $entityManager->persist($typeDechet); 
            $entityManager->flush(); 
            return $this->redirect($this->generateUrl('mrBin_typeDechet_showall'));
        }

        return $this->render('typeDechet/create.html.twig', [
            'form' => $form->createView(), 
        ]); 

    }
 

    public function update(Request $request, $id){

        $this->denyAccessUnlessGranted("ROLE_USER");
        $em = $this->getDoctrine()->getManager(); 

        $typeDechet = $em->getRepository(TypeDechet::class)->find($id); 

        if(!$typeDechet)
        {
           
            throw $this->createNotFoundException("impossible de trouver l'établissement d'id : $id"); 

        }

        $form = $this->createForm(TypeDechetType::class, $typeDechet);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $entityManager= $this->getDoctrine()->getManager(); 
            $entityManager->persist($typeDechet); 
            $entityManager->flush(); 
            return $this->redirect($this->generateUrl('mrBin_typeDechet_showall')); 

        }

        return $this->render('typeDechet/update.html.twig', ["form" => $form->createView(), ]); 
    }
        
    public function delete($id){

        $this->denyAccessUnlessGranted("ROLE_USER");
        $em = $this->getDoctrine()->getManager(); 

        $typeDechet = $em->getRepository(TypeDechet::class)->find($id); 

        if($typeDechet)
        {
            $em->remove($typeDechet); 
            $em->flush(); 

        }

        return $this->redirect($this->generateUrl('mrBin_typeDechet_showall')); 

    }


}