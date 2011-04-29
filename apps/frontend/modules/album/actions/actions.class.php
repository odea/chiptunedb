<?php

/**
 * album actions.
 *
 * @package    chiptunedb
 * @subpackage album
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class albumActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->albums = Doctrine_Core::getTable('Album')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->album = Doctrine_Core::getTable('Album')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->album);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AlbumForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AlbumForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($album = Doctrine_Core::getTable('Album')->find(array($request->getParameter('id'))), sprintf('Object album does not exist (%s).', $request->getParameter('id')));
    $this->form = new AlbumForm($album);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($album = Doctrine_Core::getTable('Album')->find(array($request->getParameter('id'))), sprintf('Object album does not exist (%s).', $request->getParameter('id')));
    $this->form = new AlbumForm($album);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($album = Doctrine_Core::getTable('Album')->find(array($request->getParameter('id'))), sprintf('Object album does not exist (%s).', $request->getParameter('id')));
    $album->delete();

    $this->redirect('album/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $album = $form->save();

      $this->redirect('album/edit?id='.$album->getId());
    }
  }
}
