<?php

namespace App\Controller;

use App\Entity\Contenant;
use App\Form\ContenantType; 
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContenantController extends AbstractController
{
    public function showAll()
    {
        $em = $this->getDoctrine()->getManager(); 
        $allContenants= $em->getRepository(Contenant::class)->findAll();
        // die(var_dump($allAuteurs)); 
        return $this->render("contenant/showAll.html.twig", ["AllContenants" => $allContenants]); 

    }

    public function show($id)
    {
        $em = $this->getDoctrine()->getManager(); 

        $contenant = $em->getRepository(Contenant::class)->find($id); 

        if(!$contenant)
        {
            throw $this->createNotFoundException("impossible de trouver le contenant d'id : $id"); 
        }

        return $this->render('contenant/show.html.twig', ["contenant" => $contenant]); 
    }

    public function create(Request $request)
    {
        // $this->denyAccessUnlessGranted("ROLE_USER");

        $contenant = new Contenant();

        $form = $this->createForm(ContenantType::class, $contenant);//Pour créer le formulaire

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $entityManager= $this->getDoctrine()->getManager(); 
            $entityManager->persist($contenant); 
            $entityManager->flush(); 
            return $this->redirect($this->generateUrl('mrBin_contenant_showall'));
        }

        return $this->render('contenant/create.html.twig', [
            'form' => $form->createView(), 
        ]); 

    }

 
}