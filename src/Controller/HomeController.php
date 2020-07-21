<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\TypeDechet;
use App\Entity\Contact;
use App\Entity\JourRamassage;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request; 

use Symfony\Component\HttpFoundation\Response;#pour renvoyer du html 

class HomeController extends AbstractController
{
    public function main(Request $request)
    {    
        
        $em = $this->getDoctrine()->getManager(); 

     
        $today = new \DateTime("now") ;
        $jourSemaine = $today->format('N') ;

        $todayJourRamassage = $em->getRepository(JourRamassage::class)->findOneBy(["numeroJour" => $jourSemaine]);

        setlocale(LC_TIME, "fr_FR");
        $dateFr = strtolower(strftime ( "%A" )); 

        $contact = new Contact(); 

        $form = $this->createForm(ContactType::class, $contact);//Pour créer le formulaire

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $entityManager= $this->getDoctrine()->getManager(); 
            $entityManager->persist($contact); 
            $entityManager->flush(); 
            return $this->redirect($this->generateUrl('mrBin_home'));
        }
            
        return $this->render("home/main.html.twig", 
            [ 
                 "dateFr" =>  $dateFr, 
                 "todayJourRamassage" => $todayJourRamassage, 
                 'form' => $form->createView()
            ]); 
    }

    // http://localhost:8000/database HTTP GET => renvoie tout
    // http://localhost:8000/database/Plastique HTTP GET => renvoie tous les types de la catégorie Plastique

    public function getDechets() // AJOUTER dans la route un paramètre {categorie}
    {
        $em = $this->getDoctrine()->getManager() ;

            // récupération de TOUS les types de déchets
            $databaseTypeDechets    = $em->getRepository(TypeDechet::class)->findAll();
            //récupération de toutes les catégories de déchet
            $databaseCategories     = $em->getRepository(Categories::class)->findAll(); 

        $results = [];
        //Parcours la table récupérée avec doctrine pour récupérer les données de la table typeDechets
        foreach($databaseTypeDechets as $databasetypeDechet) {
            //Est-ce que le déchet recherché est un déchet commun ? 
            //Oui, donc l'url est celui de la page résultat de recherche pour déchets communs
            if($databasetypeDechet->getCategorie()->getDechetCommun() == true){
                $url = "/resultat/dechets-communs/".$databasetypeDechet->getId(); 
            }
            //Non, donc l'url passé à results est celui de la page résultat de recherche pour les déchets traitables en déchèterie
            else{

                $url= "/resultat/categorie-dechet/".$databasetypeDechet->getCategorie()->getId(); 
            }
            // equivalent à array_push
            //Insertion des données récupérées avec doctrine pour les mettre dans le tableau 
            $results[] = [ "name"       => $databasetypeDechet->getNomTypeDechet(),
                            "url"       => $url, 
                            // "categorie" =>$databasetypeDechet->getCategorie()->getNomCategorie(),
                        ]; 
        }

        //Parcours de la table categories
        foreach($databaseCategories as $dataBaseCategorie){

            if($dataBaseCategorie->getDechetCommun() == true){
                $url = "/categories";
            }
            //Non, donc l'url passé à results est celui de la page résultat de recherche pour les déchets traitables en déchèterie
            else{

                $url= "/resultat/categorie-dechet/".$dataBaseCategorie->getId(); 
            }
            // equivalent à array_push
            //Insertion des données récupérées avec doctrine pour les mettre dans le tableau 
            $results[] = [ "name" => $dataBaseCategorie->getNomCategorie(),
                            "url" => $url,
                        ];
        }

        //var_dump($results); 
        
        //json_encode(['databaseAuteurs' => $databaseAuteurs]); 
        //Renvoi du tableau avec la méthode JSON pour les convertir au format JSON 
       return new JsonResponse($results); 

    }

}
