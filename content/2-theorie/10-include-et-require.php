<div class="row">
    <div class="col-md-12">
        <h5>Inclure des fichiers dans un script PHP</h5>
        <p>
            Les fonctions include et require servent à inclure un fichier PHP dans un autre fichier PHP.<br>
            La différence entre les deux est que require génère une erreur fatale si le fichier n'est pas trouvé,
            tandis qu'avec include, un avertissement sera généré et le script continuera d'exécuter le reste du code.
        </p>
        <p>
            Il y a deux manières générales d'utiliser ces fonctions : <br>
            -Inclure du code PHP pour par exemple définir des fonctions (ou des classes) qui seront utilisables par la suite.
            -Inclure des fichiers contenant principalement du code HTML, ce qui permet de gérer/décomposer des "vues" en plusieurs fichiers
            (par exemple un footer, une barre de navigation, etc...).
        </p>
        <p>
            <strong><i class="fa fa-warning"></i>Attention</strong><br>
            Il est important de bien comprendre la manière dont les fichiers sont inclus : <br>
            -Lors d'un simple include/require, il suffit de renseigner le chemin vers le fichier cible. <br>
            -Lorsque le fichier inclus contient lui aussi un autre include/require,
            il faudra toujours concaténer la constante PHP <a target="_blank" href="https://www.php.net/manual/fr/language.constants.magic.php">__DIR__</a> avec le chemin vers le fichier afin que PHP puisse le retrouver.
        </p>
<div class="editor">
    require __DIR__ . '../views/template.php'
</div>
        <p>
            Un fichier inclus l'est directement au moment de l'appel à la fonction, ce qui pose problème lorsque l'on souhaite par exemple gérer un template.
            <br>
            En effet, si nous avons un fichier pour une barre de navigation, un autre pour un footer et encore un autre pour un layout qui lui contient les deux autres,
            nous aurons un problème pour y inclure un contenu dynamique (voir notre projet gestion template).
            <br>
            Nous avons vu que dans ce cas, nous pouvons utiliser les fonctions natives de php
            <a target="_blank" href="https://www.php.net/manual/fr/function.ob-start.php">ob_start()</a>
            et <a target="_blank" href="https://www.php.net/manual/fr/function.ob-get-clean.php">ob_get_clean()</a>.
            <br>
            ob_start() dit à php de stocker en mémoire tout ce qui est censé être affiché. <br>
            ob_get_clean() nous retourne ce qui a été stocké et nous permet de l'injecter dans une portion de page à l'aide d'une simple variable.
        </p>
<div class="editor">
    //On souhaite inclure la portion de page "home" dans un template
    ob_start();
    require __DIR__ . '../views/home.php';
    $content = ob_get_clean();


    //dans le fichier template on peut faire ceci pour afficher le contenu stocké dans la variable $content
    require __DIR__ . '../views/includes/navbar.php;
    &lt;?= $content ?&gt;
    require __DIR__ . '../views/includes/footer.php';
</div>
    </div>
</div>



