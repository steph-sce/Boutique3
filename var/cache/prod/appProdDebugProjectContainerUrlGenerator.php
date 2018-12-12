<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitShowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produit/show/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produit/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitUpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produit/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produit/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'membre_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreShowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/membre/show/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'membre_profil' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreProfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/membre/profil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'membre_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/membre/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'membre_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreUpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/membre/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'membre_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/membre/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeShowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/commande/show/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/commande/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeUpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/commande/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/commande/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\MembreController::profilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profil/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\MembreController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\MembreController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie' => array (  0 =>   array (    0 => 'categorie',  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::categorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categorie',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::produitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resultats' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::resultatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resultats/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
