<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ACADEMICOXMATERIA', 'doctrine');

/**
 * BaseACADEMICOXMATERIA
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idacademico
 * @property integer $idmateria
 * @property integer $cicloimpartido
 * @property integer $aniocicloimpartido
 * @property decimal $cantumaasignada
 * @property MATERIA $MATERIA
 * @property ACADEMICO $ACADEMICO
 * 
 * @method integer           getIdacademico()        Returns the current record's "idacademico" value
 * @method integer           getIdmateria()          Returns the current record's "idmateria" value
 * @method integer           getCicloimpartido()     Returns the current record's "cicloimpartido" value
 * @method integer           getAniocicloimpartido() Returns the current record's "aniocicloimpartido" value
 * @method decimal           getCantumaasignada()    Returns the current record's "cantumaasignada" value
 * @method MATERIA           getMATERIA()            Returns the current record's "MATERIA" value
 * @method ACADEMICO         getACADEMICO()          Returns the current record's "ACADEMICO" value
 * @method ACADEMICOXMATERIA setIdacademico()        Sets the current record's "idacademico" value
 * @method ACADEMICOXMATERIA setIdmateria()          Sets the current record's "idmateria" value
 * @method ACADEMICOXMATERIA setCicloimpartido()     Sets the current record's "cicloimpartido" value
 * @method ACADEMICOXMATERIA setAniocicloimpartido() Sets the current record's "aniocicloimpartido" value
 * @method ACADEMICOXMATERIA setCantumaasignada()    Sets the current record's "cantumaasignada" value
 * @method ACADEMICOXMATERIA setMATERIA()            Sets the current record's "MATERIA" value
 * @method ACADEMICOXMATERIA setACADEMICO()          Sets the current record's "ACADEMICO" value
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseACADEMICOXMATERIA extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ACADEMICOXMATERIA');
        $this->hasColumn('idacademico', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('idmateria', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cicloimpartido', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('aniocicloimpartido', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cantumaasignada', 'decimal', 2, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('MATERIA', array(
             'local' => 'idmateria',
             'foreign' => 'idmateria'));

        $this->hasOne('ACADEMICO', array(
             'local' => 'idacademico',
             'foreign' => 'idacademico'));
    }
}