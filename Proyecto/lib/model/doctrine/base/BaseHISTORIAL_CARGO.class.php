<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HISTORIAL_CARGO', 'doctrine');

/**
 * BaseHISTORIAL_CARGO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idhistorialcargo
 * @property date $fechainicio
 * @property date $fechafin
 * @property integer $idacademico
 * @property integer $idcargoxunidadorg
 * @property integer $idtipocontratacion
 * @property integer $idtipocontratacionex
 * @property integer $idtiempocontratacion
 * @property TIEMPO_CONTRATACION $TIEMPO_CONTRATACION
 * @property ACADEMICO $ACADEMICO
 * @property CARGOXUNIDAD_ORG $CARGOXUNIDAD_ORG
 * @property TIPO_CONTRATACION $TIPO_CONTRATACION
 * @property TIPO_CONTRATACION_EX $TIPO_CONTRATACION_EX
 * 
 * @method integer              getIdhistorialcargo()     Returns the current record's "idhistorialcargo" value
 * @method date                 getFechainicio()          Returns the current record's "fechainicio" value
 * @method date                 getFechafin()             Returns the current record's "fechafin" value
 * @method integer              getIdacademico()          Returns the current record's "idacademico" value
 * @method integer              getIdcargoxunidadorg()    Returns the current record's "idcargoxunidadorg" value
 * @method integer              getIdtipocontratacion()   Returns the current record's "idtipocontratacion" value
 * @method integer              getIdtipocontratacionex() Returns the current record's "idtipocontratacionex" value
 * @method integer              getIdtiempocontratacion() Returns the current record's "idtiempocontratacion" value
 * @method TIEMPO_CONTRATACION  getTIEMPOCONTRATACION()   Returns the current record's "TIEMPO_CONTRATACION" value
 * @method ACADEMICO            getACADEMICO()            Returns the current record's "ACADEMICO" value
 * @method CARGOXUNIDAD_ORG     getCARGOXUNIDADORG()      Returns the current record's "CARGOXUNIDAD_ORG" value
 * @method TIPO_CONTRATACION    getTIPOCONTRATACION()     Returns the current record's "TIPO_CONTRATACION" value
 * @method TIPO_CONTRATACION_EX getTIPOCONTRATACIONEX()   Returns the current record's "TIPO_CONTRATACION_EX" value
 * @method HISTORIAL_CARGO      setIdhistorialcargo()     Sets the current record's "idhistorialcargo" value
 * @method HISTORIAL_CARGO      setFechainicio()          Sets the current record's "fechainicio" value
 * @method HISTORIAL_CARGO      setFechafin()             Sets the current record's "fechafin" value
 * @method HISTORIAL_CARGO      setIdacademico()          Sets the current record's "idacademico" value
 * @method HISTORIAL_CARGO      setIdcargoxunidadorg()    Sets the current record's "idcargoxunidadorg" value
 * @method HISTORIAL_CARGO      setIdtipocontratacion()   Sets the current record's "idtipocontratacion" value
 * @method HISTORIAL_CARGO      setIdtipocontratacionex() Sets the current record's "idtipocontratacionex" value
 * @method HISTORIAL_CARGO      setIdtiempocontratacion() Sets the current record's "idtiempocontratacion" value
 * @method HISTORIAL_CARGO      setTIEMPOCONTRATACION()   Sets the current record's "TIEMPO_CONTRATACION" value
 * @method HISTORIAL_CARGO      setACADEMICO()            Sets the current record's "ACADEMICO" value
 * @method HISTORIAL_CARGO      setCARGOXUNIDADORG()      Sets the current record's "CARGOXUNIDAD_ORG" value
 * @method HISTORIAL_CARGO      setTIPOCONTRATACION()     Sets the current record's "TIPO_CONTRATACION" value
 * @method HISTORIAL_CARGO      setTIPOCONTRATACIONEX()   Sets the current record's "TIPO_CONTRATACION_EX" value
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHISTORIAL_CARGO extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('HISTORIAL_CARGO');
        $this->hasColumn('idhistorialcargo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('fechainicio', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('fechafin', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('idacademico', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('idcargoxunidadorg', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('idtipocontratacion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('idtipocontratacionex', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('idtiempocontratacion', 'integer', 4, array(
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
        $this->hasOne('TIEMPO_CONTRATACION', array(
             'local' => 'idtiempocontratacion',
             'foreign' => 'idtiempocontratacion'));

        $this->hasOne('ACADEMICO', array(
             'local' => 'idacademico',
             'foreign' => 'idacademico'));

        $this->hasOne('CARGOXUNIDAD_ORG', array(
             'local' => 'idcargoxunidadorg',
             'foreign' => 'idcargoxunidadorg'));

        $this->hasOne('TIPO_CONTRATACION', array(
             'local' => 'idtipocontratacion',
             'foreign' => 'idtipocontratacion'));

        $this->hasOne('TIPO_CONTRATACION_EX', array(
             'local' => 'idtipocontratacionex',
             'foreign' => 'idtipocontratacionex'));
    }
}