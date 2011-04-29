<?php

/**
 * Country filter form base class.
 *
 * @package    chiptunedb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCountryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iso'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'printable_name' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'iso3'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numcode'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'iso'            => new sfValidatorPass(array('required' => false)),
      'name'           => new sfValidatorPass(array('required' => false)),
      'printable_name' => new sfValidatorPass(array('required' => false)),
      'iso3'           => new sfValidatorPass(array('required' => false)),
      'numcode'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('country_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Country';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'iso'            => 'Text',
      'name'           => 'Text',
      'printable_name' => 'Text',
      'iso3'           => 'Text',
      'numcode'        => 'Number',
    );
  }
}
