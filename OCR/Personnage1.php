<?php
class Personnage
{
    private $_force;
    private $_experience;
    private $_degats;

    public function __construct($force,$degat){
        $this->setForce($force);
        $this->setDegats($degat);
        $this->_experience = 1;
    }



    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->_degats += $this->_force;
    }

    public function gagnerExperience()
    {
        $this->_experience++;
    }

    // Mutateur chargé de modifier l'attribut $_force.
    public function setForce($force)
    {
        if (!is_int($force)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
        {
            trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_force = $force;
    }

    /**
     * @param mixed $degats
     */
    public function setDegats($degats)
    {
        $this->_degats = $degats;
    }

    // Mutateur chargé de modifier l'attribut $_experience.
    public function setExperience($experience)
    {
        if (!is_int($experience)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($experience > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
        {
            trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_experience = $experience;
    }

    // Ceci est la méthode degats() : elle se charge de renvoyer le contenu de l'attribut $_degats.
    public function degats()
    {
        return $this->_degats;
    }

    // Ceci est la méthode force() : elle se charge de renvoyer le contenu de l'attribut $_force.
    public function force()
    {
        return $this->_force;
    }

    // Ceci est la méthode experience() : elle se charge de renvoyer le contenu de l'attribut $_experience.
    public function experience()
    {
        return $this->_experience;
    }
}
function chargerClasse($classe)
{
    require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.


$perso1 = new Personnage(80,10); // Un premier personnage
$perso2 = new Personnage(40,2); // Un second personnage


$perso1->frapper($perso2);  // $perso1 frappe $perso2
$perso1->gagnerExperience(); // $perso1 gagne de l'expérience

$perso2->frapper($perso1);  // $perso2 frappe $perso1
$perso2->gagnerExperience(); // $perso2 gagne de l'expérience

echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';


