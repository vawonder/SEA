<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OPCION_DATO_ACT', 'doctrine');

/**
 * BaseOPCION_DATO_ACT
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idopciondatoact
 * @property string $nombreopciondatoact
 * @property integer $iddatoactividad
 * @property DATO_ACTIVIDAD $DATO_ACTIVIDAD
 * @property Doctrine_Collection $VALOR_DATO_ACT
 * 
 * @method integer             getIdopciondatoact()     Returns the current record's "idopciondatoact" value
 * @method string              getNombreopciondatoact() Returns the current record's "nombreopciondatoact" value
 * @method integer             getIddatoactividad()     Returns the current record's "iddatoactividad" value
 * @method DATO_ACTIVIDAD      getDATOACTIVIDAD()       Returns the current record's "DATO_ACTIVIDAD" value
 * @method Doctrine_Collection getVALORDATOACT()        Returns the current record's "VALOR_DATO_ACT" collection
 * @method OPCION_DATO_ACT     setIdopciondatoact()     Sets the current record's "idopciondatoact" value
 * @method OPCION_DATO_ACT     setNombreopciondatoact() Sets the current record's "nombreopciondatoact" value
 * @method OPCION_DATO_ACT     setIddatoactividad()     Sets the current record's "iddatoactividad" value
 * @method OPCION_DATO_ACT     setDATOACTIVIDAD()       Sets the current record's "DATO_ACTIVIDAD" value
 * @method OPCION_DATO_ACT     setVALORDATOACT()        Sets the current record's "VALOR_DATO_ACT" collection
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOPCION_DATO_ACT extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('OPCION_DATO_ACT');
        $this->hasColumn('idopciondatoact', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombreopciondatoact', 'string', 300, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 300,
             ));
        $this->hasColumn('iddatoactividad', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DATO_ACTIVIDAD', array(
             'local' => 'iddatoactividad',
             'foreign' => 'iddatoactividad'));

        $this->hasMany('VALOR_DATO_ACT', array(
             'local' => 'idopciondatoact',
             'foreign' => 'idopciondatoact'));
    }
}