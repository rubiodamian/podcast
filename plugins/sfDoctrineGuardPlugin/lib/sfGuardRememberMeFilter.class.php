<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Processes the "remember me" cookie.
 * 
 * This filter should be added to the application filters.yml file **above**
 * the security filter:
 * 
 *    remember_me:
 *      class: sfGuardRememberMeFilter
 * 
 *    security: ~
 * 
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardRememberMeFilter.class.php 27166 2010-01-25 21:04:41Z Kris.Wallsmith $
 */
class sfGuardRememberMeFilter extends sfFilter {

    /**
     * Executes the filter chain.
     *
     * @param sfFilterChain $filterChain
     */
    public function execute($filterChain) {
        $cookieName = sfConfig::get('app_sf_guard_plugin_remember_cookie_name', 'sfRemember');
        
        if (
                $this->isFirstCall() &&
                $this->context->getUser()->isAnonymous() &&
                $cookie = $this->context->getRequest()->getCookie($cookieName)
        ) {
            list($remember_key, $series_number) = explode("-", $cookie);
            $q = Doctrine_Core::getTable('sfGuardRememberKey')->createQuery('r')
                    ->innerJoin('r.User u')
                    ->where('r.series_number = ?', $series_number);

            $sf_remember = $q->fetchOne();

            if ($sf_remember) {
                if ($sf_remember->getTheftAssumed()) {
                    $this->context->getUser()->setFlash('error', "Your account was compromised and will be blocked for your safety.\nPlease change your password and we will activate it.");
                    $this->context->getUser()->setAuthenticated(FALSE); // Prevent's session fixation
                    $sf_remember->User->setIsActive(FALSE);
                    $sf_remember->User->save();
                } else {
                    if ($sf_remember->remember_key == $remember_key && $sf_remember->user_agent == sfContext::getInstance()->getRequest()->getHttpHeader('User-Agent')) {
                        $this->context->getUser()->signIn($sf_remember->User, $sf_remember);
                    } else {
                        if ($sf_remember->remember_key !== $remember_key) {
                            $this->context->getUser()->setFlash('error', "Your account was compromised and will be blocked for your safety.\nPlease change your password and we will activate it.");
                            $this->context->getUser()->setAuthenticated(FALSE); // Prevent's session fixation
                            $sf_remember->User->setIsActive(FALSE);
                            $sf_remember->setTheftAssumed(TRUE);
                            $sf_remember->save();
                            $sf_remember->User->save();
                        }
                    }
                }
            }
        }

        $filterChain->execute();
    }

}
