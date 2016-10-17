<?php

/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 16/10/2016
 * Time: 01:00
 */

/**
 * Class Personnage notre modéle de personnage
 */
/**
 * charge tout nos classes automatiquement ainsi que mes méthodes et attributs
 */
require 'autoloader.php';
Autoloader::register();

$perso1 = new personnage("Heroe", 20);
$perso2 = new Personnage("Power", 35);

$perso1->attaque($perso2);
$perso2->attaque($perso1);

Personnage::regeneration($perso1);
var_dump($perso1);
$monstre1 = new Monstre("petit_monstre",10,50);
var_dump($monstre1);
$monstre1->attaque($perso1);
var_dump($perso1);
