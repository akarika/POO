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
    private $vie = 80;
    //public visible de partout , dans la calasse et a l exterieur
    private $atk = 20;
    //private  accesible dans la classe UNIQUEMENT
    protected $nom;
    //accessible dans les classes qui héritent et dans la classe UNIQUEMENT
    const VIE_MAX  = 100;
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

private function empecher_vie_negatif(){
    if ($this->vie<0){
        $this->vie=0;
    }
}



    public function getVie(): int
    {
        return $this->vie;
    }

    /**
     * @param int $vie
     */
    public function setVie(int $vie)
    {
        $this->vie = $vie;
    }


    //méthoes -> fonction
    public function __construct($nom="")
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
             $this->vie = self::VIE_MAX;
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
        $cible->empecher_vie_negatif();
    }


}
class blog {
   public $titre = "";


}