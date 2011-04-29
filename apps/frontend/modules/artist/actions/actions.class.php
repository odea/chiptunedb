<?php

/**
 * artist actions.
 *
 * @package    chiptunedb
 * @subpackage artist
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class artistActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->artists = Doctrine_Core::getTable('Artist')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->artist = Doctrine_Core::getTable('Artist')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->artist);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ArtistForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ArtistForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($artist = Doctrine_Core::getTable('Artist')->find(array($request->getParameter('id'))), sprintf('Object artist does not exist (%s).', $request->getParameter('id')));
    $this->form = new ArtistForm($artist);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($artist = Doctrine_Core::getTable('Artist')->find(array($request->getParameter('id'))), sprintf('Object artist does not exist (%s).', $request->getParameter('id')));
    $this->form = new ArtistForm($artist);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($artist = Doctrine_Core::getTable('Artist')->find(array($request->getParameter('id'))), sprintf('Object artist does not exist (%s).', $request->getParameter('id')));
    $artist->delete();

    $this->redirect('artist/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $artist = $form->save();

      $this->redirect('artist/edit?id='.$artist->getId());
    }
  }
}
