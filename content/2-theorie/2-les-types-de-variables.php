<div class="row">
    <div class="col-md-12">
        <h5>Les types de variables en PHP ?</h5>
        <p>
            En PHP, il existe différents types de variables en fonction du type de valeur qu'elles peuvent contenir. Voici quelques exemples de types de variables couramment utilisés en PHP :
        </p>
        <ul>
            <li>Les nombres entiers (integer) : ce sont des nombres sans décimales, tels que 5, 10, -20, etc.</li>
            <li>Les nombres flottants (float) : ce sont des nombres avec des décimales, tels que 5.3, 10.9, -20.1, etc.</li>
            <li>Les chaînes de caractères (string) : ce sont des valeurs qui représentent des séquences de caractères, comme "hello world", "bonjour", etc.</li>
            <li>Les booléens (boolean) : ce sont des valeurs qui peuvent être soit true (vrai) soit false (faux).</li>
            <li><b>Les tableaux (array) : les tableaux sont des structures de données utilisées pour stocker et accéder à des ensembles de valeurs. Ils peuvent contenir des valeurs de n'importe quel type, y compris des nombres, des chaînes de caractères, des objets et même d'autres tableaux.</b></li>
        </ul>
        <p>
            Il existe d'autres types comme objet, NULL, callable... <a target="_blank" href="https://www.php.net/manual/fr/language.types.php">php.net</a>
            <br>
            Pour déclarer une variable en PHP, vous devez utiliser le signe dollar ($) suivi du nom de la variable, puis affecter une valeur à la variable. Le type de la variable sera déterminé automatiquement en fonction de la valeur affectée. Par exemple :
        </p>
    </div>
</div>
<div class="editor" >
    $age = 25; // variable de type integer
    $taille = 1.80; // variable de type float
    $prenom = "Marie"; // variable de type string
    $est_majeur = true; // variable de type boolean
</div>
<div class="row">
    <div class="col-md-12">
        <h5>Les tableaux</h5>
        <p>
            Il existe deux types de tableaux en PHP : les tableaux numériques et les tableaux associatifs. <br>
            Les tableaux numériques sont des tableaux indexés par des entiers, tandis que les tableaux associatifs sont des tableaux indexés par des chaînes de caractères (appelées clés).
            <br>
            Voici un exemple de tableau numérique en PHP :
        </p>
    </div>
</div>
<div class="editor" >
    //tableau utilisant la syntaxe historique de PHP
    $numbers = array(1, 2, 3, 4, 5);

    //tableau utilisant la syntaxe courte
    $numbers = [1, 2, 3, 4, 5];
</div>
<div class="row">
    <div class="col-md-12">
        <p>
            Dans cet exemple, le tableau $numbers est un tableau numérique contenant les valeurs 1, 2, 3, 4 et 5. <br>
            Chaque valeur est indexée par un entier, commençant à 0 pour la première valeur. <br>
            Par exemple, pour accéder à la troisième valeur (la valeur 3), vous pouvez utiliser l'expression $numbers[2].
            <br>
            Voici un exemple de tableau associatif en PHP :
        </p>
    </div>
</div>
<div class="editor">
    $person = [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'age' => 25,
    ];
    // pour afficher la valeur de first_name, on utilise la clé entre crochets
    $person['first_name'];
</div>
<div class="row">
    <div class="col-md-12">
        <p>
            Dans cet exemple, le tableau $person est un tableau associatif contenant les informations sur une personne.
            <br>
            Chaque entrée du tableau est associée à une chaîne de caractères (la clé), qui peut être utilisée pour accéder à la valeur correspondante.
            <br>
            Par exemple, pour accéder au prénom de la personne (la valeur "John"), vous pouvez utiliser l'expression $person['first_name'].
            <br>
            Les tableaux en PHP sont très utiles pour stocker et manipuler des ensembles de données. Ils peuvent être utilisés dans de nombreux contextes, notamment pour stocker des résultats de requêtes de base de données, pour gérer des formulaires Web, pour construire des menus dynamiques, etc.
        </p>
        <p>
            Il est important de noter que PHP est un langage de typage faible, ce qui signifie que vous pouvez changer le type d'une variable en cours d'exécution en lui assignant une nouvelle valeur de type différent.
            <br>
            Par exemple, vous pouvez changer une variable $name déclarée en tant que string en lui assignant un nombre entier, comme ceci :
        </p>
    </div>
</div>
<div class="editor">
    $name = 'John Doe';
    $name = 25; // maintenant $name est un entier
</div>
<div class="row">
    <div class="col-md-12">
        <p class="text-danger">
            Cette flexibilité peut être utile dans certains cas, mais peut également conduire à des erreurs si vous n'êtes pas vigilant.
        </p>
    </div>
</div>
