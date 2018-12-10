<?php

namespace BoutiqueBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use BoutiqueBundle\Entity\Membre;
use BoutiqueBundle\Entity\Produit;
use BoutiqueBundle\Entity\Commande;

class AdminController extends Controller
{
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
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $produits = $repository->findAll();

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
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $produit = $repository->findBy(['idProduit' => $id]);

        $params = array (
            'produits' => $produit
        );

        return $this->render('@Boutique/Admin/produit_form.html.twig', $params);
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
        $repository = $this->getDoctrine()->getRepository(Membre::class);
        $membres = $repository->findAll();

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
        $repository = $this->getDoctrine()->getRepository(Membre::class);
        $membre = $repository->findBy(['idMembre' => $id]);

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
        $repository = $this->getDoctrine()->getRepository(Membre::class);
        $membre = $repository->find($id);

        $params = array(
            'membre' => $membre,
            'title' => 'Modifier un membre.'
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
        $repository = $this->getDoctrine()->getRepository(Commande::class);
        $commandes = $repository->findAll();

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
        $repository = $this->getDoctrine()->getRepository(Commande::class);
        $commande = $repository->findBy(['idCommande' => $id]);

        $params = array (
            'commande' => $commande
        );

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
