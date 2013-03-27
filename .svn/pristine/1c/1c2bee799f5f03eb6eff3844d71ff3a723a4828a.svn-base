<?php

/**
 * sfGuardUser module configuration.
 *
 * @package    sfGuardPlugin
 * @subpackage sfGuardUser
 * @author     Fabien Potencier
 * @version    SVN: $Id: sfGuardUserGeneratorConfiguration.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class sfGuardUserGeneratorConfiguration extends BaseSfGuardUserGeneratorConfiguration
{
	public function getTableMethod()
	{
		if(sfContext::getInstance()->getUser()->hasCredential('publicador')){
			return 'getPublicadores';
		}else{
			return 'getTodos';
		}
	}
}
