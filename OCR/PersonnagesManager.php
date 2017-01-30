<?php
include "autoload.php";
Autoloader::register();


class PersonnagesManager
{
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function add(Personnage $perso)
    {
        $q = $this->_db->prepare('INSERT INTO personnages( id,nom, forcePerso, degats, experience) VALUES(:id,:nom, :forcePerso, :degats, :experience)');
        $q->bindValue(':nom', $perso->getNom(),PDO::PARAM_STR);
        $q->bindValue(':id', $perso->getId(),PDO::PARAM_STR);
        $q->bindValue(':forcePerso', $perso->getForcePerso(), PDO::PARAM_INT);
        $q->bindValue(':degats', $perso->getDegats(), PDO::PARAM_INT);
        $q->bindValue(':experience', $perso->getExperience(), PDO::PARAM_INT);

        $q->execute();
    }

    public function delete(Personnage $perso)
    {
        $this->_db->exec('DELETE FROM personnages WHERE id = '.$perso->getId());
    }

    public function get($id)
    {
        /*$id = (int) $id;*/

        $q = $this->_db->query('SELECT id, nom, forcePerso, degats, experience FROM personnages WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        var_dump( new Personnage($donnees));
    }

    public function getList()
    {
        $persos = [];

        $q = $this->_db->query('SELECT id, nom, forcePerso, degats, experience FROM personnages ORDER BY nom');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $persos[] = new Personnage($donnees);
        }

        return $persos;
    }

    public function update(Personnage $perso)
    {
        $q = $this->_db->prepare('UPDATE personnages SET forcePerso = :forcePerso, degats = :degats,  experience = :experience WHERE id = :id');

        $q->bindValue(':forcePerso', $perso->getForcePerso(), PDO::PARAM_INT);
        $q->bindValue(':degats', $perso->getDegats(), PDO::PARAM_INT);
        $q->bindValue(':experience', $perso->getExperience(), PDO::PARAM_INT);
        $q->execute();
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}

$perso = new Personnage([
    'id'=>56,
    'nom' => 'Victor',
    'forcePerso' => 11,
    'degats' => 21,
    'experience' => 50
]);$perso2 = new Personnage([
    'id'=>23,
    'nom' => 'diER',
    'forcePerso' => 11,
    'degats' => 22,
    'experience' => 50
]);

$db = new PDO('mysql:host=localhost;dbname=ocr_poo_4;charset=utf8', 'root', 'root');
$manager = new PersonnagesManager($db);
$manager->add($perso);
$manager->add($perso2);
$manager->delete($perso2);

var_dump($perso2);
