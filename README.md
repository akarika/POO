#POO

## C'est quoi la POO (Programmation orientée objet)?

  La POO est un concept où un "objet"(class) est une entitée qui possède des **attributs**($variable), et des **méthodes** (function).

##Concevoir un objet  


*c'est définir une classe...*


Les classes contiennent la **définition** des objets que l'on va créer par la suite.
> Prenons l'exemple le plus simple du monde : les gâteaux et leur moule. Le moule est unique. Il peut produire une quantité infinie de gâteaux. Dans ce cas-là, les gâteaux sont les **objets** et le moule est la **classe** : le moule va définir la forme du gâteau

Dans un exemple plus concret

> Un blog contient des articles .Un article peut être un **objet**, possédant des **attributs** (texte, titre, date de création), des **méthodes**(affiches le contenu).

_Création d'une classe_ :

```php
class nomDeClasse{
}

```

_Création attributs_ :


```php
class nomDeClasse{
	public $variable;
}
```
_Création méthodes_ :

```php
class nomDeClasse{

	public function nomFonction{

	}
}
```

#### Visibilité

Les attributs de **visibilité** indique à une **méthode** ou **propriétés** sont accès.

```public``` 		accessible à **l'intérieur** mais aussi à **l'extérieur** de la classe

```private``` 	 accessible à **l'intérieur** de la classe **seulement**

```protected``` 	 accessible à **l'intérieur** de la classe et des classes **héritées**

_Exemple conception_ :

```php
class Personnage{
	private $vie = 100;
	private $soin = 30;
	private $nom ;
	public $atk = 10;
}
```
#### Mais comment on accède aux attributs en dehors de la classe alors ? 
On utilise des accesseurs(getter) pour accéder à aux informations(lire) , et mutateurs(setter) pour modifier les données.

Pour accéder à $vie on crée la méthode : **get**nomAttribut

```php
class Personnage{
	public function getVie(){
		return $this->vie = $vie;
//retourne la vie de l'objet courant c-a-d `$perso1`
	}
}
```

Pour modifier $vie on création la méthode : **set**nomAttribut

```php
class Personnage{
	public function setVie($vie){
		return $this->vie = $vie;
//modofie et retourne la vie de l'objet courant c-a-d `$perso1`
	}
}
```
Nous utilisons le mot **$this** pour faire référence à l'objet courant utilisé



##Création de l'objet

Pour utiliser l'objet crée nous allons instancier   la classe précédemment conçu .
Chaque instance de cette classe possédera ainsi tous ces attributs et méthodes. 
```php
$nomObjet = new nomClass;
```

Avec la classe Personnage
```php
$perso1 = new Personnage;
```
Si nous faisons affichons les informations  de `$perso1` **var_dump**(*$perso1*) et la `classPersonnage` **var_dump**(new *personnage*());

<img src="http://img4.hostingpics.net/pics/679182Capturedecran20161016a015010.png" alt="Hebergeur d'image" />

Nous voyons bien que l'objet `$perso1` issu de l'instanciation de `class Personnage` a conservé   tous les attributs et méthodes.



Une classe peut-être vu comme le modèle .

###Accéder aux attributs et méthodes 

_Pour appeler un attribut ou une méthode_ :

$nomObjet**->**attribut;

Affichons l'attaque de l'objet perso1

```php
echo $perso1->atk;
//10
```

$nomObjet**->**methode();

Nous utilisons le **getter**(accesseur) `getVie()` pour accéder à l'attribut `$vie` qui est **private**

```php
echo $perso1->getVie();
//100
``` 
L'objet $perso1 n' pas de nom donnons lui en un .Nous utiliserons le **setter**(mutateur) `setVie()`

```php
$perso1->setNom("Heroe");
```
Si nous faisons un **var_dump**(*$perso1*)

<a target="_blank" href="http://www.hostingpics.net" title="Hebergeur d'image"><img src="http://img15.hostingpics.net/pics/719776Capturedecran20161016a115020.png" border="0" alt="Hebergeur d'image" /></a>

Nous avons bien modifié la valeur de l'attribut **$nom**.
Si vous essayez d'accéder ou modifier une propriétée **private** sans avoir créé un **getter** ou **setter** vous avez ce type d'erreur
```php
echo $perso1->vie;
```
<img src="http://img4.hostingpics.net/pics/570770Capturedecran20161016a115339.png" />

#### Pourquoi mettre les propriétés en private ? 


*Le principe d'encapsulation*

L'un des gros avantages de la POO est que l'on peut **masquer** le code à **l'utilisateur** (l'utilisateur est ici celui qui se servira de la classe, pas celui qui chargera la page depuis son navigateur).
**L'encapsulation** est un mécanisme consistant à rassembler les données et les méthodes au sein d'une structure en cachant l'implémentation de l'objet, c'est-à-dire en **empêchant** l'accès aux **données** par un autre moyen que les **services**(méthodes) proposés.


L'utilisateur **d'une classe** n'a pas forcément à savoir de quelle façon sont structurées les données dans l'objet, cela signifie qu'un utilisateur n'a pas à connaître l'implémentation. Ainsi, en **interdisant** l'utilisateur de **modifier** directement les attributs, et en **l'obligeant** à utiliser les fonctions **définies** pour les modifier (appelées interfaces), on est capable de **s'assurer** de l'intégrité des données (on pourra par exemple **s'assurer** que le **type** des données fournies est conforme à nos attentes, ou encore que les données se trouvent bien dans l'intervalle attendu). 

- Reprenons tous le code de la class Personnage documenté 

```php


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
    public $atk = 10;

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
        return is_string($nom) ? $this->nom = $nom : "Veuillez utilisé des chiffres";

    }

}
$perso1 = new personnage;
$perso1->setVie("Heroe");
```
IL est très fortement conseillé de **documenter** .Un code bien **documenté** est un code facile à **comprendre**. De plus les IDE modernes sont capable de comprendre et lire ces commentaire 

###Le constructeur 

Le rôle d'une fonction constructeur est de construire l'objet, c'est-à-dire de le préparer à une première utilisation. 

Nous voulons créer un personnage en initialisant des valeurs dés son instanciation.

```php
class Personnage {
...
public function __construct($name, $atk)
    {
        $this->setNom($name);
        $this->setAtk($atk);

    }
}
```
Maintenant dés la création de l'objet nous pouvons passer des paramètres 

```php
$perso1 = new personnage("Heroe",20);
$perso2 = new Personnage("Power",35);
```

Si nous faisons un **var_dump**(*$perso1*) et **var_dump**(*$perso2*)

<img src="http://img15.hostingpics.net/pics/151930Capturedecran20161016a132736.png" border="0" alt="Hebergeur d'image" />

Comment faire interagir les deux personnages ?

Nous voulons que perso1 attaque perso 2.

Créons une méthode attaque qui prend comme paramètre **l'attaqué**.

```php
class Personnage{
	...
	public function attaque($attaqué)
	{
       $attaqué->vie-=$this->atk;
	}
}
$perso1->attaque($perso2);
$perso2->attaque($perso1);
```
Cela nous affiche avec un **var_dump** et le `echo`

<img src="http://img4.hostingpics.net/pics/622442Capturedecran20161016a134228.png" border="0" alt="Hebergeur d'image" />

###Les propriétés et les méthodes statiques

 Elles peuvent être utilisées sans avoir besoin d'instancier la classe, On peut y accéder directement en utilisant le nom de la class
 
 _En gros ce sont des attributs et méthodes propres à la classe_ .
 
 - Créons une méthode statique pour régénérer la vie :
 
 ````php
 class Personnage{
    ...
    /**
    *@var int l'attribut $soin passe en statique afin d'être utilisé uniquement par la classe
    */
    private static $soin = 30;
    
     /**
     * @param $personnage est le personnage a soigner
     */
      public static function regeneration($personnage)
        {
                                //Personnage:: , self:: fait référence à la classe elle-même
            $personnage->vie += self::$soin;
    
            if ($personnage->vie > 100) {
                $personnage->vie = 100;
            }
            echo "{$personnage->getNom()} a maintenant {$personnage->vie} de vie.";
        }
 }
 
 ```

 
 