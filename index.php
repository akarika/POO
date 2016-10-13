<?php
/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 12/10/2016
 * Time: 21:49
 */
require "personnage.php";

$merlin = new personnage("merlin");
$merlin->regenerer();





var_dump($merlin);



$harry = new personnage("harry");
$harry->vie = 60;



$merlin->attaque($harry);
if ($harry->mort()){
    echo "harry est mort";
}else{
    echo "Encore debout avec ".$harry->vie."de vie";
}

var_dump($harry);
echo $merlin->getNom();