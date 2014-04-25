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
class ActiveUserFilter extends sfFilter {

    /**
     * Executes the filter chain.
     *
     * @param sfFilterChain $filterChain
     */
    public function execute($filterChain) {
        if (!$this->getContext()->getUser()->getGuardUser()->is_active) {
            $this->getContext()->getUser()->setAuthenticated(FALSE);
        }
        $filterChain->execute();
    }

}

?>
