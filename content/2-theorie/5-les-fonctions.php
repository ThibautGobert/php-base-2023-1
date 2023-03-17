<div class="row">
    <div class="col-md-12">
        <h5>Les fonctions</h5>
        <p>
            Les fonctions sont des blocs de code qui sont conçus pour accomplir une tâche spécifique et qui peuvent être réutilisés dans différentes parties de votre programme.
            <br>
            Il existe beaucoup de <a target="_blank" href="https://www.php.net/manual/fr/functions.internal.php">fonctions internes au langage PHP</a> mais il est également possible de
            <a target="_blank" href="https://www.php.net/manual/fr/functions.user-defined.php">créer ses propres fonctions</a>.
            <br>
            Voici la syntaxe pour définir une fonction :
        </p>
<div class="editor">
    function nomDeLaFonction($parametre1, $parametre2, $autres_parametres) {
        // code de la fonction
    }
</div>
        <p>
            Pour appeler une fonction, vous devez utiliser son nom suivi de parenthèses et éventuellement de valeurs pour les paramètres :
        </p>
<div class="editor">
    nomDeLaFonction($valeur1, $valeur2, $autres_parametres);
</div>
        <p>
            Voici un exemple de fonction qui calcule la somme de deux nombres :
        </p>
<div class="editor">
    function addition($a, $b) {
        return $a + $b;
    }

    echo addition(1, 2); // affiche 3
</div>
        <p>
            Il est également possible de définir des valeurs par défaut pour les arguments d'une fonction.
            <br>
            Dans ce cas, si l'argument n'est pas fourni lors de l'appel de la fonction, la valeur par défaut sera utilisée à la place :
        </p>
<div class="editor">
    function addition($a, $b = 0) {
        return $a + $b;
    }

    echo addition(1); // affiche 1
    echo addition(1, 2); // affiche 3
</div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/UXdvpKRQsx8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>