
/**************************************/
          RECAP CLASSE & POO
/**************************************/

### Qu'est-ce qu'une classe ?
Une classe est une représentation abstraite d'un objet de la vie courante en programmation.

### 3 indices de visibilité :
- public : accessible en dehors de la classe
- private : seulement à l'intérieur de la classe
- protected : seulement à l'intérieur de classe et ses classes enfants

### Attributs :
- Toujours PRIVATE (car on oblige la modification et l'accès des attributs par des fonctions plutôt que directement => encapsulation des classes)
- On pense à les typer (Le "?" représente le fait que l'attribut peut être "null")

### $this : 
Représente la classe en cours

### Getter/Setter :
- Toujours PUBLIC
- Un getter et setter par attributs private (99.99% du temps)
- Getter :
  - Récupère (donc return) la valeur de l'attribut private (convention de nommage : get + nom de l'attribut à récupérer en Pascal Case) et on pense à typer le retour de la fonction...
- Setter :
  - Modifie (donc pas de return) la valeur de l'attribut private (convention de nommage : get + nom de l'attribut à récupérer en Pascal Case) et la fonction aura un paramètre du même type que l'attribut en question pour venbir affecter l'attribut

### constructor
Si l'on ne renseigne pas de constructeur alors un constructeur vide sera "créé" implicitement
Le constructeur est appelé implicitement par le mot clé "new NOM_CLASSE"

### destruct
Officiellement il détruit les objets créés - mais on a pas besoin de l'appeler

PHP libère la mémoire utilisée par les objets automatiquement lorsque vous n'en avait plus besoin, on appelle ça : **garbage collector**

### héritage
On déclare une classe qui hérite d'une autre par le mot clé : **extends**

Une classe qui hérite d'une autre bénéficie de tous les attributs et méthodes de la classe parente (selon la visibilité bien sûr...)

Toute méthode décrite dans la classe parente, peut être réécrite (override) dans les classes enfants.
- Si la classe enfant ne redéfinit pas la méthode, alors la méthode de la mère sera appelée
- Si la classe enfant redéfinit la méthode, alors la méthode de l'enfant sera appelée
  (on ne peut que réécrire le corps de la méthode)

Le mot clé "parent::METHOD" permet tout de même de rappeler le comportement de la classe mère et ce même si l'on réécrit la méthode.

Abstract est un mot clé utilisé au niveau des classes, afin d'indiquer que la classe est une classe abstraite : elle ne peut être instanciée que par le biais de ses enfants
A l'intérieur de celle-ci, on peut mettre des méthodes "abstract" qui sont des méthodes sans corps, c'est-à-dire que l'on oblige les classes enfants à les redéfinir (écrire le corps de la méthode)
