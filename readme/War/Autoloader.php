<?php
namespace War;
/**
 * Created by PhpStorm.
 * User: tiw
 * Date: 17/10/2016
 * Time: 09:54
 */
    /**
     * Enregister notre autoloader
     */


    /**
     * Enregistre notre autoloader
     */
/**
 * Class Autoloader
 * @package Tutoriel
 */

class Autoloader
{
    /**
     * Enregister notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    /**
     * @param $class le nom de la classe à charger
     */
    static function autoload($class){
        var_dump($class);
        var_dump(__DIR__);
        var_dump(__NAMESPACE__);
        require __NAMESPACE__.'/'.$class.".php";
    }
}

/**
 * Class Autoloader
 */
