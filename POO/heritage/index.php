<?php
/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 12/10/2016
 * Time: 21:49
 */
require "perso.php";
require "Archer.php";
$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");

$legolas = new Archer("Legolas");


var_dump($merlin,$harry,$legolas);
$legolas->attaque($harry);
var_dump($merlin,$harry,$legolas);