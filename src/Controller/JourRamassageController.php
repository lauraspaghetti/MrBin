<?php

namespace App\Controller;

use App\Entity\JourRamassage;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class JourRamassageController extends AbstractController
{
    public function showAll()
    {
        $em = $this->getDoctrine()->getManager(); 
        $allJoursRamassage= $em->getRepository(JourRamassage::class)->findAll();
        // die(var_dump($allAuteurs)); 
        return $this->render("jourRamassage/showAll.html.twig", ["AllJoursRamassage" => $allJoursRamassage]); 

    }

    public function show($id)
    {
        $em = $this->getDoctrine()->getManager(); 

        $jourRamassage = $em->getRepository(JourRamassage::class)->find($id); 

        if(!$jourRamassage)
        {
            throw $this->createNotFoundException("impossible de trouver l'auteur d'id : $id"); 
        }

        return $this->render('jourRamassage/show.html.twig', ["jourRamassage" => $jourRamassage]); 
    }


}