<?php
namespace War;
/**
 * Created by PhpStorm.
 * User: tiw
 * Date: 17/10/2016
 * Time: 09:53
 */
class Personnage
{
    /**
     * @var int
     */
    protected $vie = 100;
    /**
     * @var int propriété propre à la class
     */
    protected static $soin = 30;
    /**
     * @var nom à définir avec le setteur
     */
    protected $nom;
    /**
     * @var int
     */
    protected $atk = 10;

    public function __construct($name, $atk)
    {
        $this->setNom($name);
        $this->setAtk($atk);

    }

    /**
     * @return int retourne la vie
     */
    public function getVie()
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

    public function getAtk()
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

    //création méthode propre à la class



    public static function regeneration($personnage)
    {
        $personnage->vie += self::$soin;

        if ($personnage->vie > 100) {
            $personnage->vie = 100;
        }
        echo "{$personnage->getNom()} a maintenant {$personnage->vie} de vie.";
    }

}