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
class Personnage
{
    /**
     * @var int
     */
    private $vie = 100;
    /**
     * @var int
     */
    private $soin = 30;
    /**
     * @var nom à définir avec le setteur
     */
    private $nom;
    /**
     * @var int
     */
    private $atk = 10;

    public function __construct($name, $atk)
    {
        $this->setNom($name);
        $this->setAtk($atk);

    }

    /**
     * @return int retourne la vie
     */
    public function getVie() :int
    {
        return $this->vie;
    }

    /**
     * @param $vie prend un int
     * @return int|string
     */
    public function setVie($vie)

    {
        return is_int($vie) ? $this->vie = $vie : "Veuillez utilisé des lettres";
    }

    /**
     * @param $nom prend une string
     * @return int|string
     */
    public function setNom($nom)
    {
        return is_string($nom) ? $this->nom = $nom : "Veuillez utilisé des chifres";

    }

    /**
     * @return nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    public function getAtk(): int
    {
        return $this->atk;
    }


    public function setAtk($atk)
    {
        return is_int($atk) ? $this->atk = $atk : "Veuillez utilisé des chifres";
    }

    public function attaque($attaqué)
    {
        $attaqué->vie -= $this->atk;
        echo "{$this->getNom()}  attaque {$attaqué->getNom()}  avec {$this->getAtk()} d'attaque</br>";
    }

    public static function regeneration(){

    }

}

$perso1 = new personnage("Heroe", 20);
$perso2 = new Personnage("Power", 35);

var_dump($perso1);
var_dump($perso2);

$perso1->attaque($perso2);
$perso2->attaque($perso1);
var_dump($perso1);
var_dump($perso2);