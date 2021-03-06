<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ACADEMICOXIDIOMA', 'doctrine');

/**
 * BaseACADEMICOXIDIOMA
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idacademico
 * @property integer $ididioma
 * @property IDIOMA $IDIOMA
 * @property ACADEMICO $ACADEMICO
 * 
 * @method integer          getIdacademico() Returns the current record's "idacademico" value
 * @method integer          getIdidioma()    Returns the current record's "ididioma" value
 * @method IDIOMA           getIDIOMA()      Returns the current record's "IDIOMA" value
 * @method ACADEMICO        getACADEMICO()   Returns the current record's "ACADEMICO" value
 * @method ACADEMICOXIDIOMA setIdacademico() Sets the current record's "idacademico" value
 * @method ACADEMICOXIDIOMA setIdidioma()    Sets the current record's "ididioma" value
 * @method ACADEMICOXIDIOMA setIDIOMA()      Sets the current record's "IDIOMA" value
 * @method ACADEMICOXIDIOMA setACADEMICO()   Sets the current record's "ACADEMICO" value
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseACADEMICOXIDIOMA extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ACADEMICOXIDIOMA');
        $this->hasColumn('idacademico', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ididioma', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('IDIOMA', array(
             'local' => 'ididioma',
             'foreign' => 'ididioma'));

        $this->hasOne('ACADEMICO', array(
             'local' => 'idacademico',
             'foreign' => 'idacademico'));
    }
}