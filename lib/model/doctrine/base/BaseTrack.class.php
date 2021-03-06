<?php

/**
 * BaseTrack
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $number
 * @property integer $artist_id
 * @property integer $album_id
 * @property Artist $Artist
 * @property Album $Album
 * 
 * @method integer getId()        Returns the current record's "id" value
 * @method string  getTitle()     Returns the current record's "title" value
 * @method string  getNumber()    Returns the current record's "number" value
 * @method integer getArtistId()  Returns the current record's "artist_id" value
 * @method integer getAlbumId()   Returns the current record's "album_id" value
 * @method Artist  getArtist()    Returns the current record's "Artist" value
 * @method Album   getAlbum()     Returns the current record's "Album" value
 * @method Track   setId()        Sets the current record's "id" value
 * @method Track   setTitle()     Sets the current record's "title" value
 * @method Track   setNumber()    Sets the current record's "number" value
 * @method Track   setArtistId()  Sets the current record's "artist_id" value
 * @method Track   setAlbumId()   Sets the current record's "album_id" value
 * @method Track   setArtist()    Sets the current record's "Artist" value
 * @method Track   setAlbum()     Sets the current record's "Album" value
 * 
 * @package    chiptunedb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTrack extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('track');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('number', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('artist_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('album_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Artist', array(
             'local' => 'artist_id',
             'foreign' => 'id'));

        $this->hasOne('Album', array(
             'local' => 'album_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}