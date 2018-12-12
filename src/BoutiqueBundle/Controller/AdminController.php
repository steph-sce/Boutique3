<?php

namespace BoutiqueBundle\Controller;

use BoutiqueBundle\Entity\Commande;
use BoutiqueBundle\Entity\Membre;
use BoutiqueBundle\Entity\Produit;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
            'title' => 'produit_show',
        );

        return $this->render('@Boutique/Admin/produit_show.html.twig', $params);
    }

    /**
     * @Route("/admin/produit/delete/{id}/", name="produit_delete")
     * Page qui permet de supprimer un produit
     */
    public function produitDeleteAction($id, Request $request)
    {
        //Pour supprimer une entrer, comme doctrine travaille avec des objets
        $em = $this->getDoctrine()->getManager();
        $produit = $em->find(Produit::class, $id);

        //On peut le supprimer via le manager
        $em->remove($produit);
        //remove prepare la suppression
        $em->flush();
        //fluh eécute les actions qui étaient préparée

        $session = $request->getSession();
        $session->getFlashBag()->add("success", 'Le produit ' . $id . ' a bien été supprimé!');

        return $this->redirectToRoute('produit_show');
    }

    /**
     * @Route("/admin/produit/update/{id}/", name="produit_update")
     * Page qui permet de modifier un produit
     */
    public function produitUpdateAction($id, Request $request)
    {
        //comme doctrine travail avec des objets, il faut recuperer l'objet en question
        $em = $this->getDoctrine()->getManager();
        $produit = $em -> find(Produit::class, $id);

        $produit->setReference('nouvelle reference');

        $em->persist($produit);
        $em->flush();

        $request->getSession()->getFlashBag()->add("success", 'Le produit ' . $produit->getTitre() . ' a bien été modifié!');

        return $this->redirectToRoute('produit_show');
    }

    /**
     * @Route("/admin/produit/add/", name="produit_add")
     * Page qui permet de ajouter un produit
     */
    public function produitAddAction(Request $request)
    {
        //Doctrine travaillent avec des objets...pour insrer une entrée en BDD...Il faut un objet
        $produit = new Produit;

        $produit
            ->setReference('ABC')
            ->setCategorie('Tshirt')
            ->setTitre('Super Tshirt')
            ->setPublic('m')
            ->setTaille('L')
            ->setCouleur('rouge')
            ->setPrix(12.45)
            ->setStock(150)
            ->setDescription('Super tshirt pour l\'été!')
            ->setPhoto('produit5.jpg');

        $em = $this->getDoctrine()->getManager();

        //Ajoute un objet
        $em->persist($produit);
        $produit->setReference('BCD');
        $em->flush();

        $request->getSession()->getFlashBag()->add("success", 'Le produit ' . $produit->getTitre() . ' a bien été ajouté!');

        return $this->redirectToRoute('produit_show');
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
            'title' => 'membre_show',
        );

        return $this->render('@Boutique/Admin/membre_show.html.twig', $params);
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
            'title' => 'membre_profil',
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
            'title' => 'Modifier un membre.',
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
            'title' => 'Ajouter un membre.',
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
            'title' => 'Commandes',
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

        $params = array(
            'commande' => $commande,
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
