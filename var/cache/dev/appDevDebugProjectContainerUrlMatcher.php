<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/d667f12')) {
                // _assetic_d667f12
                if ($pathinfo === '/css/d667f12.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd667f12',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d667f12',);
                }

                // _assetic_d667f12_0
                if ($pathinfo === '/css/d667f12_main_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd667f12',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d667f12_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/08b27fa')) {
                // _assetic_08b27fa
                if ($pathinfo === '/css/08b27fa.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '08b27fa',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_08b27fa',);
                }

                // _assetic_08b27fa_0
                if ($pathinfo === '/css/08b27fa_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '08b27fa',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_08b27fa_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/74ce16b')) {
                // _assetic_74ce16b
                if ($pathinfo === '/js/74ce16b.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '74ce16b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_74ce16b',);
                }

                // _assetic_74ce16b_0
                if ($pathinfo === '/js/74ce16b_jquery-3.1.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '74ce16b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_74ce16b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/c4a5346')) {
                // _assetic_c4a5346
                if ($pathinfo === '/js/c4a5346.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c4a5346',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c4a5346',);
                }

                // _assetic_c4a5346_0
                if ($pathinfo === '/js/c4a5346_main_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c4a5346',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c4a5346_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/7009615')) {
                // _assetic_7009615
                if ($pathinfo === '/js/7009615.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 7009615,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7009615',);
                }

                // _assetic_7009615_0
                if ($pathinfo === '/js/7009615_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 7009615,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7009615_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/3d7c08b')) {
            // _assetic_3d7c08b
            if ($pathinfo === '/css/3d7c08b.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3d7c08b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3d7c08b',);
            }

            if (0 === strpos($pathinfo, '/css/3d7c08b_')) {
                // _assetic_3d7c08b_0
                if ($pathinfo === '/css/3d7c08b_main_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3d7c08b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3d7c08b_0',);
                }

                // _assetic_3d7c08b_1
                if ($pathinfo === '/css/3d7c08b_bootstrap_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3d7c08b',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_3d7c08b_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/8a04782')) {
            // _assetic_8a04782
            if ($pathinfo === '/js/8a04782.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8a04782',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8a04782',);
            }

            if (0 === strpos($pathinfo, '/js/8a04782_')) {
                // _assetic_8a04782_0
                if ($pathinfo === '/js/8a04782_jquery-3.1.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8a04782',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8a04782_0',);
                }

                // _assetic_8a04782_1
                if ($pathinfo === '/js/8a04782_main_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8a04782',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_8a04782_1',);
                }

                // _assetic_8a04782_2
                if ($pathinfo === '/js/8a04782_bootstrap_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8a04782',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_8a04782_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
            // sitephys_physmvc_phys_sample
            if (0 === strpos($pathinfo, '/topics/sample') && preg_match('#^/topics/sample/(?P<idTopic>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitephys_physmvc_phys_sample')), array (  '_controller' => 'Sitephys\\PhysmvcBundle\\Controller\\PhysController::sampleAction',));
            }

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
