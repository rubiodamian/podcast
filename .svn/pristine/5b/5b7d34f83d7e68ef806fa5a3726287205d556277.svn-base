<?php

/**
 * Episodio form base class.
 *
 * @method Episodio getObject() Returns the current form's model object
 *
 * @package    entrega3
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEpisodioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idEpisodio'        => new sfWidgetFormInputHidden(),
      'nombre'            => new sfWidgetFormInputText(),
      'fuentemp3'         => new sfWidgetFormInputText(),
      'fuenteogg'         => new sfWidgetFormInputText(),
      'podcast_idPodcast' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Podcast'), 'add_empty' => false)),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'idEpisodio'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idEpisodio')), 'empty_value' => $this->getObject()->get('idEpisodio'), 'required' => false)),
      'nombre'            => new sfValidatorString(array('max_length' => 50)),
      'fuentemp3'         => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'fuenteogg'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'podcast_idPodcast' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Podcast'))),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('episodio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Episodio';
  }

}
