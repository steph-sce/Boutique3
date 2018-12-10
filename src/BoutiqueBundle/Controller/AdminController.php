<?php

namespace BoutiqueBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use BoutiqueBundle\Entity\Membre;
use BoutiqueBundle\Entity\Produit;

class AdminController extends Controller
{
//     //1: Récupérer les infos des produits
//     //SELECT * FROM Produit
//     public $produits = array(
//         0 => array(
//             'idProduit' => 1,
//             'reference' => 'ABC',
//             'categorie' => 'pantalon',
//             'titre' => 'Super pantalon',
//             'description' => 'Ce pantalon est idéal pour l\'été',
//             'public' => 'm',
//             'prix' => 30.50,
//             'stock' => 150,
//             'photo' => 'image2.jpg',
//             'couleur' => 'blanc',
//             'taille' => 'L',
//         ),
//         1 => array(
//             'idProduit' => 2,
//             'reference' => 'DEF',
//             'categorie' => 'robe',
//             'titre' => 'Super robe',
//             'description' => 'Super petite robe',
//             'public' => 'f',
//             'prix' => 79.90,
//             'stock' => 70,
//             'photo' => 'image4.jpg',
//             'couleur' => 'noir',
//             'taille' => 'M',
//         ),
//         3 => array(
//             'idProduit' => 3,
//             'reference' => 'DEF',
//             'categorie' => 'tshirt',
//             'titre' => 'Super T-shirt',
//             'description' => 'Super T-shirt blanc et rouge',
//             'public' => 'm',
//             'prix' => 19.70,
//             'stock' => 40,
//             'photo' => 'image5.jpg',
//             'couleur' => 'blanc et rouge',
//             'taille' => 'S',
//         )
//     );

//     //2: Récupérer toutes les catégories
//     //SELECT DISTINCT categorie FROM produit
//     public $produit = array(
//         0 => array(
//             'idProduit' => 3,
//             'reference' => 'DEF',
//             'categorie' => 'pantalon',
//             'titre' => 'Super ensemble',
//             'description' => 'Super ensemble',
//             'public' => 'f',
//             'prix' => 50,
//             'stock' => 10,
//             'photo' => 'image1.jpg',
//             'couleur' => 'bleu',
//             'taille' => 'L',
//         ),
//     );

// //1: Récupérer les infos des membres
//     //SELECT * FROM membre
//     public $membres = array(
//         0 => array(
//             'idMembre' => 1,
//             'pseudo' => 'A.R',
//             'password' => 'a.rebel',
//             'nom' => 'Rebel',
//             'prenom' => 'Aranud',
//             'email' => 'a.rebel@gmail.com',
//             'civilite' => 'm',
//             'ville' => 'Colombes',
//             'codePostal' => '92000',
//             'adresse' => '1 rue du puit',
//             'statut' => 0,
//         ),
//         1 => array(
//             'idMembre' => 2,
//             'pseudo' => 'J.D',
//             'password' => 'j.doe',
//             'nom' => 'Doe',
//             'prenom' => 'John',
//             'email' => 'j.doe@gmail.com',
//             'civilite' => 'm',
//             'ville' => 'Paris',
//             'codePostal' => '75000',
//             'adresse' => '28 rue de Montmartre',
//             'statut' => 1,
//         ),
//         3 => array(
//             'idMembre' => 3,
//             'pseudo' => 'D.D',
//             'password' => 'd.dupont',
//             'nom' => 'Diane',
//             'prenom' => 'Dupont',
//             'email' => 'd.dupont@gmail.com',
//             'civilite' => 'f',
//             'ville' => 'Fontenay sous Bois',
//             'codePostal' => '94000',
//             'adresse' => '55 grande rue',
//             'statut' => 0,
//         ),
//     );

//     //2: Récupérer un membre
//     //SELECT DISTINCT categorie FROM produit
//     public $membre = array(
//         0 => array(
//             'idMembre' => 4,
//             'pseudo' => 'S.S',
//             'password' => 's.soucheyre',
//             'nom' => 'Soucheyre',
//             'prenom' => 'Stéphane',
//             'email' => 's.soucheyre@gmail.com',
//             'civilite' => 'm',
//             'ville' => 'Chartres',
//             'codePostal' => '28000',
//             'adresse' => '76 rue de la mairie',
//             'statut' => 1,
//         ),
//     );

//     //1: Récupérer les infos des produits
//     //SELECT * FROM Produit
//     public $commandes = array(
//         0 => array(
//             'idCommande' => 1,
//             'idMembre' => 2,
//             'montant' => 100,
//             'dateEnregistrement' => '01/01/2000',
//             'etat' => '0',
//         ),
//         1 => array(
//             'idCommande' => 2,
//             'idMembre' => 3,
//             'montant' => 90,
//             'dateEnregistrement' => '02/02/2010',
//             'etat' => 0,
//         ),
//         3 => array(
//             'idCommande' => 3,
//             'idMembre' => 1,
//             'montant' => 80,
//             'dateEnregistrement' => '03/03/2018',
//             'etat' => 1,
//         ),
//     );

//     //2: Récupérer toutes les catégories
//     //SELECT DISTINCT categorie FROM produit
//     public $commande = array(
//         0 => array(
//             'idCommande' => 1,
//             'idMembre' => 'ABC',
//             'montant' => 30,
//             'dateEnregistrement' => '01/02/2003',
//             'etat' => 0,
//         ),
//     );

    //ADMIN
    /**
     * @Route("/login/", name="login")
     */
    public function loginAction()
    {
        return $this->render('@Boutique/Admin/login.html.twig');
    }

    // PRODUIT

    /**
     * @Route("/admin/produit/show/", name="produit_show")
     * Page qui affiche tous les produits sous forme d'un tableau
     */
    public function produitShowAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('BoutiqueBundle:Produit')->findAll();

        $params = array(
            'produits' => $produits,
            'title' => 'produit_show'
        );

        return $this->render('@Boutique/Admin/produit_show.html.twig', $params);
    }

    /**
     * @Route("/admin/produit/delete/{id}/", name="produit_delete")
     * Page qui permet de supprimer un produit 
     */
    public function produitDeleteAction($id)
    {
        return $this->redirectToRoute('produit_show');
    }

    /**
     * @Route("/admin/produit/update/{id}/", name="produit_update")
     * Page qui permet de modifier un produit 
     */
    public function produitUpdateAction($id)
    {
        return $this->render('@Boutique/Admin/produit_form.html.twig', $id);
    }

    /**
     * @Route("/admin/produit/add/", name="produit_add")
     * Page qui permet de ajouter un produit 
     */
    public function produitAddAction()
    {
        return $this->render('@Boutique/Admin/produit_form.html.twig');
    }

    // MEMBRE

    /**
     * @Route("/admin/membre/show/", name="membre_show")
     * Page qui affiche tous les membres dans un tableau
     */
    public function membreShowAction()
    {
        $em = $this->getDoctrine()->getManager();
        $membres = $em->getRepository('BoutiqueBundle:Membre')->findAll();

        $params = array(
            'membres' => $membres,
            'title' => 'membre_show'
        );

        return new Response($this->render('@Boutique/Admin/membre_show.html.twig', $params));
    }

    /**
     * @Route("/admin/membre/profil/{id}/", name="membre_profil")
     * Page qui affiche le profil d'un membre dans un tableau
     */
    public function membreProfilAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('BoutiqueBundle:Membre')->findBy(
            array(
                'idMembre' => $id
            )
        );

        $params = array(
            'membres' => $membre,
            'title' => 'membre_profil'
        );


        return new Response($this->render('@Boutique/Admin/membre_show.html.twig', $params));
    }

    /**
     * @Route("/admin/membre/delete/{id}/", name="membre_delete")
     * Page qui supprime un membre
     */
    public function membreDeleteAction($id)
    {
        return $this->redirectToRoute('membre_show');
    }

    /**
     * @Route("/admin/membre/update/{id}/", name="membre_update")
     * Page qui affiche le template de modification d'un membre
     */
    public function membreUpdateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('BoutiqueBundle:Membre')->find($id);

        $params = array(
            'membre' => $membre,
            'title' => 'Modifier un membre.',
            'disable' => 0
        );

        return $this->render('@Boutique/Admin/membre_form.html.twig', $params);
    }

    /**
     * @Route("/admin/membre/add/", name="membre_add")
     * Page qui ajoute un membre
     */
    public function membreAddAction()
    {
        $params = array(
            'title' => 'Ajouter un membre.'
        );

        return $this->render('@Boutique/Admin/membre_form.html.twig', $params);
    }

    // COMMANDE

    /**
     * @Route("/admin/commande/show/", name="commande_show")
     * Page qui affiche toutes les commandes dans un tableau
     */
    public function commandeShowAction()
    {
        $em = $this->getDoctrine()->getManager();
        $commandes = $em->getRepository('BoutiqueBundle:Commande')->findAll();

        $params = array(
            'commandes' => $commandes,
            'title' => 'Commandes'
        );

        return $this->render('@Boutique/Admin/commande_show.html.twig', $params);
    }

    /**
     * @Route("/admin/commande/delete/{id}/", name="commande_delete")
     * Page qui supprime une commande
     */
    public function commandeDeleteAction($id)
    {
        return $this->redirectToRoute('commande_show');
    }

    /**
     * @Route("/admin/commande/update/{id}/", name="commande_update")
     * Page qui modifie une commandedans un formulaire
     */
    public function commandeUpdateAction($id)
    {
        return $this->render('@Boutique/Admin/commande_form.html.twig');
    }

    /**
     * @Route("/admin/commande/add/", name="commande_add")
     * Page qui ajoute une commande
     */
    public function commandeAddAction()
    {
        return $this->render('@Boutique/Admin/commande_form.html.twig');
    }
}
