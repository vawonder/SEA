<?php

/**
 * AVANCE_ACTIVIDAD form base class.
 *
 * @method AVANCE_ACTIVIDAD getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAVANCE_ACTIVIDADForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idavance'             => new sfWidgetFormInputHidden(),
      'nombreavance'         => new sfWidgetFormTextarea(),
      'descripcionavance'    => new sfWidgetFormTextarea(),
      'fechainicioav'        => new sfWidgetFormDate(),
      'fechafinav'           => new sfWidgetFormDate(),
      'fechareporteav'       => new sfWidgetFormDate(),
      'ciclorealizacion'     => new sfWidgetFormInputText(),
      'aniociclorealizacion' => new sfWidgetFormInputText(),
      'porcentajeavance'     => new sfWidgetFormInputText(),
      'archivoavance'        => new sfWidgetFormTextarea(),
      'cantumaasignada'      => new sfWidgetFormInputText(),
      'observacionavance'    => new sfWidgetFormTextarea(),
      'idactividad'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ACTIVIDAD'), 'add_empty' => false)),
      'idestadoactividad'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ESTADO_ACTIVIDAD'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idavance'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idavance')), 'empty_value' => $this->getObject()->get('idavance'), 'required' => false)),
      'nombreavance'         => new sfValidatorString(array('max_length' => 300)),
      'descripcionavance'    => new sfValidatorString(array('required' => false)),
      'fechainicioav'        => new sfValidatorDate(),
      'fechafinav'           => new sfValidatorDate(),
      'fechareporteav'       => new sfValidatorDate(),
      'ciclorealizacion'     => new sfValidatorInteger(),
      'aniociclorealizacion' => new sfValidatorInteger(),
      'porcentajeavance'     => new sfValidatorNumber(),
      'archivoavance'        => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'cantumaasignada'      => new sfValidatorNumber(array('required' => false)),
      'observacionavance'    => new sfValidatorString(array('required' => false)),
      'idactividad'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ACTIVIDAD'))),
      'idestadoactividad'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ESTADO_ACTIVIDAD'))),
    ));

    $this->widgetSchema->setNameFormat('avance_actividad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AVANCE_ACTIVIDAD';
  }

}
