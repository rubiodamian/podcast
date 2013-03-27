<?php

/**
 * Episodio form.
 *
 * @package    podcast
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EpisodioForm extends BaseEpisodioForm
{
  public function configure()
  {
  	$this->widgetSchema['fuentemp3'] = new sfWidgetFormInputFile(array('label'=>'Archivo mp3'));
  	$this->widgetSchema['fuenteogg'] = new sfWidgetFormInputFile(array('label'=>'Archivo ogg'));
  	if(sfContext::getInstance()->getUser()->hasPermission('administrador')){
		$query= PodcastTable::getPodcastsTodos();
	}else{
		$query= PodcastTable::getPodcastsPropiosYHabilitados();//
	}
  	$this->widgetSchema['podcast_idPodcast'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Podcast'), 'add_empty' => false, 'query' => $query, 'label'=>'Podcast'));
  
  	$this->validatorSchema['created_at'] = new sfValidatorDateTime(array('required' => false));
  	$this->validatorSchema['updated_at'] = new sfValidatorDateTime(array('required' => false));
  
  	$this->validatorSchema['fuentemp3'] = new sfValidatorFile(array(
  			 'required'	   => 'Por favor selecciona una fuente valida del podcast en formato mp3.',
  	         'path'        => sfConfig::get('sf_upload_dir').'/music',
  	         'mime_types'  => array('audio/mp3','audio/mpeg'),
  	));
  	
  	$this->validatorSchema['fuenteogg'] = new sfValidatorFile(array(
  	  		 'required'	   => 'Por favor selecciona una fuente valida del podcast en formato ogg.',
  	  	     'path'        => sfConfig::get('sf_upload_dir').'/music',
  	  	     'mime_types'  => array('audio/ogg','application/ogg'),
  	));
  }
}
