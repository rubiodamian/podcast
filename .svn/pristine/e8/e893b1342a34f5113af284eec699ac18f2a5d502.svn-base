<?php

/**
 * AdministradorPodcast filter form base class.
 *
 * @package    entrega3
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdministradorPodcastFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'podcast_idpodcast' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Podcast'), 'add_empty' => true)),
      'user_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'podcast_idpodcast' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Podcast'), 'column' => 'idPodcast')),
      'user_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('administrador_podcast_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdministradorPodcast';
  }

  public function getFields()
  {
    return array(
      'idPodcast'         => 'Number',
      'podcast_idpodcast' => 'ForeignKey',
      'user_id'           => 'ForeignKey',
    );
  }
}
