<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Combinaison de l'opérateur d'affectation (=) avec les opérateurs arithmétiques et de chaine.</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <em>En PHP l'opérateur d'affectation le plus simple est le <?= wrapString('=') ?>.
                            Le premier réflexe est de penser que ce signe veut dire <?= wrapString('égal à') ?>.
                            Ce n'est pas le cas, il signifie que l'opérande de gauche se voit affecter la valeur de l'expression qui est à droite du signe égal.
                            <br>
                            <a target="_blank" href="https://www.php.net/manual/fr/language.operators.assignment.php">Les opérateurs d'affectation</a>
                        </em>
<div class="editor">
    $a = 5; // Affecte la valeur 5 à la variable $a
</div>
                        <em>
                            Il existe également d'autres opérateurs d'affectation qui permettent d'effectuer une opération sur la variable avant de lui affecter une valeur.
                            <br> Par exemple:
                        </em>
<div class="editor">
    $a = 21;
    $a += 2; // Ajoute 2 à la valeur de $a, soit 23
    $a -= 3; // Soustrait 3 à la valeur de $a, soit 20
    $a *= 4; // Multiplie la valeur de $a par 4, soit 80
    $a /= 8; // Divise la valeur de $a par 8, soit 10
    $a %= 3; // Affecte le reste de la division de $a par 3 à $a, soit 1
    $titre = 'Bonjour'; // affecte la valeur bonjour à $titre
    $titre .= ' tout le monde'; // affecte la valeur 'Bonjour tout le monde' à $titre
</div>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>Afficher la valeur de $a et de $titre à chaque étape de l'exemple ci-dessus.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->