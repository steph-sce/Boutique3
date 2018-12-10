<?php

namespace BoutiqueBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MembreController extends Controller
{
    // profil/inscription/connexion

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

    public function inscriptionAction()
    {
        return $this->render('@Boutique/Membre/inscription.html.twig');
    }

    /**
     * @Route("/connexion/", name="connexion")
     */

    public function connexionAction()
    {
        return $this->render('@Boutique/Membre/connexion.html.twig');
    }
}
