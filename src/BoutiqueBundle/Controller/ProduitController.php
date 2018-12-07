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
        //1 Récupérer les produit correspondant à la categorie $categories
        //SELECT * FROM produit WHERE categorie = $categorie

        //2 Récupérer la liste des catégorie pour afficher le menu
        // SELECT DISTINCT categorie FROM produit

        //3 Transmettre les datas à une vue qui sera rendue

        // $produits = array(
        //     0 => array(
        //         'idProduit' => 1,
        //         'reference' => 'ABC',
        //         'categorie' => 't-shirt',
        //         'titre' => 'Super T-shirt',
        //         'description' => 'Ce t-shirt est idéal pour l\'été',
        //         'public' => 'm',
        //         'prix' => 25.90,
        //         'stock' => 150,
        //         'photo' => 'tshirt.jpg',
        //         'couleur' => 'rouge',
        //         'taille' => 'XL',
        //     ),
        // );

        // //2: Récupérer toutes les catégories
        // //SELECT DISTINCT categorie FROM produit
        // $categories = array(
        //     0 => array(
        //         'categorie' => $categorie,
        //     ),
        // );

        // //3: Rend une vue (on transmet à la vue les infos)
        // $params = array(
        //     'produits' => $produits,
        //     'categories' => $categories,
        //     'title' => 'categorie : '. $categorie,
        //     // 'css' => 'fichier.css',
        //     // 'js' => 'fichier.js'
        // );

        $em = $this->getDoctrine()->getManager();
        $reference = $em->getRepository('BoutiqueBundle:Produit')->findBy(array(
            'reference' => $categorie
        ));

        $params = array(
            'produits' => $reference,
            'references' => $reference,
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
        $produits = $em->getRepository('BoutiqueBundle:Produit')->find($id);

        $params = array(
            'produits' => $produits,
            'categories' => $produits,
            'title' => 'Page d\'accueil',
        );

        return $this->render('@Boutique/Produit/index.html.twig', $params);
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
