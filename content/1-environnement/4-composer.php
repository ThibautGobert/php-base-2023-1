<div class="row">
    <div class="col-md-12 text-center">
        <img class="img-fluid" src="/img/composer.png" alt="image de composer">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>Qu'est ce que <a target="_blank" href="https://getcomposer.org/">composer</a> ?</h5>
        <p>
            Composer est un gestionnaire de dépendances pour le langage PHP. <br>
            Il permet de gérer efficacement les librairies tierces et leurs dépendances ainsi que <a target="_blank" href="https://stackoverflow.com/a/7987085/9450712">l'autoload</a>.<br>
            Il résout automatiquement les conflits de versions entre différentes librairies et facilite le processus d'installation, de mise à jour et de suppression des dépendances.
            <br>
            <em>Si vous utilisez Laragon, composer est disponible sans avoir besoin de l'installer. <br>
                Pour vérifier si composer est disponible de manière globale vous pouvez simplement taper "composer" dans une console,
                s'il est installé la liste des commandes disponibles s'affichera.</em>
        </p>
       <ul>
           <li>
               <b>Gestion des dépendances : </b>
               <br>
               Composer permet de spécifier les librairies tierces nécessaires à votre application et gère automatiquement leur installation et leur mise à jour.
           </li>
           <li>
               <b>Résolution des conflits de versions : </b> <br>
               Composer s'occupe de résoudre les conflits de versions entre les différentes dépendances, garantissant ainsi la compatibilité entre les librairies utilisées.
           </li>
           <li>
               <b>Chargement automatique des classes :</b> <br>
               Composer génère automatiquement un fichier d'autoload qui charge les classes nécessaires à partir des librairies tierces, simplifiant ainsi l'inclusion des fichiers dans votre projet.
           </li>
           <li>
               <b>Installation simple et rapide : </b> <br>
               Composer est facile à installer et fonctionne sur la plupart des systèmes d'exploitation. Il est également extensible et personnalisable selon vos besoins spécifiques.
           </li>
       </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>Installer une librairie tierce avec composer.</h5>
        <ul>
            <li>
                À l'aide d'un terminal, se placer dans le répertoire racine de l'application.
            </li>
            <li>
                Utiliser la commande "composer require" pour installer la librairie
<div class="editor">
    composer require nom-de-la-librairie
</div>
            </li>
            <li>
                Composer va télécharger les fichiers nécessaires et les placer dans un dossier vendor à la racine du projet.
            </li>
            <li>
                Composer va également générer un fichier d'autoload dans le dossier vendor, il faut inclure ce fichier au lancement de l'application
<div class="editor">
    //Dans index.php
    require '../vendor/autoload.php';
</div>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>Définir le namespace d'une application à l'aide de composer.</h5>
        <p>
            Un des avantages de composer est la possibilité de gérer l'autoload de notre application,
            cela concerne l'autoload des librairies tierces ainsi que nos propres classes. <br>
            Pour charger nos classes de manière propre et efficace, le plus simple est de définir un <a target="_blank" href="https://www.php.net/manual/fr/language.namespaces.rationale.php">namespace</a>.
            <br>
            Voici la manière de procéder :
        </p>
        <ul>
            <li>
                Si votre projet n'a pas encore de fichier composer.json il faut le créer (il se crée automatiquement à l'installation d'une librairie).
            </li>
            <li>
                Il faut ensuite choisir le nom de notre namespace, il n'a aucune importance, il doit simplement respecter le PascalCase (une majuscule en début de mot et pas d'espace entre les mots, ex : UnePhraseEnPascalCase).
                <br>
            </li>
            <li>
                dans le fichier composer.json, ajouter une clé "autoload", suivi d'un clé <a target="_blank" href="https://www.php-fig.org/psr/psr-4/">PSR-4</a>.
                <br>
                Il ne reste plus qu'à indiquer le nom du namespace suivi de deux backslash et d'indiquer le dossier qu'on a choisi.
<div class="editor">
{
    "autoload": {
        "psr-4": {
            "MonSuperNamespace\\": "un-dossier"
        }
    }
}
</div>
            </li>
        </ul>
        <p>
            Les classe se trouvant dans le dossier "un-dossier" se trouveront donc dans le namespace MonSuperNamespace,
            pour les utiliser dans un autre namespace il faudra juste les inclure à l'aide de "use MonSuperNamespace\MaSuperClasse;"
        </p>
    </div>
</div>