<?php

/**
 * configuracion module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage configuracion
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseConfiguracionGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array(  '_new' =>   array(    'credentials' => 'God',  ),  '_delete' =>   array(    'credentials' => 'God',  ),);
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
    return '%%Cantidad_items_por_pagina%% - %%Cantidad_podcast_por_pagina%% - %%Plantilla_defecto%% - %%Nombre_sitio%% - %%Sitio_habilitado%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Configuracion del Sitio';
  }

  public function getEditTitle()
  {
    return 'Editar configuracion del sitio.';
  }

  public function getNewTitle()
  {
    return 'New Configuracion';
  }

  public function getFilterDisplay()
  {
    return array();
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
    return array(  0 => 'Cantidad_items_por_pagina',  1 => 'Cantidad_podcast_por_pagina',  2 => 'Plantilla_defecto',  3 => 'Nombre_sitio',  4 => 'Sitio_habilitado',);
  }

  public function getFieldsDefault()
  {
    return array(
      'idConfig' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cantidadItemsPorPagina' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cantidadPodcastPorPagina' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'plantillaDefecto' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombreSitio' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'sitioHabilitado' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'idConfig' => array(),
      'cantidadItemsPorPagina' => array(),
      'cantidadPodcastPorPagina' => array(),
      'plantillaDefecto' => array(),
      'nombreSitio' => array(),
      'sitioHabilitado' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'idConfig' => array(),
      'cantidadItemsPorPagina' => array(),
      'cantidadPodcastPorPagina' => array(),
      'plantillaDefecto' => array(),
      'nombreSitio' => array(),
      'sitioHabilitado' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'idConfig' => array(),
      'cantidadItemsPorPagina' => array(),
      'cantidadPodcastPorPagina' => array(),
      'plantillaDefecto' => array(),
      'nombreSitio' => array(),
      'sitioHabilitado' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'idConfig' => array(),
      'cantidadItemsPorPagina' => array(),
      'cantidadPodcastPorPagina' => array(),
      'plantillaDefecto' => array(),
      'nombreSitio' => array(),
      'sitioHabilitado' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'idConfig' => array(),
      'cantidadItemsPorPagina' => array(),
      'cantidadPodcastPorPagina' => array(),
      'plantillaDefecto' => array(),
      'nombreSitio' => array(),
      'sitioHabilitado' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'configuracionForm';
  }

  public function hasFilterForm()
  {
    return false;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'configuracionFormFilter';
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
