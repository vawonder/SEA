<?php

/**
 * USUARIOTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class USUARIOTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object USUARIOTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('USUARIO');
    }
    
    public static function login($user,$password){
      return Doctrine_Query::create()
        ->from('USUARIO u')
	->where('u.nombreusuario = ?', array($user))
        ->andWhere('u.contraseniausuario = ?', md5($password)) // Podrimos usar otro algoritmo, en este caso utilizamos md5
	->fetchOne();
    }
    
}