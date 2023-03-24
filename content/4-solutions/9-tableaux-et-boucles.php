<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Les tableaux associatifs</h5>
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
                            <li>Créer un tableau associatif <?= wrapString('$eleve1') ?> représentant un élève avec comme clés et valeurs :
                                <ul>
                                    <li>prenom : Alain</li>
                                    <li>nom : Térieur</li>
                                    <li>age : 23</li>
                                    <li>resultat : 17</li>
                                </ul>
                            </li>
                            <li>Utiliser une boucle pour afficher chaque clé / valeur</li>
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
                                Pour aller plus loin, créer 2 autres élèves <?= wrapString('$eleve2') ?> et <?= wrapString('$eleve3') ?>,
                                créer un nouveau tableau <?= wrapString('$eleves') ?> qui contiendra nos 3 élèves.
                                <br>
                                Utiliser des boucles pour afficher les données de chaque élève dans une colonne Bootstrap de taille 4 (col-4) en partant de la variable <?= wrapString('$eleves') ?>.
                                <br>
                                Calculer la moyenne des résultats de la classe.
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



