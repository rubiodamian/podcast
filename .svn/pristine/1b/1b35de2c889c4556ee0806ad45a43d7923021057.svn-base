<?php

/**
 * Configuracion form base class.
 *
 * @method Configuracion getObject() Returns the current form's model object
 *
 * @package    entrega3
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseConfiguracionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idConfig'                 => new sfWidgetFormInputHidden(),
      'cantidadItemsPorPagina'   => new sfWidgetFormInputText(),
      'cantidadPodcastPorPagina' => new sfWidgetFormInputText(),
      'plantillaDefecto'         => new sfWidgetFormTextarea(),
      'nombreSitio'              => new sfWidgetFormTextarea(),
      'sitioHabilitado'          => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'idConfig'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idConfig')), 'empty_value' => $this->getObject()->get('idConfig'), 'required' => false)),
      'cantidadItemsPorPagina'   => new sfValidatorInteger(),
      'cantidadPodcastPorPagina' => new sfValidatorInteger(),
      'plantillaDefecto'         => new sfValidatorString(),
      'nombreSitio'              => new sfValidatorString(),
      'sitioHabilitado'          => new sfValidatorBoolean(),
    ));

    $this->widgetSchema->setNameFormat('configuracion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Configuracion';
  }

}
