<?php

/**
 * Episodio filter form base class.
 *
 * @package    entrega3
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEpisodioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fuentemp3'         => new sfWidgetFormFilterInput(),
      'fuenteogg'         => new sfWidgetFormFilterInput(),
      'podcast_idPodcast' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Podcast'), 'add_empty' => true)),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'fuentemp3'         => new sfValidatorPass(array('required' => false)),
      'fuenteogg'         => new sfValidatorPass(array('required' => false)),
      'podcast_idPodcast' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Podcast'), 'column' => 'idPodcast')),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('episodio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Episodio';
  }

  public function getFields()
  {
    return array(
      'idEpisodio'        => 'Number',
      'nombre'            => 'Text',
      'fuentemp3'         => 'Text',
      'fuenteogg'         => 'Text',
      'podcast_idPodcast' => 'ForeignKey',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
