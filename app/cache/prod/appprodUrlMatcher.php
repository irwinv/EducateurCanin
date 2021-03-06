<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // patrick_utilisateur_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Patrick\\UtilisateurBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'patrick_utilisateur_default_index'));
        }

        if (0 === strpos($pathinfo, '/elevage')) {
            // elevage_accueil
            if (rtrim($pathinfo, '/') === '/elevage') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'elevage_accueil');
                }
                return array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'elevage_accueil',);
            }

            // elevage_chiens
            if (0 === strpos($pathinfo, '/elevage/chien/race') && preg_match('#^/elevage/chien/race/(?P<race>[^/]+?)/chiot/(?P<chiot>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\ChiensController::showAction',)), array('_route' => 'elevage_chiens'));
            }

            // elevage_contact
            if ($pathinfo === '/elevage/contact') {
                return array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\DefaultController::contactAction',  '_route' => 'elevage_contact',);
            }

            // elevage_ajouter
            if ($pathinfo === '/elevage/admin/ajout') {
                return array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\ChiensController::editAction',  '_route' => 'elevage_ajouter',);
            }

            // elevage_modifier
            if (0 === strpos($pathinfo, '/elevage/admin/modifier') && preg_match('#^/elevage/admin/modifier/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\ChiensController::editAction',)), array('_route' => 'elevage_modifier'));
            }

            // elevage_supprimer
            if (0 === strpos($pathinfo, '/elevage/admin/supprimer') && preg_match('#^/elevage/admin/supprimer/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\ChiensController::supprimerAction',)), array('_route' => 'elevage_supprimer'));
            }

            // elevage_ajouter_presentation
            if ($pathinfo === '/elevage/admin/ajout/presentation') {
                return array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\PresentationController::editAction',  '_route' => 'elevage_ajouter_presentation',);
            }

            // elevage_modifier_presentation
            if (0 === strpos($pathinfo, '/elevage/admin/ajout/presentation') && preg_match('#^/elevage/admin/ajout/presentation/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\PresentationController::editAction',)), array('_route' => 'elevage_modifier_presentation'));
            }

            // elevage_concour_chiens
            if (0 === strpos($pathinfo, '/elevage/concours/race') && preg_match('#^/elevage/concours/race/(?P<race>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\ConcoursController::showAction',)), array('_route' => 'elevage_concour_chiens'));
            }

            // elevage_concour_ajouter
            if ($pathinfo === '/elevage/admin/ajout/concours') {
                return array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\ConcoursController::editAction',  '_route' => 'elevage_concour_ajouter',);
            }

            // elevage_concour_modifier
            if (0 === strpos($pathinfo, '/elevage/admin/modifier/concours') && preg_match('#^/elevage/admin/modifier/concours/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\ConcoursController::editAction',)), array('_route' => 'elevage_concour_modifier'));
            }

            // elevage_concour_supprimer
            if (0 === strpos($pathinfo, '/elevage/admin/supprimer/concours') && preg_match('#^/elevage/admin/supprimer/concours/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Patrick\\ElevageBundle\\Controller\\ConcoursController::supprimerAction',)), array('_route' => 'elevage_concour_supprimer'));
            }

            // fos_user_security_login
            if ($pathinfo === '/elevage/login') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/elevage/login_check') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }

            // fos_user_security_logout
            if ($pathinfo === '/elevage/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/elevage/profile')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/elevage/profile') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_profile_show;
                    }
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ($pathinfo === '/elevage/profile/edit') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/elevage/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/elevage/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                // fos_user_registration_check_email
                if ($pathinfo === '/elevage/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                // fos_user_registration_confirm
                if (0 === strpos($pathinfo, '/elevage/register/confirm') && preg_match('#^/elevage/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirm;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ($pathinfo === '/elevage/register/confirmed') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirmed;
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

            if (0 === strpos($pathinfo, '/elevage/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/elevage/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/elevage/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/elevage/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/elevage/resetting/reset') && preg_match('#^/elevage/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
                }
                not_fos_user_resetting_reset:

            }

            // fos_user_change_password
            if ($pathinfo === '/elevage/change-password/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
