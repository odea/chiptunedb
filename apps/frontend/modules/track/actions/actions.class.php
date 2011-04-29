<?php

/**
 * track actions.
 *
 * @package    chiptunedb
 * @subpackage track
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class trackActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tracks = Doctrine_Core::getTable('Track')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->track = Doctrine_Core::getTable('Track')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->track);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TrackForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TrackForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($track = Doctrine_Core::getTable('Track')->find(array($request->getParameter('id'))), sprintf('Object track does not exist (%s).', $request->getParameter('id')));
    $this->form = new TrackForm($track);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($track = Doctrine_Core::getTable('Track')->find(array($request->getParameter('id'))), sprintf('Object track does not exist (%s).', $request->getParameter('id')));
    $this->form = new TrackForm($track);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($track = Doctrine_Core::getTable('Track')->find(array($request->getParameter('id'))), sprintf('Object track does not exist (%s).', $request->getParameter('id')));
    $track->delete();

    $this->redirect('track/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $track = $form->save();

      $this->redirect('track/edit?id='.$track->getId());
    }
  }
}
