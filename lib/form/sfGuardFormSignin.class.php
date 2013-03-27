<?php
class sfGuardFormSignin extends BasesfGuardFormSignin
{
	public function configure()
	{
		$this->widgetSchema->setLabels(array(
		'username' => 'Usuario',
		'password' => 'Clave',
		'remember' => 'Recordarme',
		));
	}
}
