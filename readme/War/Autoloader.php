<?php
namespace Load;
/**
 * Created by PhpStorm.
 * User: tiw
 * Date: 17/10/2016
 * Time: 09:54
 */

/**
 * Class Autoloader autoloder de class
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
     * @param $class le nom de la calsse à charger
     */
    static function autoload($class){
        $class= str_replace('War\\','', $class);
        $class= str_replace('\\','/', $class);
        require "class/".$class.".php";
    }
}

/**
 * Class Autoloader
 */
