<?php

namespace BoutiqueBundle\Controller;

use BoutiqueBundle\Entity\Produit;
use Symfony\Component\Routing\Annotation\Route;
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
        $repository = $this->get('doctrine')->getRepository(Produit::class);
        $produits = $repository->findAll();

        $params = array(
            'produits' => $produits,
            'categorie' => $produits,
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
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $article = $repository->findBy(['categorie' => $categorie]);

        $em = $this->getDoctrine()->getManager();

        //Methode 1 : CreateQuery()
        // $categories = $query->getQuery();
        $categories = $repository->findAllCategories2();

        //Methode 2 : QueryBuilder()
        //Batir une  requete en PHP:

        // $categories = $repository->findAllCategories();

        $params = array(
            'produits' => $article,
            'categorie' => $categories,
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
        //Methode 1 : Repository
        // $repository = $this->getDoctrine()->getRepository(Produit::class);
        // $produit = $repository->find($id);

        //Methode 2
        $em = $this->getDoctrine()->getManager();
        $produit = $em->find(Produit::class, $id);

        $params = array(
            'produits' => $produit,
            // 'categories' => $reference,
            'title' => $produit->getTitre(),
        );

        return $this->render('@Boutique/Produit/produit.html.twig', $params);
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
