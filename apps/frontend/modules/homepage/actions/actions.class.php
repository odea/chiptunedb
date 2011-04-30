<?php

/**
 * homepage actions.
 *
 * @package    chiptunedb
 * @subpackage homepage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homepageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->artists = Doctrine_Core::getTable('Artist')
      ->createQuery('a')
      ->orderBy('a.created_at DESC')
      ->execute();

    $this->albums = Doctrine_Core::getTable('Album')
      ->createQuery('b')
      ->execute();
  }
}
