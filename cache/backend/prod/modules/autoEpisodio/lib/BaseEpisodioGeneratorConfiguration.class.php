<?php

/**
 * episodio module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage episodio
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEpisodioGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
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
    return '%%nombre%% - %%podcast%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista de Episodios';
  }

  public function getEditTitle()
  {
    return 'Editar episodio %%nombre%%';
  }

  public function getNewTitle()
  {
    return 'Nuevo episodio';
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
    return array(  0 => 'nombre',  1 => 'fuentemp3',  2 => 'fuenteogg',  3 => 'podcast_idPodcast',);
  }

  public function getNewDisplay()
  {
    return array(  0 => 'nombre',  1 => 'fuentemp3',  2 => 'fuenteogg',  3 => 'podcast_idPodcast',);
  }

  public function getListDisplay()
  {
    return array(  0 => 'nombre',  1 => 'podcast',);
  }

  public function getFieldsDefault()
  {
    return array(
      'idEpisodio' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fuentemp3' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fuenteogg' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'podcast_idPodcast' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'idEpisodio' => array(),
      'nombre' => array(),
      'fuentemp3' => array(),
      'fuenteogg' => array(),
      'podcast_idPodcast' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'idEpisodio' => array(),
      'nombre' => array(),
      'fuentemp3' => array(),
      'fuenteogg' => array(),
      'podcast_idPodcast' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'idEpisodio' => array(),
      'nombre' => array(),
      'fuentemp3' => array(),
      'fuenteogg' => array(),
      'podcast_idPodcast' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'idEpisodio' => array(),
      'nombre' => array(),
      'fuentemp3' => array(),
      'fuenteogg' => array(),
      'podcast_idPodcast' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'idEpisodio' => array(),
      'nombre' => array(),
      'fuentemp3' => array(),
      'fuenteogg' => array(),
      'podcast_idPodcast' => array(),
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
    return 'episodioForm';
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
    return 'episodioFormFilter';
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
