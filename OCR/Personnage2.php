<?php

class Personnage
{
    // Je rappelle : tous les attributs en privé !

    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    // Déclarations des constantes en rapport avec la force.

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    private static $_texte= "Chaud chaud chaud !!!";

    public function __construct($forceInitiale)
    {
        $this->setForce($forceInitiale);

    }

    public function deplacer()
    {

    }

    public function frapper()
    {

    }

    public function gagnerExperience()
    {

    }
     /**
     * @param string $texte
     */
    public static function texte()
    {
        echo self::$_texte ;
    }
     /**
     * @param mixed $force
     */
    public function setForce($force)
    {
        if (in_array($force, [self::FORCE_PETITE, self::FORCE_GRANDE, self::FORCE_MOYENNE])){
            $this->_force = $force;
        }

    }
    public static function parler(){
        echo "banzai";
    }

}

$perso = new Personnage(Personnage::FORCE_GRANDE);
var_dump($perso);
Personnage::parler();
$perso->texte();