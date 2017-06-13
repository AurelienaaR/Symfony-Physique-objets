<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // sitephys_physmvc_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sitephys_physmvc_home');
            }

            return array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::homeAction',  '_route' => 'sitephys_physmvc_home',);
        }

        // sitephys_physmvc_presentation
        if (rtrim($pathinfo, '/') === '/presentation') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sitephys_physmvc_presentation');
            }

            return array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::presentationAction',  '_route' => 'sitephys_physmvc_presentation',);
        }

        // sitephys_physmvc_topic
        if (rtrim($pathinfo, '/') === '/topic') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sitephys_physmvc_topic');
            }

            return array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::topAction',  '_route' => 'sitephys_physmvc_topic',);
        }

        // sitephys_physmvc_symbolization
        if (rtrim($pathinfo, '/') === '/symbolization') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sitephys_physmvc_symbolization');
            }

            return array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::symAction',  '_route' => 'sitephys_physmvc_symbolization',);
        }

        // sitephys_physmvc_evaluation
        if (0 === strpos($pathinfo, '/evaluation') && preg_match('#^/evaluation/(?P<idTopic>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_evaluation')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::evalAction',));
        }

        // sitephys_physmvc_phys_view
        if (0 === strpos($pathinfo, '/phys') && preg_match('#^/phys/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_phys_view')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::viewAction',));
        }

        // sitephys_physmvc_phys_hometopic
        if (0 === strpos($pathinfo, '/hometopics') && preg_match('#^/hometopics/(?P<idTopic>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_phys_hometopic')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::hometopicAction',));
        }

        if (0 === strpos($pathinfo, '/topics')) {
            // sitephys_physmvc_phys_global
            if (preg_match('#^/topics/(?P<idTopic>[^/]++)/(?P<intLevel>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_phys_global')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::globalAction',));
            }

            // sitephys_physmvc_phys_element
            if (preg_match('#^/topics/(?P<idTopic>[^/]++)/(?P<intLevel>[^/]++)/(?P<intEltLevel>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_phys_element')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::elementAction',));
            }

        }

        if (0 === strpos($pathinfo, '/edition')) {
            // sitephys_physmvc_edition
            if (rtrim($pathinfo, '/') === '/edition') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sitephys_physmvc_edition');
                }

                return array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::homeeditAction',  '_route' => 'sitephys_physmvc_edition',);
            }

            if (0 === strpos($pathinfo, '/edition/add')) {
                // sitephys_physmvc_edition_add
                if (rtrim($pathinfo, '/') === '/edition/add') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sitephys_physmvc_edition_add');
                    }

                    return array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::addAction',  '_route' => 'sitephys_physmvc_edition_add',);
                }

                // sitephys_physmvc_edition_addtopic
                if (0 === strpos($pathinfo, '/edition/addtopic') && preg_match('#^/edition/addtopic/(?P<iddom>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_edition_addtopic')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::addtopicAction',));
                }

            }

            // sitephys_physmvc_edition_update
            if (0 === strpos($pathinfo, '/edition/update') && preg_match('#^/edition/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_edition_update')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::updateAction',));
            }

            if (0 === strpos($pathinfo, '/edition/view')) {
                if (0 === strpos($pathinfo, '/edition/viewadd')) {
                    // sitephys_physmvc_edition_viewadd
                    if (preg_match('#^/edition/viewadd/(?P<idadd>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_edition_viewadd')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::viewaddAction',));
                    }

                    // sitephys_physmvc_edition_viewaddtopic
                    if (0 === strpos($pathinfo, '/edition/viewaddtopic') && preg_match('#^/edition/viewaddtopic/(?P<idaddtopic>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_edition_viewaddtopic')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::viewaddtopicAction',));
                    }

                }

                // sitephys_physmvc_edition_viewupd
                if (0 === strpos($pathinfo, '/edition/viewupd') && preg_match('#^/edition/viewupd/(?P<idphys>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_edition_viewupd')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\EditController::viewupdAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/l')) {
            // sitephys_physmvc_links
            if (rtrim($pathinfo, '/') === '/links') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sitephys_physmvc_links');
                }

                return array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::linksAction',  '_route' => 'sitephys_physmvc_links',);
            }

            // sitephys_user_login
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sitephys_user_login');
                }

                return array (  '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'sitephys_user_login',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // sitephys_user_account
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sitephys_user_account');
                }

                return array (  '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::homeuserAction',  '_route' => 'sitephys_user_account',);
            }

            if (0 === strpos($pathinfo, '/user/a')) {
                // sitephys_user_add
                if (0 === strpos($pathinfo, '/user/add') && preg_match('#^/user/add/(?P<roleuser>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_user_add')), array (  '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::adduserAction',));
                }

                // sitephys_user_authentification
                if (0 === strpos($pathinfo, '/user/authentification') && preg_match('#^/user/authentification/(?P<uemail>[^/]++)/(?P<toklink>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_user_authentification')), array (  '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::authenAction',));
                }

            }

            // sitephys_user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<iduser>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_user_delete')), array (  '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::deleteuserAction',));
            }

            if (0 === strpos($pathinfo, '/user/e')) {
                // sitephys_user_email
                if (0 === strpos($pathinfo, '/user/email') && preg_match('#^/user/email/(?P<uemail>[^/]++)/(?P<toklink>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_user_email')), array (  '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::emailuserAction',));
                }

                // sitephys_user_expemail
                if (0 === strpos($pathinfo, '/user/expemail') && preg_match('#^/user/expemail/(?P<uemail>[^/]++)/(?P<toklink>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_user_expemail')), array (  '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::expemailuserAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sitephys\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // logtarget
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'logtarget');
            }

            return array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::homeAction',  '_route' => 'logtarget',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
