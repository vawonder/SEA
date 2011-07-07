<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AVANCE_ACTIVIDAD', 'doctrine');

/**
 * BaseAVANCE_ACTIVIDAD
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idacademico
 * @property integer $idactividad
 * @property integer $idavance
 * @property string $nombreavance
 * @property string $descripcionavance
 * @property date $fechainicioav
 * @property date $fechafinav
 * @property date $fechareporteav
 * @property integer $ciclorealizacion
 * @property integer $aniociclorealizacion
 * @property decimal $porcentajeavance
 * @property string $archivoavance
 * @property decimal $cantumaasignada
 * @property string $observacionavance
 * @property ACTIVIDAD $ACTIVIDAD
 * @property ACTIVIDAD $ACTIVIDAD_2
 * 
 * @method integer          getIdacademico()          Returns the current record's "idacademico" value
 * @method integer          getIdactividad()          Returns the current record's "idactividad" value
 * @method integer          getIdavance()             Returns the current record's "idavance" value
 * @method string           getNombreavance()         Returns the current record's "nombreavance" value
 * @method string           getDescripcionavance()    Returns the current record's "descripcionavance" value
 * @method date             getFechainicioav()        Returns the current record's "fechainicioav" value
 * @method date             getFechafinav()           Returns the current record's "fechafinav" value
 * @method date             getFechareporteav()       Returns the current record's "fechareporteav" value
 * @method integer          getCiclorealizacion()     Returns the current record's "ciclorealizacion" value
 * @method integer          getAniociclorealizacion() Returns the current record's "aniociclorealizacion" value
 * @method decimal          getPorcentajeavance()     Returns the current record's "porcentajeavance" value
 * @method string           getArchivoavance()        Returns the current record's "archivoavance" value
 * @method decimal          getCantumaasignada()      Returns the current record's "cantumaasignada" value
 * @method string           getObservacionavance()    Returns the current record's "observacionavance" value
 * @method ACTIVIDAD        getACTIVIDAD()            Returns the current record's "ACTIVIDAD" value
 * @method ACTIVIDAD        getACTIVIDAD2()           Returns the current record's "ACTIVIDAD_2" value
 * @method AVANCE_ACTIVIDAD setIdacademico()          Sets the current record's "idacademico" value
 * @method AVANCE_ACTIVIDAD setIdactividad()          Sets the current record's "idactividad" value
 * @method AVANCE_ACTIVIDAD setIdavance()             Sets the current record's "idavance" value
 * @method AVANCE_ACTIVIDAD setNombreavance()         Sets the current record's "nombreavance" value
 * @method AVANCE_ACTIVIDAD setDescripcionavance()    Sets the current record's "descripcionavance" value
 * @method AVANCE_ACTIVIDAD setFechainicioav()        Sets the current record's "fechainicioav" value
 * @method AVANCE_ACTIVIDAD setFechafinav()           Sets the current record's "fechafinav" value
 * @method AVANCE_ACTIVIDAD setFechareporteav()       Sets the current record's "fechareporteav" value
 * @method AVANCE_ACTIVIDAD setCiclorealizacion()     Sets the current record's "ciclorealizacion" value
 * @method AVANCE_ACTIVIDAD setAniociclorealizacion() Sets the current record's "aniociclorealizacion" value
 * @method AVANCE_ACTIVIDAD setPorcentajeavance()     Sets the current record's "porcentajeavance" value
 * @method AVANCE_ACTIVIDAD setArchivoavance()        Sets the current record's "archivoavance" value
 * @method AVANCE_ACTIVIDAD setCantumaasignada()      Sets the current record's "cantumaasignada" value
 * @method AVANCE_ACTIVIDAD setObservacionavance()    Sets the current record's "observacionavance" value
 * @method AVANCE_ACTIVIDAD setACTIVIDAD()            Sets the current record's "ACTIVIDAD" value
 * @method AVANCE_ACTIVIDAD setACTIVIDAD2()           Sets the current record's "ACTIVIDAD_2" value
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAVANCE_ACTIVIDAD extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('AVANCE_ACTIVIDAD');
        $this->hasColumn('idacademico', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('idactividad', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('idavance', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombreavance', 'string', 300, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 300,
             ));
        $this->hasColumn('descripcionavance', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('fechainicioav', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('fechafinav', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('fechareporteav', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('ciclorealizacion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('aniociclorealizacion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('porcentajeavance', 'decimal', 2, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('archivoavance', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 500,
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
        $this->hasColumn('observacionavance', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ACTIVIDAD', array(
             'local' => 'idactividad',
             'foreign' => 'idactividad'));

        $this->hasOne('ACTIVIDAD as ACTIVIDAD_2', array(
             'local' => 'idacademico',
             'foreign' => 'idacademico'));
    }
}