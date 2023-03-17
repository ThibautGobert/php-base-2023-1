<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Tableaux, boucles et fonctions</h5>
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
                            <li>Créer un tableau <?= wrapString('$eleves') ?> contenant 3 élèves sous forme de tableau comme dans l'exercice précédent</li>
                            <li>
                                La différence avec l'exercice précédent est que chaque élève aura un tableau de 5 résultats à la place d'un résultat unique, par exemple :
<div class="editor">
    $eleve1 = [
        'prénom' => 'Alain',
        'nom' => 'Proviste',
        'age' => 32,
        'resultats' => [5, 15, 10, 17, 11],
    ];
</div>

                            </li>
                            <li>Définir une fonction <?= wrapString('calculMoyenne()') ?> qui calcul la moyenne des notes.</li>
                            <li>Utiliser les boucles et la fonction pour afficher les données de chaque élève.</li>
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
                                Pour aller plus loin, utiliser une condition ternaire pour ajouter (à l'élément contenant la moyenne) la classe Bootstrap
                                <?= wrapString('text-success') ?>  si la moyenne des résultats et supérieure ou égale à 10,
                                sinon ajouter la classe Bootstrap <?= wrapString('text-danger') ?>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->




