<?php
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
        require "class/".$class.".php";
    }
}
