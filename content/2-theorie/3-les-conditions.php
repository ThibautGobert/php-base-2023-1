<div class="row">
    <div class="col-md-12">
        <h5>Les conditions</h5>
        <p>
            En PHP, il existe plusieurs types de conditions que vous pouvez utiliser pour exécuter du code en fonction de différentes situations.
            <br>
            Voici quelques exemples :
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>If-else</h5>
        <p>
            La condition if-else permet d'exécuter du code en fonction de la véracité d'une condition. Si la condition est vraie, le code situé dans la clause if sera exécuté ; sinon, le code de la clause else sera exécuté.
        </p>
        <div class="editor">
    if (condition) {
    // code à exécuter si la condition est vraie
    } else {
    // code à exécuter si la condition est fausse
    }
        </div>
        <p>
            On peut également utiliser une clause elseif pour ajouter des conditions supplémentaires :
        </p>
        <div class="editor">
    if (condition1) {
    // code à exécuter si condition1 est vraie
    } elseif (condition2) {
    // code à exécuter si condition1 est fausse mais condition2 est vraie
    } else {
    // code à exécuter si aucune des conditions précédentes n'est vraie
    }
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>Switch</h5>
        <p>
            La condition switch permet de comparer une variable à plusieurs valeurs possibles et d'exécuter du code en fonction de la valeur de cette variable.
            <br>Voici un exemple :
        </p>
        <div class="editor">
    switch (variable) {
        case valeur1:
        // code à exécuter si variable est égale à valeur1
        break;
        case valeur2:
        // code à exécuter si variable est égale à valeur2
        break;
        default:
        // code à exécuter si variable n'est pas égale à aucune des valeurs précédentes
    }
        </div>
        <p>
            Il est important de mettre un break à la fin de chaque bloc de code, afin d'empêcher l'exécution des blocs suivants.
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>La condition ternaire</h5>
        <p>
            La condition ternaire permet de remplacer une instruction if...else par une seule expression.
            <br>
            Elle se présente sous la forme suivante :
        </p>
<div class="editor">
    $resultat = (condition) ? valeur_si_vrai : valeur_si_faux;
</div>
        <p>
            La condition ternaire est particulièrement utile lorsque vous souhaitez affecter une valeur à une variable en fonction d'une condition simple, sans avoir à utiliser une instruction if...else complète. Elle est souvent utilisée pour éviter de répéter du code inutilement.
            <br>
            Voici un exemple qui illustre l'utilisation de la condition ternaire pour éviter de répéter du code :
        </p>
<div class="editor">
    $age = 18;

    if ($age >= 18) {
        $majeur = true;
    } else {
        $majeur = false;
    }
</div>
        <p>
            Ce code peut être remplacé par :
        </p>
<div class="editor">
    $age = 18;
    $majeur = ($age >= 18) ? true : false;
</div>
    </div>
</div>
