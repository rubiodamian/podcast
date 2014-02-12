<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RememberFilter
 *
 * @author demian
 */
class RememberFilter extends sfFilter {

    public function execute($filterChain) {

        $cookieName = sfConfig::get('app_sf_guard_plugin_remember_cookie_name', 'sfRemember');
        $request = $this->context->getRequest();
        $cookie = $request->getCookie($cookieName);
        die;
        if (
                $this->isFirstCall() &&
                $this->context->getUser()->isAnonymous() &&
                $cookie
        ) {
            $q = Doctrine_Core::getTable('sfGuardRememberKey')->createQuery('r')
                    ->innerJoin('r.User u')
                    ->where('r.remember_key = ?', $cookie);
//            $userRemmember = $q->fetchOne();
//            $user_agent_bool = $userRemmember->user_agent === $request->getHttpHeader('User-Agent');
//            $ip_address_bool = $userRemmember->ip_address === $request->getRemoteAddress();
            if ($q->count() 
//                    && $ip_address_bool && $user_agent_bool
                    ) {
                $this->context->getUser()->signIn($q->fetchOne()->User);
            }
        }

        $filterChain->execute();
    }

}

?>
