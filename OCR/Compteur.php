<?php

/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 25/10/2016
 * Time: 22:51
 */
class Compteur
{
    private static $_compteur = 0;

    public function __construct()
    {
        self::$_compteur+=1;
    }
    public static function compteur(){
        echo "La classe ".__CLASS__ ." a était appelé ".self::$_compteur;
    }
}
$a = new Compteur();
$e = new Compteur();
$t = new Compteur();
Compteur::compteur();