<?php

/**
 * Created by PhpStorm.
 * User: remyroux
 * Date: 26/10/2016
 * Time: 21:02
 */
class Personnage
{
    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degats;
    private $_niveau;
    private $_experience;

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->_experience;
    }

    /**
     * @return mixed
     */
    public function getDegats()
    {
        return $this->_degats;
    }

    /**
     * @return mixed
     */
    public function getForcePerso()
    {
        return $this->_forcePerso;
    }

    /**
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->_niveau;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    /*les valeurs possibles de l'identifiant sont tous les nombres entiers strictement positifs ;
    les valeurs possibles pour le nom du personnage sont toutes les chaînes de caractères ;
    les valeurs possibles pour la force du personnage sont tous les nombres entiers allant de 1 à 100 ;
    les valeurs possibles pour les dégâts du personnage sont tous les nombres entiers allant de 0 à 100 ;
    les valeurs possibles pour le niveau du personnage sont tous les nombres entiers allant de 1 à 100 ;
    les valeurs possibles pour l'expérience du personnage sont tous les nombres entiers allant de 1 à 100.*/

    public function setId($id)
    {
        $id = (int)$id;
        if ($id > 0) {
            $this->_id = $id;
        } else {
            echo "Entre un entier positif";
        }

    }

    public function setNom($nom)
    {
        if (is_string($nom) && strlen($nom) <= 30) {
            $this->_nom = $nom;
        } else {
            echo "Veuillez entrer des lettres";
        }

    }

    /**
     * @param mixed $degats
     */
    public function setDegats($degats)
    {
        $degats = (int)$degats;

        if ($degats >= 1 && $degats <= 100) {
            $this->_degats = $degats;
        } else {
            echo "entrer un entier entre 1 et 100";
        }

    }

    public function setForcePerso($force)
    {
        $force = (int)$force;

        if ($force >= 1 && $force <= 100) {
            $this->_forcePerso = $force;
        } else {
            echo "entrer un entier entre 1 et 100";
        }

    }

    public
    function setExperience($experience)
    {
        $experience = (int)$experience;

        if ($experience >= 1 && $experience <= 100) {
            $this->_experience = $experience;
        } else {
            echo "entrer un entier entre 1 et 100";
        }

    }

    function setNiveau($niveau)
    {
        $niveau = (int)$niveau;

        if ($niveau >= 1 && $niveau <= 100) {
            $this->_niveau = $niveau;
        } else {
            echo "entrer un entier entre 1 et 100";
        }

    }


}

