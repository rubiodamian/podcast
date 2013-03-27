<?php

/**
 * AdministradorPodcast form base class.
 *
 * @method AdministradorPodcast getObject() Returns the current form's model object
 *
 * @package    entrega3
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdministradorPodcastForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idPodcast'         => new sfWidgetFormInputHidden(),
      'podcast_idpodcast' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Podcast'), 'add_empty' => true)),
      'user_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'idPodcast'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idPodcast')), 'empty_value' => $this->getObject()->get('idPodcast'), 'required' => false)),
      'podcast_idpodcast' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Podcast'), 'required' => false)),
      'user_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('administrador_podcast[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdministradorPodcast';
  }

}
