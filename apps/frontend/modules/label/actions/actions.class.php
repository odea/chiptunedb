<?php

/**
 * label actions.
 *
 * @package    chiptunedb
 * @subpackage label
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class labelActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->labels = Doctrine_Core::getTable('Label')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->label = Doctrine_Core::getTable('Label')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->label);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LabelForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LabelForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($label = Doctrine_Core::getTable('Label')->find(array($request->getParameter('id'))), sprintf('Object label does not exist (%s).', $request->getParameter('id')));
    $this->form = new LabelForm($label);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($label = Doctrine_Core::getTable('Label')->find(array($request->getParameter('id'))), sprintf('Object label does not exist (%s).', $request->getParameter('id')));
    $this->form = new LabelForm($label);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($label = Doctrine_Core::getTable('Label')->find(array($request->getParameter('id'))), sprintf('Object label does not exist (%s).', $request->getParameter('id')));
    $label->delete();

    $this->redirect('label/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $label = $form->save();

      $this->redirect('label/edit?id='.$label->getId());
    }
  }
}
