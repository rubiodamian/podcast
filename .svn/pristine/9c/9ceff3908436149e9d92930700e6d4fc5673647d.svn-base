<?php

/**
 * Configuracion filter form base class.
 *
 * @package    entrega3
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseConfiguracionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cantidadItemsPorPagina'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidadPodcastPorPagina' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'plantillaDefecto'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombreSitio'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sitioHabilitado'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'cantidadItemsPorPagina'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cantidadPodcastPorPagina' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'plantillaDefecto'         => new sfValidatorPass(array('required' => false)),
      'nombreSitio'              => new sfValidatorPass(array('required' => false)),
      'sitioHabilitado'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('configuracion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Configuracion';
  }

  public function getFields()
  {
    return array(
      'idConfig'                 => 'Number',
      'cantidadItemsPorPagina'   => 'Number',
      'cantidadPodcastPorPagina' => 'Number',
      'plantillaDefecto'         => 'Text',
      'nombreSitio'              => 'Text',
      'sitioHabilitado'          => 'Boolean',
    );
  }
}
