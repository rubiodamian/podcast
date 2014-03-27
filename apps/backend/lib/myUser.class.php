<?php

class myUser extends sfGuardSecurityUser {

    public function signIn($user, $remember = false, $con = null) {
        // signin
        $this->setAttribute('user_id', $user->getId(), 'sfGuardSecurityUser');
        $this->setAuthenticated(true);
        $this->clearCredentials();
        $this->addCredentials($user->getAllPermissionNames());

        // save last login
        $user->setLastLogin(date('Y-m-d H:i:s'));
        $user->save($con);

        // remember?
        if ($remember) {
            $expiration_age = sfConfig::get('app_sf_guard_plugin_remember_key_expiration_age', 15 * 24 * 3600);

            // remove old keys
            Doctrine_Core::getTable('sfGuardRememberKey')->createQuery()
                    ->delete()
                    ->where('created_at < ?', date('Y-m-d H:i:s', time() - $expiration_age))
                    ->execute();

            $key = $this->generateRandomKey();
            if (is_object($remember)) {
                $remember->remember_key = $key;
                $series_number = $remember->series_number;
                $remember->save($con);
            } else {
                // generate new keys
                $series_number = $this->generateRandomKey();
                $rk = new sfGuardRememberKey();
                $rk->setRememberKey($key);
                $rk->setSeriesNumber($series_number);
                $rk->setUser($user);
                $rk->setUserAgent(sfContext::getInstance()->getRequest()->getHttpHeader('User-Agent'));
                $rk->setIpAddress($_SERVER['REMOTE_ADDR']);
                $rk->save($con);
            }
            $value = $key . "-" . $series_number;
            // make key as a cookie
            $remember_cookie = sfConfig::get('app_sf_guard_plugin_remember_cookie_name', 'sfRemember');
            sfContext::getInstance()->getResponse()->setCookie($remember_cookie, $value, time() + $expiration_age);
        }
    }

}
