<?php

/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 12/10/2016
 * Time: 21:49
 */
class personnage
{

    //les propiétés sont des variables
    public $vie = 80;
    //public visible de partout , dans la calasse et a l exterieur
    public $atk = 20;
    //private  accesible dans la classe UNIQUEMENT
    protected $nom;
    //accessible dans les classes qui héritent et dans la classe UNIQUEMENT

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }





    //méthoes -> fonction
    public function __construct($nom)
    {
        $this->nom = $nom;
    }


    public function crier()
    {
        echo "Banzai!!!!!!";
    }

    public function regenerer($vie = null)
    {
        if (is_null($vie)) {
             $this->vie = 100;
        } else {
             $this->vie += $vie;
        }

    }

    public function mort()
    {
        return $this->vie <= 0;
    }

    public function attaque($cible)
    {
        $this;//attaquant
        $cible;//cible

        $cible->vie -= $this->atk;

    }


}