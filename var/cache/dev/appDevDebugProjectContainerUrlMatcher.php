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

        if (0 === strpos($pathinfo, '/eleve')) {
            // parametre_eleve
            if ('/eleve/parametre' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EleveController::acces_parameter',  '_route' => 'parametre_eleve',);
            }

            // prop_stage
            if ('/eleve/proposition_stage' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EleveController::prop_stage',  '_route' => 'prop_stage',);
            }

            // contact_eleve
            if ('/eleve/contact' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EleveController::acces_contact',  '_route' => 'contact_eleve',);
            }

            // creation_entreprise
            if ('/eleve/creer_etp' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EleveController::creer_etp',  '_route' => 'creation_entreprise',);
            }

            // information_etp
            if ('/eleve/info_etp' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EleveController::info_etp',  '_route' => 'information_etp',);
            }

            // homepage_eleve
            if ('/eleve' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\IndexController::indexEleve',  '_route' => 'homepage_eleve',);
            }

            // 404
            if (preg_match('#^/eleve/(?P<err>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '404')), array (  '_controller' => 'AppBundle\\Controller\\IndexController::error404',));
            }

        }

        elseif (0 === strpos($pathinfo, '/prof')) {
            // hoddmepage_prof
            if ('/prof' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\IndexController::indexProf',  '_route' => 'hoddmepage_prof',);
            }

            // parametre_prof
            if ('/prof/parametre' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::parametre_prof',  '_route' => 'parametre_prof',);
            }

            // contact_prof
            if ('/prof/contact' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::contact_prof',  '_route' => 'contact_prof',);
            }

            // convention
            if ('/prof/convention' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::convention',  '_route' => 'convention',);
            }

            // recherche_etp
            if ('/prof/recherche_etp' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::recherche_etp',  '_route' => 'recherche_etp',);
            }

            // liste eleves
            if ('/prof/eleves' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::liste_eleves',  '_route' => 'liste eleves',);
            }

            // validation eleves
            if ('/prof/validation' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfController::valid_inscr',  '_route' => 'validation eleves',);
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
