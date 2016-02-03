<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/contest')) {
            // contest_index
            if (preg_match('#^/contest/(?P<authKey>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contest_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contest_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contest_index')), array (  '_controller' => 'ApiBundle\\Controller\\ContestController::indexAction',));
            }
            not_contest_index:

            // contest_show
            if (preg_match('#^/contest/(?P<authKey>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contest_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contest_show')), array (  '_controller' => 'ApiBundle\\Controller\\ContestController::showAction',));
            }
            not_contest_show:

        }

        // api_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'api_default_index');
            }

            return array (  '_controller' => 'ApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api_default_index',);
        }

        // apiAuth
        if (0 === strpos($pathinfo, '/auth') && preg_match('#^/auth/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'apiAuth')), array (  '_controller' => 'ApiBundle\\Controller\\DefaultController::authAction',));
        }

        if (0 === strpos($pathinfo, '/lift')) {
            // lift_index
            if (preg_match('#^/lift/(?P<authKey>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_lift_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lift_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lift_index')), array (  '_controller' => 'ApiBundle\\Controller\\LiftController::indexAction',));
            }
            not_lift_index:

            // lift_show
            if (preg_match('#^/lift/(?P<authKey>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_lift_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lift_show')), array (  '_controller' => 'ApiBundle\\Controller\\LiftController::showAction',));
            }
            not_lift_show:

        }

        if (0 === strpos($pathinfo, '/news')) {
            // news_index
            if (preg_match('#^/news/(?P<authKey>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_news_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'news_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_index')), array (  '_controller' => 'ApiBundle\\Controller\\NewsController::indexAction',));
            }
            not_news_index:

            // news_show
            if (preg_match('#^/news/(?P<authKey>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_news_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_show')), array (  '_controller' => 'ApiBundle\\Controller\\NewsController::showAction',));
            }
            not_news_show:

        }

        if (0 === strpos($pathinfo, '/room')) {
            // room_index
            if (preg_match('#^/room/(?P<authKey>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_room_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'room_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'room_index')), array (  '_controller' => 'ApiBundle\\Controller\\RoomController::indexAction',));
            }
            not_room_index:

            // room_show
            if (preg_match('#^/room/(?P<authKey>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_room_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'room_show')), array (  '_controller' => 'ApiBundle\\Controller\\RoomController::showAction',));
            }
            not_room_show:

        }

        if (0 === strpos($pathinfo, '/slope')) {
            // slope_index
            if (preg_match('#^/slope/(?P<authKey>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_slope_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'slope_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'slope_index')), array (  '_controller' => 'ApiBundle\\Controller\\SlopeController::indexAction',));
            }
            not_slope_index:

            // slope_show
            if (preg_match('#^/slope/(?P<authKey>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_slope_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'slope_show')), array (  '_controller' => 'ApiBundle\\Controller\\SlopeController::showAction',));
            }
            not_slope_show:

        }

        if (0 === strpos($pathinfo, '/admin/target')) {
            // admin_target_index
            if (rtrim($pathinfo, '/') === '/admin/target') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_target_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_target_index');
                }

                return array (  '_controller' => 'ApiBundle\\Controller\\TargetController::indexAction',  '_route' => 'admin_target_index',);
            }
            not_admin_target_index:

            // admin_target_new
            if ($pathinfo === '/admin/target/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_target_new;
                }

                return array (  '_controller' => 'ApiBundle\\Controller\\TargetController::newAction',  '_route' => 'admin_target_new',);
            }
            not_admin_target_new:

            // admin_target_show
            if (preg_match('#^/admin/target/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_target_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_target_show')), array (  '_controller' => 'ApiBundle\\Controller\\TargetController::showAction',));
            }
            not_admin_target_show:

            // admin_target_edit
            if (preg_match('#^/admin/target/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_target_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_target_edit')), array (  '_controller' => 'ApiBundle\\Controller\\TargetController::editAction',));
            }
            not_admin_target_edit:

            // admin_target_delete
            if (preg_match('#^/admin/target/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_target_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_target_delete')), array (  '_controller' => 'ApiBundle\\Controller\\TargetController::deleteAction',));
            }
            not_admin_target_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (preg_match('#^/user/(?P<authKey>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_index')), array (  '_controller' => 'ApiBundle\\Controller\\UserController::indexAction',));
            }
            not_user_index:

            // user_show
            if (preg_match('#^/user/(?P<authKey>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'ApiBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
