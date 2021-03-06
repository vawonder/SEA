<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MODULO', 'doctrine');

/**
 * BaseMODULO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idmodulo
 * @property string $codmodulo
 * @property string $nombremodulo
 * @property string $descripcionmodulo
 * @property string $urlmodulo
 * @property string $imgmodulo
 * @property string $imgsobremodulo
 * @property string $imgactivomodulo
 * @property Doctrine_Collection $ACCION
 * 
 * @method integer             getIdmodulo()          Returns the current record's "idmodulo" value
 * @method string              getCodmodulo()         Returns the current record's "codmodulo" value
 * @method string              getNombremodulo()      Returns the current record's "nombremodulo" value
 * @method string              getDescripcionmodulo() Returns the current record's "descripcionmodulo" value
 * @method string              getUrlmodulo()         Returns the current record's "urlmodulo" value
 * @method string              getImgmodulo()         Returns the current record's "imgmodulo" value
 * @method string              getImgsobremodulo()    Returns the current record's "imgsobremodulo" value
 * @method string              getImgactivomodulo()   Returns the current record's "imgactivomodulo" value
 * @method Doctrine_Collection getACCION()            Returns the current record's "ACCION" collection
 * @method MODULO              setIdmodulo()          Sets the current record's "idmodulo" value
 * @method MODULO              setCodmodulo()         Sets the current record's "codmodulo" value
 * @method MODULO              setNombremodulo()      Sets the current record's "nombremodulo" value
 * @method MODULO              setDescripcionmodulo() Sets the current record's "descripcionmodulo" value
 * @method MODULO              setUrlmodulo()         Sets the current record's "urlmodulo" value
 * @method MODULO              setImgmodulo()         Sets the current record's "imgmodulo" value
 * @method MODULO              setImgsobremodulo()    Sets the current record's "imgsobremodulo" value
 * @method MODULO              setImgactivomodulo()   Sets the current record's "imgactivomodulo" value
 * @method MODULO              setACCION()            Sets the current record's "ACCION" collection
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMODULO extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('MODULO');
        $this->hasColumn('idmodulo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('codmodulo', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('nombremodulo', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('descripcionmodulo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('urlmodulo', 'string', 300, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 300,
             ));
        $this->hasColumn('imgmodulo', 'string', 300, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 300,
             ));
        $this->hasColumn('imgsobremodulo', 'string', 300, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 300,
             ));
        $this->hasColumn('imgactivomodulo', 'string', 300, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 300,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ACCION', array(
             'local' => 'idmodulo',
             'foreign' => 'idmodulo'));
    }
}