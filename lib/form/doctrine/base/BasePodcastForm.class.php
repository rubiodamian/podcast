<?php

/**
 * Podcast form base class.
 *
 * @method Podcast getObject() Returns the current form's model object
 *
 * @package    entrega3
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePodcastForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idPodcast'             => new sfWidgetFormInputHidden(),
      'nombre'                => new sfWidgetFormInputText(),
      'descripcion'           => new sfWidgetFormInputText(),
      'publicado'             => new sfWidgetFormInputCheckbox(),
      'imagen'                => new sfWidgetFormInputText(),
      'categoria_idCategoria' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('categoria'), 'add_empty' => false)),
      'user_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idPodcast'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idPodcast')), 'empty_value' => $this->getObject()->get('idPodcast'), 'required' => false)),
      'nombre'                => new sfValidatorString(array('max_length' => 50)),
      'descripcion'           => new sfValidatorString(array('max_length' => 200)),
      'publicado'             => new sfValidatorBoolean(array('required' => false)),
      'imagen'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'categoria_idCategoria' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('categoria'))),
      'user_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('podcast[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Podcast';
  }

}
