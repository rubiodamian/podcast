<?php

/**
 * categoria module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage categoria
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCategoriaGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array(  'label' => 'Acciones',);
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%nombre%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista de categorias';
  }

  public function getEditTitle()
  {
    return 'Editar categoria %%nombre%%';
  }

  public function getNewTitle()
  {
    return 'Nueva categoria';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'nombre',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'nombre',);
  }

  public function getFieldsDefault()
  {
    return array(
      'idCategoria' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'idCategoria' => array(),
      'nombre' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'idCategoria' => array(),
      'nombre' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'idCategoria' => array(),
      'nombre' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'idCategoria' => array(),
      'nombre' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'idCategoria' => array(),
      'nombre' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'categoriaForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'categoriaFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
