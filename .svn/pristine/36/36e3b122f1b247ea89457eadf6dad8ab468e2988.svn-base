<?php

/**
 * Categoria form base class.
 *
 * @method Categoria getObject() Returns the current form's model object
 *
 * @package    entrega3
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCategoriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idCategoria' => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idCategoria' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idCategoria')), 'empty_value' => $this->getObject()->get('idCategoria'), 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('categoria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Categoria';
  }

}
