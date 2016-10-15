#POO

### C'est quoi la POO (Programmation orientée objet)?

  La POO est un concept où un "objet"(class) est une entitée qui possède des **attributs**($variable), et des **méthodes** (function).

###Concevoir un objet


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

##### Visibilité

Les attributs de **visibilité** indique à une **méthode** ou **propriétés** sont accès.

```public``` 		accessible à **l'intérieur** mais aussi à **l'extérieur** de la classe

```private``` 	 accessible à **l'intérieur** de la classe **seulement**

```protected``` 	 accessible à **l'intérieur** de la classe et des classes **héritées**

_Exemple conception _ :

```php
class Personnage{
	private $vie = 100;
	private $soin = 30;
	public $nom;
	public $atk = 10;
}
```
##### Mais comment on accède aux attributs en dehors de la classe alors ? 
On utilise des accesseurs(getter) pour accéder à aux informations(lire) , et mutateurs(setter) pour modifier les données.

Pour accéder à $vie on crée la méthode : **get**nomAttribut

```php
class Personnage{
	public function getVie(){
		return $this->vie = $vie;
	}
}
```

Pour modifier $vie on création la méthode **set**nomAttribut

```php
class Personnage{
	public function setVie($vie){
		return $this->vie = $vie;
	}
}
```
