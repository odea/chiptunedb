<?php

/**
 * Artist form base class.
 *
 * @method Artist getObject() Returns the current form's model object
 *
 * @package    chiptunedb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArtistForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInputText(),
      'alias'        => new sfWidgetFormInputText(),
      'url'          => new sfWidgetFormInputText(),
      'image'        => new sfWidgetFormInputText(),
      'is_activated' => new sfWidgetFormInputCheckbox(),
      'country_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 255)),
      'alias'        => new sfValidatorString(array('max_length' => 255)),
      'url'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_activated' => new sfValidatorBoolean(array('required' => false)),
      'country_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Country'))),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Artist', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Artist', 'column' => array('alias'))),
        new sfValidatorDoctrineUnique(array('model' => 'Artist', 'column' => array('country_id'))),
      ))
    );

    $this->widgetSchema->setNameFormat('artist[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artist';
  }

}
