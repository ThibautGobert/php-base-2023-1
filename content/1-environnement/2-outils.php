<div class="row">
    <div class="col-md-12">
        <h5>Quels sont les outils dont on a besoin pour faire fonctionner PHP ?</h5>
        <p>
            Lorsqu'on crée une page web dite statique, il nous suffit de créer un fichier .html et d'insérer le code html dedans
            pour que le navigateur soit capable d'interpréter le fichier.
        </p>
        <p>
            Lorsqu'on crée une page en PHP, on travaille dans un fichier .php qui doit d'abord être interprété par un serveur et converti en HTML
            pour que le navigateur soit capable de le lire.
        </p>
        <p>
            -On a donc besoin d'un serveur (ex : <a target="_blank" href="https://httpd.apache.org/">Apache</a>,
            <a target="_blank" href="https://docs.nginx.com/nginx/admin-guide/web-server/web-server/">NGINX</a>) <br>
            -PHP doit être installé sur le serveur <br>
            -Bien que ce ne soit pas obligatoire, dans la plupart des cas on utilisera une base de données pour stocker / récupérer les données relatives à notre application.
            <br>
            Le type de base de données le plus couramment utilisée dans des applications web développées en PHP est MySql / MariaDB
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>Quels sont les outils dont on a besoin pour développer en PHP ?</h5>
        <p>
            Comme on l'a vu au point précédent, nous avons besoin de PHP installé sur un serveur. <br>
            Lorsqu'on développe, ce serveur n'est rien d'autre que notre propre ordinateur, on parlera dans ce cas d'un serveur local.
            <br>
            Le minimum requis sera donc :
        </p>
        <ul>
            <li>PHP installé sur notre machine.</li>
            <li>Un seveur local</li>
            <li>Un éditeur de texte</li>
        </ul>
        <p>
            La première solution serait donc d'installer séparément PHP, Apache et MySql sur notre ordinateur,
            c'est tout à fait possible mais peut vite devenir laborieux en fonction de notre système d'expoitation (Windows, Linux ou encore MacOs).
            <br>
            <a target="_blank" href="https://gowild.digital/how-to-setup-apache-php-and-mysql-on-windows-10/">Installation manuelle sur Windows</a>
            <br>
            <a target="_blank" href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-22-04">Installation manuelle sur Linux</a><br>
            <a target="_blank" href="https://gist.github.com/dreamsparkx/45fba1a25d6b175283a456b19f935ca3">Installation manuelle sur Mac via homebrew</a>
        </p>
        <p>
            Différents outils, plus ou moins complets et simples d'utilisation existent, la plupart proposent PHP, Apache et MySQL en une seule application :
        </p>
        <ul>
            <li><a target="_blank" href="https://www.apachefriends.org/fr/index.html">XAMPP</a> (Windows, Mac)</li>
            <li><a target="_blank" href="https://www.wampserver.com/">WAMP</a> (Windows)</li>
            <li><a target="_blank" href="https://laragon.org/">Laragon</a> (Windows)</li>
            <li><a target="_blank" href="https://www.mamp.info/">MAMP</a> (Windows et Mac)</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>Virtual host (vhost) ou hébergement virtuel en Français</h5>
        <p>
            Le but ici n'est pas de faire de vous des dieux en configuration de vhost mais simplement de savoir que ça existe et à quoi ça sert.
            <br>
            Une fois un serveur Apache installé sur notre machine, il écoutera par défaut sur le port 80 et on pourra accéder à notre projet situé dans le dossier racine (www, htdocs, ...) configuré via l'adresse ip 127.0.0.1 (localhost).
            <br>
            <small class="text-info">
                Le port utilisé par défaut dans un navigateur lorsqu'on entre une adresse en HTTP est le 80, en HTTPS c'est le port 443, pour utiliser tout autre port il faut le préciser après l'adresse. Ex : http://une-adresse-qui-utilise-un-port-exotique:9876
            </small>
            <br>
            La limitation qu'on a avec cette configuration est que l'on ne peut travailler que sur un seul projet sur notre ordinateur (celui qui se situe dans notre dossier racine).
            <br>
            C'est là que les vhost viennent à notre secours :) <br>
            Un vhost va nous permettre de pouvoir dire à Apache dans quel dossier il doit aller en fonction de l'URL saisie.
            <br>
            En savoir plus sur les vhost : <a target="_blank" href="https://fr.wikipedia.org/wiki/H%C3%A9bergement_virtuel">Wikipedia</a>
            <a target="_blank" href="https://httpd.apache.org/docs/2.2/fr/vhosts/examples.html">Apache</a> <br>
            Heureusement pour nous, Laragon va nous éviter de devoir les créer nous même grâce à son option de configuration automatique des vhost !
            <br>
            À chaque fois que l'on va créer un nouveau dossier dans notre dossier racine, il nous suffit de recharger Apache via Laragon, ce dernier va détecter notre nouveau projet et nous proposer de créer automatiquement le vhost correspondant.
            <br>
            Les vhost créés respecteront la convention de nommage défini dans les préférences de Laragon (accessible via <i class="fa-solid fa-gear"></i> en haut à droite de la fenêtre).
            <br>
            Sous la case à cocher 'Auto create virtual hosts', un input nous permet de définir le template, ex : iepsa.{name}
            <br>
            Avec ce template, les virtual hosts créés nous permettront d'accéder à nos projets via l'url http://iepsa.nom_du_dossier_du_projet.
        </p>
    </div>
</div>