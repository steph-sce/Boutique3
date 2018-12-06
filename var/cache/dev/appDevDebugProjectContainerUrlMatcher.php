<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/produit')) {
                // produit_show
                if ('/admin/produit/show' === $pathinfo) {
                    return array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitShowAction',  '_route' => 'produit_show',);
                }

                // produit_delete
                if (0 === strpos($pathinfo, '/admin/produit/delete') && preg_match('#^/admin/produit/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitDeleteAction',));
                }

                // produit_update
                if (0 === strpos($pathinfo, '/admin/produit/update') && preg_match('#^/admin/produit/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_update')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitUpdateAction',));
                }

                // produit_add
                if ('/admin/produit/add' === $pathinfo) {
                    return array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::produitAddAction',  '_route' => 'produit_add',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/membre')) {
                // membre_show
                if ('/admin/membre/show' === $pathinfo) {
                    return array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreShowAction',  '_route' => 'membre_show',);
                }

                // membre_profil
                if (0 === strpos($pathinfo, '/admin/membre/profil') && preg_match('#^/admin/membre/profil/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_profil')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreProfilAction',));
                }

                // membre_delete
                if (0 === strpos($pathinfo, '/admin/membre/delete') && preg_match('#^/admin/membre/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_delete')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreDeleteAction',));
                }

                // membre_update
                if (0 === strpos($pathinfo, '/admin/membre/update') && preg_match('#^/admin/membre/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_update')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreUpdateAction',));
                }

                // membre_add
                if ('/admin/membre/add' === $pathinfo) {
                    return array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::membreAddAction',  '_route' => 'membre_add',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/commande')) {
                // commande_show
                if ('/admin/commande/show' === $pathinfo) {
                    return array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeShowAction',  '_route' => 'commande_show',);
                }

                // commande_delete
                if (0 === strpos($pathinfo, '/admin/commande/delete') && preg_match('#^/admin/commande/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_delete')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeDeleteAction',));
                }

                // commande_update
                if (0 === strpos($pathinfo, '/admin/commande/update') && preg_match('#^/admin/commande/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_update')), array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeUpdateAction',));
                }

                // commande_add
                if ('/admin/commande/add' === $pathinfo) {
                    return array (  '_controller' => 'BoutiqueBundle\\Controller\\AdminController::commandeAddAction',  '_route' => 'commande_add',);
                }

            }

        }

        // accueil
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::indexAction',  '_route' => 'accueil',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_accueil;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'accueil'));
            }

            return $ret;
        }
        not_accueil:

        // categorie
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<categorie>[^/]++)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie')), array (  '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::categorieAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_categorie;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'categorie'));
            }

            return $ret;
        }
        not_categorie:

        // produit
        if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produit')), array (  '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::produitAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_produit;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produit'));
            }

            return $ret;
        }
        not_produit:

        // resultats
        if ('/resultats' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'BoutiqueBundle\\Controller\\ProduitController::resultatAction',  '_route' => 'resultats',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_resultats;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'resultats'));
            }

            return $ret;
        }
        not_resultats:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
