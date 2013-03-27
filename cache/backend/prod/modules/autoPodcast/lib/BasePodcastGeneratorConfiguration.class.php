<?php

/**
 * podcast module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage podcast
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePodcastGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array(  '_delete' =>   array(    'credentials' => 'God',  ),);
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
    return array();
  }

  public function getListParams()
  {
    return '%%=nombre%% - %%descripcion%% - %%categoria%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista de Podcasts';
  }

  public function getEditTitle()
  {
    return 'Editar podcast %%nombre%%';
  }

  public function getNewTitle()
  {
    return 'Nuevo podcast';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'nombre',  1 => 'descripcion',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array(  0 => 'nombre',  1 => 'descripcion',  2 => 'publicado',  3 => 'imagen',  4 => 'categoria_idCategoria',  5 => 'user_id',);
  }

  public function getNewDisplay()
  {
    return array(  0 => 'nombre',  1 => 'descripcion',  2 => 'publicado',  3 => 'imagen',  4 => 'categoria_idCategoria',  5 => 'user_id',);
  }

  public function getListDisplay()
  {
    return array(  0 => '=nombre',  1 => 'descripcion',  2 => 'categoria',);
  }

  public function getFieldsDefault()
  {
    return array(
      'idPodcast' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'descripcion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'publicado' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'imagen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'categoria_idCategoria' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'user_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'idPodcast' => array(),
      'nombre' => array(),
      'descripcion' => array(),
      'publicado' => array(),
      'imagen' => array(),
      'categoria_idCategoria' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'idPodcast' => array(),
      'nombre' => array(),
      'descripcion' => array(),
      'publicado' => array(),
      'imagen' => array(),
      'categoria_idCategoria' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'idPodcast' => array(),
      'nombre' => array(),
      'descripcion' => array(),
      'publicado' => array(),
      'imagen' => array(),
      'categoria_idCategoria' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'idPodcast' => array(),
      'nombre' => array(),
      'descripcion' => array(),
      'publicado' => array(),
      'imagen' => array(),
      'categoria_idCategoria' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'idPodcast' => array(),
      'nombre' => array(),
      'descripcion' => array(),
      'publicado' => array(),
      'imagen' => array(),
      'categoria_idCategoria' => array(),
      'user_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'podcastForm';
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
    return 'podcastFormFilter';
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
