<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'giftlet_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'giftlet_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),),
        'giftlet_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),),
        'giftlet_user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),),
        'giftlet_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/create',    ),  ),  4 =>   array (  ),),
        'giftlet_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),),
        'giftlet_user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),),
        'giftlet_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),),
        'gift' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gift/',    ),  ),  4 =>   array (  ),),
        'gift_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gift',    ),  ),  4 =>   array (  ),),
        'gift_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gift/new',    ),  ),  4 =>   array (  ),),
        'gift_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gift/create',    ),  ),  4 =>   array (  ),),
        'gift_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gift',    ),  ),  4 =>   array (  ),),
        'gift_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gift',    ),  ),  4 =>   array (  ),),
        'gift_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'giftlet\\giftletBundle\\Controller\\GiftController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gift',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
