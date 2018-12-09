<?php

namespace BoutiqueBundle\Controller;

use BoutiqueBundle\Entity\Produit;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends Controller
{
    /**
     * @Route("/", name="accueil")
     * Page qui affiche tout les produits
     */
    public function indexAction()
    {
        //1: Récupérer les infos des produits
        //SELECT * FROM Produit
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('BoutiqueBundle:Produit')->findAll();

        $params = array(
            'produits' => $produits,
            'references' => $produits,
            'title' => 'Page d\'accueil',
        );

        return $this->render('@Boutique/Produit/index.html.twig', $params);
    }

    /**
     * @Route("/categorie/{categorie}/", name="categorie")
     * Page qui affiche les produits d'une catégorie en particulier
     */
    public function categorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('BoutiqueBundle:Produit')->findBy(
            array(
                'categorie' => $categorie
            )
        );

        $params = array(
            'produits' => $article,
            // 'references' => $produit,
            'title' => 'Categorie: ' . $categorie,
        );

        return $this->render('@Boutique/Produit/index.html.twig', $params);
    }

    /**
     * @Route("/produit/{id}/", name="produit")
     * Page qui affiche un produit
     */
    public function produitAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('BoutiqueBundle:Produit')->find($id);

        $params = array(
            'produits' => $produit,
            // 'categories' => $reference,
            'title' => 'Produit: ' . $id,
        );

        return $this->render('@Boutique/Produit/produit.html.twig', $params);
        // //1 : Récupérer un produit grâce à son $id
        // // SELECT * FROM produit WHERE idProduit = $id
        // // Faux array avec un seul produit

        // //2 : Transmettre les données à une vue qui va être rendue.
        // // produit.html.twig = http://www.sharemycode.fr/produit

        // //3 : Transformer la vue HTML en TWIG (héritage et block et variable)

        // $produits = array(
        //     0 => array(
        //         'idProduit' => 1,
        //         'reference' => 'ABC',
        //         'categorie' => 'robe',
        //         'titre' => 'Super robe',
        //         'description' => 'Cette robe est idéal pour l\'été',
        //         'public' => 'm',
        //         'prix' => 25.90,
        //         'stock' => 150,
        //         'photo' => 'robe.jpg',
        //         'couleur' => 'rouge',
        //         'taille' => 'M',
        //     ),
        // );

        // //2: Récupérer toutes les catégories
        // //SELECT DISTINCT categorie FROM produit
        // $categories = array(
        //     0 => array(
        //         'categorie' => $id,
        //     ),
        // );

        // //3: Rend une vue (on transmet à la vue les infos)
        // $params = array(
        //     'produits' => $produits,
        //     'categories' => $categories,
        //     'title' => 'Produit : ' . $id,
        //     // 'css' => 'fichier.css',
        //     // 'js' => 'fichier.js'
        // );

        // return $this->render('@Boutique/Produit/produit.html.twig', $params);
    }

    /**
     * @Route("/resultats/", name="resultats")
     * Page résultat recherche
     * La terme de recherche sera récupérer en POST
     */
    public function resultatAction(Request $request)
    {
    }
}
