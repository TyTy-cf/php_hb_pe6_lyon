
/**************************************/
          RECAP CLASSE & POO
/**************************************/

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

