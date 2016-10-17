<?php

/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 16/10/2016
 * Time: 22:03
 */
class Archer extends Personnage
{
    protected $vie = 40;

    public function __construct($nom,$atk)
    {
        $this->vie = $this->vie/2;
        parent::__construct($nom);
    }

    public function attaque($cible)
    {
        $this;//attaquant
        $cible;//cible

        $cible->vie -= $this->atk;
        parent::attaque($cible);
    }
}

class arbalete extends Archer {

}