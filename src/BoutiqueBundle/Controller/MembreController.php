<?php

namespace BoutiqueBundle\Controller;

use BoutiqueBundle\Entity\Membre;
use BoutiqueBundle\Form\MembreType;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// use Symfony\Component\Form\Extension\Core\Type\FormType;
// use Symfony\Component\Form\Extension\Core\Type\TextType;
// use Symfony\Component\Form\Extension\Core\Type\PasswordType;
// use Symfony\Component\Form\Extension\Core\Type\EmailType;
// use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
// use Symfony\Component\Form\Extension\Core\Type\SubmitType;
// use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class MembreController extends Controller
{
    /**
     * @Route("/profil/", name="profil")
     */

    public function profilAction()
    {
        return $this->render('@Boutique/Membre/profil.html.twig');
    }

    /**
     * @Route("/inscription/", name="inscription")
     */

    public function inscriptionAction(Request $request)
    {
        $membre = new Membre;
        // $membre->setStatut('0');

        $form = $this->createForm(MembreType::class, $membre);

        // $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $membre);
        // //CreateBuilder attend deux infos : le type de formulaire et l'objet à hydrater

        // $formBuilder
        //     ->add('username', TextType::class)
        //     ->add('prenom', TextType::class)
        //     ->add('nom', TextType::class)
        //     ->add('password', PasswordType::class)
        //     ->add('civilite', ChoiceType::class, array(
        //         'choices' => array(
        //             'Homme' => 'm',
        //             'Femme' => 'f',
        //         ),
        //     ))
        //     ->add('adresse', TextType::class)
        //     ->add('ville', TextType::class)
        //     ->add('codePostal', IntegerType::class)
        //     ->add('email', EmailType::class)
        //     ->add('enregistrer', SubmitType::class);

        // $form = $formBuilder->getForm();
        //Apres avoir configuré notre formulaire on le récupère

        //Traitement des infos du formulaire
        $form->handleRequest($request);
        //Cette ligne permet de recuperer les infos saisies (en POST), et de les lier définitivement à notre objet $membre
        if($form-> isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($membre);
            $em->flush();

            $request->getSession()->getFlashBag()->add("success", 'Félicitations '.$membre->getUserName().' vous êtes enregistré !');

            return $this->redirectToRoute('accueil');
        }

        //Afficher la vue
        $params = array(
            'membreForm' => $form->createView(),
            'title' => 'Inscription',
        );

        return $this->render('@Boutique/Membre/inscription.html.twig', $params);
    }

    /**
     * @Route("/connexion/", name="connexion")
     */

    public function connexionAction()
    {
        return $this->render('@Boutique/Membre/connexion.html.twig');
    }
}
