<div class="row">
    <div class="col-md-12">
        <h5>Les variables superglobales</h5>
        <p>
           Les <a target="_blank" href="https://www.php.net/manual/fr/language.variables.superglobals.php">variables superglobales</a> sont des variables propres au langage PHP.
            <br>
            Elle sont toujours disponibles, quel que soit le contexte <em>(elles peuvent être utilisées à l'intérieur de fonctions,
                de boucles et de conditions, ainsi que dans les scripts inclus ou les scripts appelés par l'intermédiaire d'une fonction comme
                <a target="_blank" href="https://www.php.net/manual/fr/function.include.php">include</a> ou
                <a target="_blank" href="https://www.php.net/manual/fr/function.require.php">require</a>).</em>
            <br>
            Voici les principales variables superglobales disponibles :
        </p>
        <ul>
            <li>$_GET : contient les données envoyées au script via la méthode HTTP GET.</li>
            <li>$_POST : contient les données envoyées au script via la méthode HTTP POST.</li>
            <li>$_SERVER : contient des informations sur le serveur et l'environnement d'exécution du script, comme le nom du serveur, le nom du fichier en cours d'exécution, l'adresse IP du client, etc.</li>
            <li>$_SESSION : contient les données stockées dans la session en cours.</li>
            <li>$_COOKIE : contient les données stockées dans les cookies.</li>
            <li>$_FILE : contient les informations sur les fichiers téléchargés via un formulaire HTML.</li>
        </ul>
        <p>
            Voici un exemple qui montre comment accéder à la variable superglobale $_SERVER pour afficher le nom du serveur :
        </p>
<div class="editor">
    echo "Nom du serveur : " . $_SERVER['SERVER_NAME'];
</div>
        <p>
            Il est important de noter que les variables superglobales sont des tableaux associatifs, c'est-à-dire qu'ils sont indexés par des chaînes de caractères qui représentent le nom de l'élément de données.
        </p>
    </div>
</div>


<form action="" method="post" enctype="multipart/form-data">
    <input type="text" class="form-control" name="prenom">
    <input type="text" class="form-control" name="nom">
    <input type="file" name="photo" class="form-control">
    <button class="btn btn-success" type="submit">Envoyer</button>
</form>
<?php
dd($_GET);

