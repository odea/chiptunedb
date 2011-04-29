<?php

/**
 * Country form base class.
 *
 * @method Country getObject() Returns the current form's model object
 *
 * @package    chiptunedb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCountryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'iso'            => new sfWidgetFormInputText(),
      'name'           => new sfWidgetFormInputText(),
      'printable_name' => new sfWidgetFormInputText(),
      'iso3'           => new sfWidgetFormInputText(),
      'numcode'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'iso'            => new sfValidatorString(array('max_length' => 2)),
      'name'           => new sfValidatorString(array('max_length' => 255)),
      'printable_name' => new sfValidatorString(array('max_length' => 255)),
      'iso3'           => new sfValidatorString(array('max_length' => 3)),
      'numcode'        => new sfValidatorInteger(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Country', 'column' => array('id'))),
        new sfValidatorDoctrineUnique(array('model' => 'Country', 'column' => array('iso'))),
        new sfValidatorDoctrineUnique(array('model' => 'Country', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Country', 'column' => array('printable_name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Country', 'column' => array('iso3'))),
        new sfValidatorDoctrineUnique(array('model' => 'Country', 'column' => array('numcode'))),
      ))
    );

    $this->widgetSchema->setNameFormat('country[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Country';
  }

}
