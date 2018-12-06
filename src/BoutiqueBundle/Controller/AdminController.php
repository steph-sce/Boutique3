<?php

namespace BoutiqueBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundationn\Request;

class AdminController extends Controller
{
    //1: Récupérer les infos des produits
    //SELECT * FROM Produit
    public $produits = array(
        0 => array(
            'idProduit' => 1,
            'reference' => 'ABC',
            'categorie' => 'pantalon',
            'titre' => 'Super pantalon',
            'description' => 'Ce pantalon est idéal pour l\'été',
            'public' => 'm',
            'prix' => 30.50,
            'stock' => 150,
            'photo' => 'image2.jpg',
            'couleur' => 'blanc',
            'taille' => 'L',
        ),
        1 => array(
            'idProduit' => 2,
            'reference' => 'DEF',
            'categorie' => 'robe',
            'titre' => 'Super robe',
            'description' => 'Super petite robe',
            'public' => 'f',
            'prix' => 79.90,
            'stock' => 70,
            'photo' => 'image4.jpg',
            'couleur' => 'noir',
            'taille' => 'M',
        ),
        3 => array(
            'idProduit' => 3,
            'reference' => 'DEF',
            'categorie' => 'tshirt',
            'titre' => 'Super T-shirt',
            'description' => 'Super T-shirt blanc et rouge',
            'public' => 'm',
            'prix' => 19.70,
            'stock' => 40,
            'photo' => 'image5.jpg',
            'couleur' => 'blanc et rouge',
            'taille' => 'S',
        )
    );

    //2: Récupérer toutes les catégories
    //SELECT DISTINCT categorie FROM produit
    public $produit = array(
        0 => array(
            'idProduit' => 3,
            'reference' => 'DEF',
            'categorie' => 'pantalon',
            'titre' => 'Super ensemble',
            'description' => 'Super ensemble',
            'public' => 'f',
            'prix' => 50,
            'stock' => 10,
            'photo' => 'image1.jpg',
            'couleur' => 'bleu',
            'taille' => 'L',
        ),
    );

//1: Récupérer les infos des membres
    //SELECT * FROM membre
    public $membres = array(
        0 => array(
            'idMembre' => 1,
            'pseudo' => 'A.R',
            'password' => 'a.rebel',
            'nom' => 'Rebel',
            'prenom' => 'Aranud',
            'email' => 'a.rebel@gmail.com',
            'civilite' => 'm',
            'ville' => 'Colombes',
            'codePostal' => '92000',
            'adresse' => '1 rue du puit',
            'statut' => 0,
        ),
        1 => array(
            'idMembre' => 2,
            'pseudo' => 'J.D',
            'password' => 'j.doe',
            'nom' => 'Doe',
            'prenom' => 'John',
            'email' => 'j.doe@gmail.com',
            'civilite' => 'm',
            'ville' => 'Paris',
            'codePostal' => '75000',
            'adresse' => '28 rue de Montmartre',
            'statut' => 1,
        ),
        3 => array(
            'idMembre' => 3,
            'pseudo' => 'D.D',
            'password' => 'd.dupont',
            'nom' => 'Diane',
            'prenom' => 'Dupont',
            'email' => 'd.dupont@gmail.com',
            'civilite' => 'f',
            'ville' => 'Fontenay sous Bois',
            'codePostal' => '94000',
            'adresse' => '55 grande rue',
            'statut' => 0,
        ),
    );

    //2: Récupérer un membre
    //SELECT DISTINCT categorie FROM produit
    public $membre = array(
        0 => array(
            'idMembre' => 4,
            'pseudo' => 'S.S',
            'password' => 's.soucheyre',
            'nom' => 'Soucheyre',
            'prenom' => 'Stéphane',
            'email' => 's.soucheyre@gmail.com',
            'civilite' => 'm',
            'ville' => 'Chartres',
            'codePostal' => '28000',
            'adresse' => '76 rue de la mairie',
            'statut' => 1,
        ),
    );

    //1: Récupérer les infos des produits
    //SELECT * FROM Produit
    public $commandes = array(
        0 => array(
            'idCommande' => 1,
            'idMembre' => 2,
            'montant' => 100,
            'dateEnregistrement' => '01/01/2000',
            'etat' => '0',
        ),
        1 => array(
            'idCommande' => 2,
            'idMembre' => 3,
            'montant' => 90,
            'dateEnregistrement' => '02/02/2010',
            'etat' => 0,
        ),
        3 => array(
            'idCommande' => 3,
            'idMembre' => 1,
            'montant' => 80,
            'dateEnregistrement' => '03/03/2018',
            'etat' => 1,
        ),
    );

    //2: Récupérer toutes les catégories
    //SELECT DISTINCT categorie FROM produit
    public $commande = array(
        0 => array(
            'idCommande' => 1,
            'idMembre' => 'ABC',
            'montant' => 30,
            'dateEnregistrement' => '01/02/2003',
            'etat' => 0,
        ),
    );

    // PRODUIT

    /**
     * @Route("/admin/produit/show", name="produit_show")
     */
    public function produitShowAction()
    {
        $params = array(
            'produits' => $this->produits,
            'title' => 'produit_show',
            // 'css' => 'fichier.css',
            // 'js' => 'fichier.js'
        );

        return $this->render('@Boutique/Admin/produit_show.html.twig', $params);
    }

    /**
     * @Route("/admin/produit/delete/{id}", name="produit_delete")
     */
    public function produitDeleteAction($id)
    {
        return $this->render('@Boutique/Admin/produit_show.html.twig', $id);
    }

    /**
     * @Route("/admin/produit/update/{id}", name="produit_update")
     */
    public function produitUpdateAction($id)
    {
        return $this->render('@Boutique/Admin/produit_form.html.twig', $id);
    }

    /**
     * @Route("/admin/produit/add", name="produit_add")
     */
    public function produitAddAction()
    {
        return $this->render('@Boutique/Admin/produit_form.html.twig');
    }

    // MEMBRE

    /**
     * @Route("/admin/membre/show", name="membre_show")
     */
    public function membreShowAction()
    {
        $params = array(
            'membres' => $this->membres,
            'title' => 'membre_show',
            // 'css' => 'fichier.css',
            // 'js' => 'fichier.js'
        );

        return $this->render('@Boutique/Admin/membre_show.html.twig', $params);
    }

    /**
     * @Route("/admin/membre/profil/{id}", name="membre_profil")
     */
    public function membreProfilAction($id)
    {
        return $this->render('@Boutique/Admin/membre_profil.html.twig', $id);
    }

    /**
     * @Route("/admin/membre/delete/{id}", name="membre_delete")
     */
    public function membreDeleteAction($id)
    {
        return $this->render('@Boutique/Admin/membre_show.html.twig', $id);
    }

    /**
     * @Route("/admin/membre/update/{id}", name="membre_update")
     */
    public function membreUpdateAction()
    {
        return $this->render('@Boutique/Admin/membre_form.html.twig');
    }

    /**
     * @Route("/admin/membre/add", name="membre_add")
     */
    public function membreAddAction()
    {
        return $this->render('@Boutique/Admin/membre_form.html.twig');
    }

    // COMMANDE

    /**
     * @Route("/admin/commande/show", name="commande_show")
     */
    public function commandeShowAction()
    {
        $params = array(
            'commande' => $this->commandes,
            'title' => 'commande_show',
            // 'css' => 'fichier.css',
            // 'js' => 'fichier.js'
        );

        return $this->render('@Boutique/Admin/commande_show.html.twig', $params);
    }

    /**
     * @Route("/admin/commande/delete/{id}", name="commande_delete")
     */
    public function commandeDeleteAction($id)
    {
        return $this->render('@Boutique/Admin/commande_show.html.twig', $id);
    }

    /**
     * @Route("/admin/commande/update/{id}", name="commande_update")
     */
    public function commandeUpdateAction($id)
    {
        return $this->render('@Boutique/Admin/commande_form.html.twig', $id);
    }

    /**
     * @Route("/admin/commande/add", name="commande_add")
     */
    public function commandeAddAction()
    {
        return $this->render('@Boutique/Admin/commande_form.html.twig');
    }
}
