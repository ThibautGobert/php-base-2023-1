<div class="row mb-3">
    <div class="col-md-12">
        <h1 class="text-center"><?= $title ?></h1>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-12 text-center">
        <a target="_blank" href="https://www.php.net/">
            <img class="img-fluid w-50"  src="/img/logo_php.png" alt="logo php">
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5 class="mb-2">Structure et fonctionnement du projet</h5>
        <p>
            Ce projet n'utilise pas de base de données dans le but d'avoir quelque chose de simple à utiliser pour découvrir le PHP.
            <br>
            La structure du projet est composée de 4 dossiers principaux et de quelques fichiers à la racine (pas de panique si vous ne comprenez pas tout).
            <br>
            Le dossier "content" contient différents dossiers que l'on retrouve dans le menu, chaque dossier contient des fichiers .php qui alimentent les éléments du menu.
            <br>
            Pour ajouter un élément à un menu, il suffit d'ajouter un fichier .php dans le dossier correspondant.
            <br>
            Le système n'est (volontairement) pas parfait, mais nous permettra de faire des exercices dans un environnement simple.
            <br>
            Le dossier public contient le "point d'entrée" de l'application, le fichier index.php ainsi que ce qui peut être accessible de manière publique sur notre application, le css ainsi que le javascript et les images.
        </p>
    </div>
</div>
<div class="row justify-content-end">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-body">
                <b class="text-info"><i class="fa-solid fa-circle-info me-2"></i>Dans un premier temps, le but de ce projet n'est pas que vous en compreniez le fonctionnement.</b>
                <br>
                On va l'utiliser pour avoir un environnement de travail ludique avec quelques outils à disposition :
                <ul>
                    <li>
                        <a target="_blank" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap (framework css très utilisé dans le développement web)</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://fontawesome.com/">Font Awesome (librairie mettant à disposition une multitude d'icônes)</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://github.com/symfony/var-dumper">Un débugger</a> plus sympa que les fonctions
                        <a target="_blank" href="https://www.php.net/manual/fr/function.var-dump.php">var_dump()</a>
                            ou <a target="_blank" href="https://www.php.net/manual/fr/function.print-r">print_r()</a> de PHP
                    </li>
                    <li>Une petite librairie JavaScript permettant d'afficher du code dans un élément HTML :
                        <a target="_blank" href="https://ace.c9.io/">Ace</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>