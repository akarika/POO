<?php
/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 12/10/2016
 * Time: 21:49
 */
require "personnage.php";
$blog = new blog();
var_dump($blog);
$merlin = new personnage("merlin");
$merlin->regenerer();


var_dump($merlin);



$harry = new personnage("harry");
$harry->setVie(5);



$merlin->attaque($harry);
if ($harry->mort()){
    echo "harry est mort il a ".$harry->getVie()."de vie";
}else{
    echo "Encore debout avec ".$harry->getVie()."de vie";
}
$test=new personnage;

echo $merlin->getNom();
var_dump($test);

