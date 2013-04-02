<?php

/**
 * administradorpodcast module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage administradorpodcast
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAdministradorpodcastGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%podcast%% - %%user%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista de permisos habilitados';
  }

  public function getEditTitle()
  {
    return 'Editar permiso';
  }

  public function getNewTitle()
  {
    return 'Nuevo permiso';
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
    return array(  0 => 'podcast',  1 => 'user',);
  }

  public function getFieldsDefault()
  {
    return array(
      'idPodcast' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'podcast_idpodcast' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'user_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'idPodcast' => array(),
      'podcast_idpodcast' => array(),
      'user_id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'idPodcast' => array(),
      'podcast_idpodcast' => array(),
      'user_id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'idPodcast' => array(),
      'podcast_idpodcast' => array(),
      'user_id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'idPodcast' => array(),
      'podcast_idpodcast' => array(),
      'user_id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'idPodcast' => array(),
      'podcast_idpodcast' => array(),
      'user_id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'administradorpodcastForm';
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
    return 'administradorpodcastFormFilter';
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
