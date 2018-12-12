<?php

namespace BoutiqueBundle\Controller;

use BoutiqueBundle\Entity\Commande;
use BoutiqueBundle\Entity\Membre;
use BoutiqueBundle\Entity\Produit;
use BoutiqueBundle\Form\CommandeType;
use BoutiqueBundle\Form\MembreType;
use BoutiqueBundle\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
        $produit = removePhoto();
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
        $produit = $em->find(Produit::class, $id);
        $old_photo = $produit->getFile();
        $nom_photo = $produit->getPhoto();

        $form = $this->createForm(ProduitType::class, $produit);
        //3 - Récupérer les infos saisie et modifier l'entrée
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($produit);
            if ($produit->getFile() != null) {
                $produit->removePhoto();
                $produit->uploadPhoto();
            }
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'Le produit ' . $produit->getIdProduit() . ' a été modifié avec succès.');

            return $this->redirectToRoute('produit_show');
        }
        //4 - Afficher le formulaire dans la vue
        $params = array(
            'produitForm' => $form->createView(),
            'title' => 'Modifier le produit N° ' . $produit->getIdProduit(),
            'photo' => $nom_photo,
        );

        return $this->render('@Boutique/Admin/produit_form.html.twig', $params);
    }

    /**
     * @Route("/admin/produit/add/", name="produit_add")
     * Page qui permet de ajouter un produit
     */
    public function produitAddAction(Request $request)
    {
        //Doctrine travaillent avec des objets...pour insrer une entrée en BDD...Il faut un objet
        $produit = new Produit;

        $form = $this->createForm(ProduitType::class, $produit);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            //Ajoute un objet
            $em->persist($produit);
            $produit->uploadPhoto();
            //la function uploadPhoto() va récupérer le fichier uploadé dans le form sous forme d'un objet UploadedFile, va la renommer, va l'enregistrer sur le serveur et va affecter à la propriété de $produit le nouveau nom de la photo qui sera enregistré en BDD
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", 'Le produit ' . $produit->getTitre() . ' a bien été ajouté!');

            return $this->redirectToRoute('produit_show');
        }

        $params = array(
            'produitForm' => $form->createView(),
            'title' => 'Ajouter un produit',
        );

        return $this->render('@Boutique/Admin/produit_form.html.twig', $params);
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
        $repoMembre = $this->getDoctrine()->getRepository(Membre::class);
        $membre = $repoMembre->find($id);

        $params = array(
            'membre' => $membre,
            'title' => 'Fiche client ' . $membre->getPrenom() . '' . $membre->getNom()
        );

        return $this->render('@Boutique/Admin/membre_profil.html.twig', $params);
    }

    /**
     * @Route("/admin/membre/delete/{id}/", name="membre_delete")
     * Page qui supprime un membre
     */
    public function membreDeleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $membre = $em->find(Membre::class, $id);

        $em->remove($membre);
        $em->flush();

        $session = $request->getSession();
        $session->getFlashBag()->add("success", 'Le membre ' . $id . ' a bien été supprimé!');

        return $this->redirectToRoute('membre_show');
    }

    /**
     * @Route("/admin/membre/update/{id}/", name="membre_update")
     * Page qui affiche le template de modification d'un membre
     */
    public function membreUpdateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //1 - Récupérer l'objet $membre en fonction de l'ID
        $membre = $em->find(Membre::class, $id);
        //2 - Récupérer et hydrater le formulaire
        $form = $this->createForm(MembreType::class, $membre, array('admin' => array('admin' => true)));
        //3 - Récupérer les infos saisie et modifier l'entrée
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($membre);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'Le membre ' . $membre->getIdMembre() . ' a été modifié avec succès.');

            return $this->redirectToRoute('membre_show');
        }
        //4 - Afficher le formulaire dans la vue
        $params = array(
            'membreForm' => $form->createView(),
            'title' => 'Modifier le membre N° ' . $membre->getIdMembre(),
        );

        return $this->render('@Boutique/Admin/membre_form.html.twig', $params);
    }

    /**
     * @Route("/admin/membre/add/", name="membre_add")
     * Page qui ajoute un membre
     */
    public function membreAddAction(Request $request)
    {
        //Doctrine travaillent avec des objets...pour insrer une entrée en BDD...Il faut un objet
        $membre = new Membre;

        $form = $this->createForm(ProduitType::class, $produit);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            //Ajoute un objet
            $em->persist($membre);
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", 'Le membre ' . $produit->getTitre() . ' a bien été ajouté!');

            return $this->redirectToRoute('membre_show');
        }

        $params = array(
            'membreForm' => $form->createView(),
            'title' => 'Ajouter un membre',
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
    public function commandeDeleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->find(Commande::class, $id);

        $em->remove($commande);
        $em->flush();

        $session = $request->getSession();
        $session->getFlashBag()->add("success", 'La commande ' . $id . ' a bien été supprimé!');

        return $this->redirectToRoute('commande_show');
    }

    /**
     * @Route("/admin/commande/update/{id}/", name="commande_update")
     * Page qui modifie une commandedans un formulaire
     */
    public function commandeUpdateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //1 - Récupérer l'objet $membre en fonction de l'ID
        $commande = $em->find(Commande::class, $id);
        //2 - Récupérer et hydrater le formulaire
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($commande);
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", 'La commande ' . $commande->getIdCommande() . ' a bien été ajouté!');

            return $this->redirectToRoute('commande_show');
        }

        $params = array(
            'commandeForm' => $form->createView(),
            'title' => 'Modification commande ' . $id,
        );

        return $this->render('@Boutique/Admin/commande_form.html.twig', $params);
    }

    /**
     * @Route("/admin/commande/add/", name="commande_add")
     * Page qui ajoute une commande
     */
    public function commandeAddAction(Request $request)
    {
        $commande = new Commande;

        $form = $this->createForm(CommandeType::class, $commande);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            //Ajoute un objet
            $em->persist($commande);
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", 'Le commande ' . $commande->getIdMembre() . ' a bien été ajouté!');

            return $this->redirectToRoute('commande_show');
        }

        $params = array(
            'commandeForm' => $form->createView(),
            'title' => 'Ajouter une commande',
        );

        return $this->render('@Boutique/Admin/commande_form.html.twig', $params);
    }

}
