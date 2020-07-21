<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoriesController extends AbstractController
{

    public function main()
    {
        $em = $this->getDoctrine()->getManager(); 

        $dechetsCommuns= $em->getRepository(Categories::class)->findBy(["dechetCommun" => 1]); 
        $autresCategories= $em->getRepository(Categories::class)->findBy(["dechetCommun" => 0]); 

        return $this->render("categories/main.html.twig", 
            [ 
                "dechetsCommuns" => $dechetsCommuns,
                "autresCategories" => $autresCategories
            ]
        ); 
    }
}