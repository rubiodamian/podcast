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
class SessionManagementFilter extends sfFilter {

    /**
     * Executes the filter chain.
     *
     * @param sfFilterChain $filterChain
     */
    public function execute($filterChain) {

        if (isset($_SESSION['count'])) {
            // If the IP or the navigator doesn't match with the one stored in the session
            // there's probably a session hijacking going on
            if ($_SESSION['ip'] !== $_SERVER['REMOTE_ADDR'] || $_SESSION['user_agent_id'] !== $_SERVER['HTTP_USER_AGENT']) {
                // Then it destroys the session
                session_unset();
                session_destroy();
                // Creates a new one
                session_regenerate_id(true); // Prevent's session fixation
                $_SESSION['count'] = 1;
            }

            $_SESSION['count'] ++;
        } else {
            session_regenerate_id(true); // Prevent's session fixation
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR']; // Saves the user's IP
            $_SESSION['user_agent_id'] = $_SERVER['HTTP_USER_AGENT']; // Saves the user's navigator
            $_SESSION['count'] = 1;
        }

        $filterChain->execute();
    }

}

?>
