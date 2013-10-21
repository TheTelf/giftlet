<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        if (0 === strpos($pathinfo, '/log')) {
            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

        }

        // giftlet_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'giftlet_homepage');
            }

            return array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::indexAction',  '_route' => 'giftlet_homepage',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // giftlet_user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'giftlet_user');
                }

                return array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::indexAction',  '_route' => 'giftlet_user',);
            }

            // giftlet_user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'giftlet_user_show')), array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::showAction',));
            }

            // giftlet_user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::newAction',  '_route' => 'giftlet_user_new',);
            }

            // giftlet_user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_giftlet_user_create;
                }

                return array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::createAction',  '_route' => 'giftlet_user_create',);
            }
            not_giftlet_user_create:

            // giftlet_user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'giftlet_user_edit')), array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::editAction',));
            }

            // giftlet_user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_giftlet_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'giftlet_user_update')), array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::updateAction',));
            }
            not_giftlet_user_update:

            // giftlet_user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_giftlet_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'giftlet_user_delete')), array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::deleteAction',));
            }
            not_giftlet_user_delete:

        }

        if (0 === strpos($pathinfo, '/gift')) {
            // gift
            if (rtrim($pathinfo, '/') === '/gift') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gift');
                }

                return array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::indexAction',  '_route' => 'gift',);
            }

            // gift_show
            if (preg_match('#^/gift/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gift_show')), array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::showAction',));
            }

            // gift_new
            if ($pathinfo === '/gift/new') {
                return array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::newAction',  '_route' => 'gift_new',);
            }

            // gift_create
            if ($pathinfo === '/gift/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gift_create;
                }

                return array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::createAction',  '_route' => 'gift_create',);
            }
            not_gift_create:

            // gift_edit
            if (preg_match('#^/gift/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gift_edit')), array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::editAction',));
            }

            // gift_update
            if (preg_match('#^/gift/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_gift_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gift_update')), array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::updateAction',));
            }
            not_gift_update:

            // gift_delete
            if (preg_match('#^/gift/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_gift_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gift_delete')), array (  '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::deleteAction',));
            }
            not_gift_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
