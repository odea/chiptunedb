<?php

/**
 * Album form base class.
 *
 * @method Album getObject() Returns the current form's model object
 *
 * @package    chiptunedb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAlbumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'image'        => new sfWidgetFormInputText(),
      'year'         => new sfWidgetFormInputText(),
      'dl_url'       => new sfWidgetFormInputText(),
      'is_activated' => new sfWidgetFormInputCheckbox(),
      'is_va'        => new sfWidgetFormInputCheckbox(),
      'label_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Label'), 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 255)),
      'image'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'year'         => new sfValidatorInteger(array('required' => false)),
      'dl_url'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_activated' => new sfValidatorBoolean(array('required' => false)),
      'is_va'        => new sfValidatorBoolean(array('required' => false)),
      'label_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Label'))),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Album', 'column' => array('title')))
    );

    $this->widgetSchema->setNameFormat('album[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Album';
  }

}
