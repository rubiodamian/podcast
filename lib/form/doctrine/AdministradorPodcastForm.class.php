<?php

/**
 * AdministradorPodcast form.
 *
 * @package    entrega3
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AdministradorPodcastForm extends BaseAdministradorPodcastForm
{
  public function configure()
  {
  	if(sfContext::getInstance()->getUser()->hasPermission('administrador')){
  		$queryPodcast= PodcastTable::getPodcastsTodos();
  	}else{
  		$queryPodcast= PodcastTable::getPodcastsPropiosYHabilitados();
  	}
  	if(sfContext::getInstance()->getUser()->hasPermission('administrador')){
  		$queryUser= sfGuardUserTable::getTodos();
  	}else{
  		$queryUser= sfGuardUserTable::getPublicadores();
  	}  	
  	
  	$this->widgetSchema['podcast_idpodcast'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Podcast'), 
  																					'add_empty' => true, 
  																					'query' => $queryPodcast,
  																					'label' => 'Podcast'));
  	$this->widgetSchema['user_id'] = new sfWidgetFormDoctrineChoice(array(	'model' => $this->getRelatedModelName('User'), 
  																			'add_empty' => true, 
  																			'query' => $queryUser,
  																			'label' => 'Usuario'));
  }
}
