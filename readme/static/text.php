<?php

/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 15/10/2016
 * Time: 19:01
 */
class text
{
    private static $suffix = " $";
    const EURO = "  €";

    private static function ajout($nombre)
    {
        if (is_int($nombre) && $nombre < 10) {
            echo  "plus petit que 10".self::EURO;
        } else {
            echo $nombre;
        }
    }



}