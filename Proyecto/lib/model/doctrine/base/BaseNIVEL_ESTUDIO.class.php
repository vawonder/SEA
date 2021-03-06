<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('NIVEL_ESTUDIO', 'doctrine');

/**
 * BaseNIVEL_ESTUDIO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idnivelestudio
 * @property string $nombrenivelestudio
 * @property Doctrine_Collection $ACADEMICO
 * @property Doctrine_Collection $HISTORIAL_GRADO_ACAD
 * 
 * @method integer             getIdnivelestudio()       Returns the current record's "idnivelestudio" value
 * @method string              getNombrenivelestudio()   Returns the current record's "nombrenivelestudio" value
 * @method Doctrine_Collection getACADEMICO()            Returns the current record's "ACADEMICO" collection
 * @method Doctrine_Collection getHISTORIALGRADOACAD()   Returns the current record's "HISTORIAL_GRADO_ACAD" collection
 * @method NIVEL_ESTUDIO       setIdnivelestudio()       Sets the current record's "idnivelestudio" value
 * @method NIVEL_ESTUDIO       setNombrenivelestudio()   Sets the current record's "nombrenivelestudio" value
 * @method NIVEL_ESTUDIO       setACADEMICO()            Sets the current record's "ACADEMICO" collection
 * @method NIVEL_ESTUDIO       setHISTORIALGRADOACAD()   Sets the current record's "HISTORIAL_GRADO_ACAD" collection
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNIVEL_ESTUDIO extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('NIVEL_ESTUDIO');
        $this->hasColumn('idnivelestudio', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombrenivelestudio', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 75,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ACADEMICO', array(
             'local' => 'idnivelestudio',
             'foreign' => 'idnivelestudio'));

        $this->hasMany('HISTORIAL_GRADO_ACAD', array(
             'local' => 'idnivelestudio',
             'foreign' => 'idnivelestudio'));
    }
}