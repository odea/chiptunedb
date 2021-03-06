<?php

/**
 * BaseLabel
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $logo
 * @property string $url
 * @property Doctrine_Collection $Album
 * 
 * @method integer             getId()    Returns the current record's "id" value
 * @method string              getName()  Returns the current record's "name" value
 * @method string              getLogo()  Returns the current record's "logo" value
 * @method string              getUrl()   Returns the current record's "url" value
 * @method Doctrine_Collection getAlbum() Returns the current record's "Album" collection
 * @method Label               setId()    Sets the current record's "id" value
 * @method Label               setName()  Sets the current record's "name" value
 * @method Label               setLogo()  Sets the current record's "logo" value
 * @method Label               setUrl()   Sets the current record's "url" value
 * @method Label               setAlbum() Sets the current record's "Album" collection
 * 
 * @package    chiptunedb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLabel extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('label');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('logo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Album', array(
             'local' => 'id',
             'foreign' => 'label_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}