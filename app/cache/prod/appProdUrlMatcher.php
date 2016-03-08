<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/menu')) {
            // menu_homepage
            if ($pathinfo === '/menu/index') {
                return array (  '_controller' => 'MenuBundle\\Controller\\DefaultController::menuAction',  '_route' => 'menu_homepage',);
            }

            // menu_regal
            if ($pathinfo === '/menu/regal') {
                return array (  '_controller' => 'MenuBundle\\Controller\\DefaultController::regalAction',  '_route' => 'menu_regal',);
            }

            // menu_ilot
            if ($pathinfo === '/menu/ilot') {
                return array (  '_controller' => 'MenuBundle\\Controller\\DefaultController::ilotAction',  '_route' => 'menu_ilot',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
