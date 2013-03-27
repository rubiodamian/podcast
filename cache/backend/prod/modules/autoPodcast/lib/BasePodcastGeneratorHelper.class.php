<?php

/**
 * podcast module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage podcast
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePodcastGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'podcast' : 'podcast_'.$action;
  }
}
