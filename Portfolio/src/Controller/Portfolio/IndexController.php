<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 19/02/2018
 * Time: 22:07
 */

namespace App\Controller\Portfolio;


use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    public function index() {
        return new Response("<html><body><h1>PAGE D'ACCUEIL</h1></body></html>");
    }

    /**
     * Page permettant d'afficher les articles d'une catégorie
     * @Route("/categorie/{libellecategorie}", name="index_categorie", methods={"GET"})
     * @param $libellecategorie
     * @return Response
     */
    public function categorie($libellecategorie = 'computing') {
        return new Response("<html><body><h1>PAGE CATEGORIE : $libellecategorie</h1></body></html>");
    }

}