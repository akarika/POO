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
$monstre = new Monstre("montre1",5,20);
var_dump($monstre);
$monstre->attaque($perso1);
var_dump($perso1);
