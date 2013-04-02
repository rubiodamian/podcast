<?php

/**
 * Podcast form.
 *
 * @package    podcast
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PodcastForm extends BasePodcastForm
{
  public function configure()
  {
  	$this->widgetSchema['imagen'] = new sfWidgetFormInputFileEditable(array(
      'label'       => 'Imagen Podcast', 
      'file_src'    => '/podcast/web/uploads/images/'.$this->getObject()->getImagen(), 
      'is_image'    => true,
      'edit_mode'   => !$this->isNew(),
  	  'with_delete' => false,
    ));
  	$this->widgetSchema['user_id'] = new sfWidgetFormInputHidden();
  	$this->widgetSchema['categoria_idCategoria'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('categoria'), 'add_empty' => false, 'label' => 'Categoria')); 
  	if ($this->isNew())
  	{
  		$user_id=sfContext::getInstance()->getUser()->getAttribute('user_id', null, 'sfGuardSecurityUser');
  		$this->setDefault ('user_id', $user_id);
  	}
  	$this->validatorSchema['user_id'] = new sfValidatorString(array('required'=>false));
  	$this->validatorSchema['created_at'] = new sfValidatorDateTime(array('required' => false));
  	$this->validatorSchema['updated_at'] = new sfValidatorDateTime(array('required' => false)); 	
    $this->validatorSchema['imagen'] = new sfValidatorFile(array(
         'required'    => false,
         'path'        => sfConfig::get('sf_upload_dir').'/images',
         'mime_types'  => 'web_images',
     ));
  }

}
