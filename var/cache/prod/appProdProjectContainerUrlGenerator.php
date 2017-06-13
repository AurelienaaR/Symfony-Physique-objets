<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'sitephys_physmvc_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_presentation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::presentationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/presentation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_topic' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::topAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/topic/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_symbolization' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::symAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/symbolization/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_evaluation' => array (  0 =>   array (    0 => 'idTopic',  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::evalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTopic',    ),    1 =>     array (      0 => 'text',      1 => '/evaluation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_phys_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/phys',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_phys_hometopic' => array (  0 =>   array (    0 => 'idTopic',  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::hometopicAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTopic',    ),    1 =>     array (      0 => 'text',      1 => '/hometopics',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_phys_global' => array (  0 =>   array (    0 => 'idTopic',    1 => 'intLevel',  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::globalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'intLevel',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTopic',    ),    2 =>     array (      0 => 'text',      1 => '/topics',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_phys_element' => array (  0 =>   array (    0 => 'idTopic',    1 => 'intLevel',    2 => 'intEltLevel',  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::elementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'intEltLevel',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'intLevel',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTopic',    ),    3 =>     array (      0 => 'text',      1 => '/topics',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_edition' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::homeeditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edition/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_edition_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edition/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_edition_addtopic' => array (  0 =>   array (    0 => 'iddom',  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::addtopicAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iddom',    ),    1 =>     array (      0 => 'text',      1 => '/edition/addtopic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_edition_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edition/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_edition_viewadd' => array (  0 =>   array (    0 => 'idadd',  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::viewaddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idadd',    ),    1 =>     array (      0 => 'text',      1 => '/edition/viewadd',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_edition_viewaddtopic' => array (  0 =>   array (    0 => 'idaddtopic',  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::viewaddtopicAction',  ),  2 =>   array (    'idaddtopic' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idaddtopic',    ),    1 =>     array (      0 => 'text',      1 => '/edition/viewaddtopic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_edition_viewupd' => array (  0 =>   array (    0 => 'idphys',  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::viewupdAction',  ),  2 =>   array (    'idphys' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idphys',    ),    1 =>     array (      0 => 'text',      1 => '/edition/viewupd',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_physmvc_links' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::linksAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/links/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_user_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_user_account' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::homeuserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_user_add' => array (  0 =>   array (    0 => 'roleuser',  ),  1 =>   array (    '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::adduserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'roleuser',    ),    1 =>     array (      0 => 'text',      1 => '/user/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_user_authentification' => array (  0 =>   array (    0 => 'uemail',    1 => 'toklink',  ),  1 =>   array (    '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::authenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'toklink',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'uemail',    ),    2 =>     array (      0 => 'text',      1 => '/user/authentification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_user_delete' => array (  0 =>   array (    0 => 'iduser',  ),  1 =>   array (    '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::deleteuserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iduser',    ),    1 =>     array (      0 => 'text',      1 => '/user/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_user_email' => array (  0 =>   array (    0 => 'uemail',    1 => 'toklink',  ),  1 =>   array (    '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::emailuserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'toklink',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'uemail',    ),    2 =>     array (      0 => 'text',      1 => '/user/email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sitephys_user_expemail' => array (  0 =>   array (    0 => 'uemail',    1 => 'toklink',  ),  1 =>   array (    '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::expemailuserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'toklink',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'uemail',    ),    2 =>     array (      0 => 'text',      1 => '/user/expemail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logtarget' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
