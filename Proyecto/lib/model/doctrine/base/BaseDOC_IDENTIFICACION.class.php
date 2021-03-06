<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DOC_IDENTIFICACION', 'doctrine');

/**
 * BaseDOC_IDENTIFICACION
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $iddocident
 * @property string $numerodocident
 * @property date $fechaextension
 * @property string $lugarextension
 * @property integer $idtipodocident
 * @property integer $idacademico
 * @property ACADEMICO $ACADEMICO
 * @property TIPO_DOC_IDENT $TIPO_DOC_IDENT
 * 
 * @method integer            getIddocident()     Returns the current record's "iddocident" value
 * @method string             getNumerodocident() Returns the current record's "numerodocident" value
 * @method date               getFechaextension() Returns the current record's "fechaextension" value
 * @method string             getLugarextension() Returns the current record's "lugarextension" value
 * @method integer            getIdtipodocident() Returns the current record's "idtipodocident" value
 * @method integer            getIdacademico()    Returns the current record's "idacademico" value
 * @method ACADEMICO          getACADEMICO()      Returns the current record's "ACADEMICO" value
 * @method TIPO_DOC_IDENT     getTIPODOCIDENT()   Returns the current record's "TIPO_DOC_IDENT" value
 * @method DOC_IDENTIFICACION setIddocident()     Sets the current record's "iddocident" value
 * @method DOC_IDENTIFICACION setNumerodocident() Sets the current record's "numerodocident" value
 * @method DOC_IDENTIFICACION setFechaextension() Sets the current record's "fechaextension" value
 * @method DOC_IDENTIFICACION setLugarextension() Sets the current record's "lugarextension" value
 * @method DOC_IDENTIFICACION setIdtipodocident() Sets the current record's "idtipodocident" value
 * @method DOC_IDENTIFICACION setIdacademico()    Sets the current record's "idacademico" value
 * @method DOC_IDENTIFICACION setACADEMICO()      Sets the current record's "ACADEMICO" value
 * @method DOC_IDENTIFICACION setTIPODOCIDENT()   Sets the current record's "TIPO_DOC_IDENT" value
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDOC_IDENTIFICACION extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('DOC_IDENTIFICACION');
        $this->hasColumn('iddocident', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('numerodocident', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('fechaextension', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('lugarextension', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('idtipodocident', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ACADEMICO', array(
             'local' => 'idacademico',
             'foreign' => 'idacademico'));

        $this->hasOne('TIPO_DOC_IDENT', array(
             'local' => 'idtipodocident',
             'foreign' => 'idtipodocident'));
    }
}