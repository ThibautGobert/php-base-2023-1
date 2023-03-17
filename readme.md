## Projet de découverte du language PHP

![Logo PHP](/public/img/logo_php.png)

>Ce projet a pour but de nous fournir un environnement de travail ludique pour découvrir les bases du language PHP.

>**Pas de panique si vous ne comprenez pas comment fonctionnent les choses**, 
> la seule chose à comprendre pour le moment est que vous pouvez faire les exercices directement dans les fichiers concernés, à la suite de l'énoncé.


### Structure et fonctionnement du projet
- Ce projet n'utilise pas de base de données dans le but d'avoir quelque chose de simple à utiliser pour découvrir le PHP.
- La structure du projet est composée de 4 dossiers principaux et de quelques fichiers à la racine.
- Le dossier "content" contient différents dossiers que l'on retrouve dans le menu, chaque dossier contient des fichiers .php qui alimentent les éléments du menu.
Pour ajouter un élément à un menu, il suffit d'ajouter un fichier .php dans le dossier correspondant.
- Le système n'est (volontairement) pas parfait, mais nous permettra de faire des exercices dans un environnement simple.
- Le dossier public contient le "point d'entrée" de l'application, le fichier index.php ainsi que ce qui peut être accessible de manière publique sur notre application, le css ainsi que le javascript et les images.

### Outils à disposition
- [Bootstrap 5](https://getbootstrap.com/docs/5.0/getting-started/introduction/)  : Framework css largement utilisé dans le monde du développement web
- [Font Awesome 6.3](https://fontawesome.com/) : Librairie mettant à disposition des icônes.
- [Var Dumper](https://github.com/symfony/var-dumper) : Une librairie PHP qui nous donne accès à une fonction de débug `dd()` plus sympa que les fonctions de PHP `var_dump()` ou `print_r()`
- [Ace](https://ace.c9.io/) : Une librairie JavaScript qui permet d'afficher du code dans un élément HTML

### Installation
- Récupérer le repository
- Configurer un virtual host pour qu'il pointe sur le fichier index.php dans le dossier public (si vous utilisez Laragon, il le créera pour vous).
- Copier/coller le fichier config.exemple.php et le renommer en config.php
- Si tout est bien configuré vous pouvez accéder à l'application via l'url définie dans votre virtual host;
- *Le dossier vendor est inclus dans le repository, normalement il ne doit pas être versionné, mais l'a été pour facilité sont installation, nous reviendrons là-dessus plus tard dans le cours*.

### Resources utilisées
-  [php.net](https://www.php.net/) : Site officiel de PHP.
-  [OpenClassRooms](https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql) : Consevez votre site web avec PHP et MySQL.
-  [Grafikart sur YouTube](https://www.youtube.com/@grafikart) : Chaine YouTube Grafikart.
-  [Site web Grafikart](https://grafikart.fr/formations/php) : Formation PHP sur grafikart.fr.
-  [Udemy](https://www.udemy.com/course/php-formation-complete-pour-debutants/) : Formation PHP sur Udemy.
-  [pPhind](https://www.phind.com/) : phind pour la rédaction (**attention : Phind a été utilisé comme un outil d'aide à la rédaction, pas comme une source de connaissance**).



test rebase