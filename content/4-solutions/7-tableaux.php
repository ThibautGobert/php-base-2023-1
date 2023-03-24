<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Les tableaux</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <em>
                            <a target="_blank" href="https://www.php.net/manual/fr/language.types.array.php">Les tableaux en PHP</a>
                        </em>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>Créer un tableau $prenoms contenant 5 prénoms en utilisant la syntaxe historique</li>
                            <li>Afficher chaque valeur du tableau dans un élément HTML h3 en utilisant les indexes</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="alert alert-info d-flex align-items-center">
                            <div>
                                <i class="fa-regular fa-lightbulb me-2"></i>
                            </div>
                            <div>
                                Pour aller plus loin, trouver un moyen d'afficher les valeurs sans répéter de code.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->
<?php

$prenoms = array('Timothé', 'Amandine', 'Dylan', 'Thibaut', 'Inconnu');

?>

<!-- Première manière de faire un echo dans du html -->
<h3><?php echo $prenoms[0] ?></h3>

<!-- Deuxième manière de faire un echo dans du html -->

<h3><?= $prenoms[1] ?></h3>
<h3><?= $prenoms[2] ?></h3>
<h3><?= $prenoms[3] ?></h3>
<h3><?= $prenoms[4] ?></h3>

<!--
Si on essaie d'accéder à un index qui n'existe pas, php va générer une erreur
Il faut donc tester l'existance de l'index avec la fonction isset() si on n'est pas certain qu'il existe
-->

<!-- On peut tester avec une condition ternaire
ternaire = 3 étapes, la première c'est la condition à respecter, la deuxième c'est ce qu'on fait si la condition est vraie
et la troisième c'est ce qu'on fait si la condition est fausse
-->
<h3><?= $prenoms[5] ?? 'Pas de 5ème élément dans le tableau' ?></h3>
<h3><?= isset($prenoms[5]) ? $prenoms[5] : 'Pas de 5ème élément dans le tableau' ?></h3>

<h3><?php if(isset($prenoms[5])){ echo $prenoms[5]; }else{ echo 'Pas de 5ème élément dans le tableau'; } ?></h3>

<?php

if(isset($prenoms[5])) {
    echo '<h3>' . $prenoms[5] . '</h3>';
}else {
    echo '<h3>Pas de 5ème élément dans le tableau</h3>';
}

/**
 * Affichage des valeurs sans répéter le code
 * Une solution est d'utiliser une boucle foreach
 */
foreach ($prenoms as $key => $prenom) {
    echo '<h3>'. $prenom . ' (clé = ' . $key . ')</h3>';
}


?>