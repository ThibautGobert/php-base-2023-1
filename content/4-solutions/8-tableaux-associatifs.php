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

$eleve1 = [
    'prenom' => 'Alain',
    'nom' => 'Térieur',
    'age' => 23,
    'resultat' => 17
];


foreach ($eleve1 as $key => $value) {
    echo 'La clé de l\'élément est : '. $key . ' et sa valeur est : ' . $value . '<br>';
}


?>

<div style="height: 5px" class="bg-info mt-3 mb-3"></div>

<?php

$eleve2 = [
    'prenom' => 'Timothé',
    'nom' => 'Encore un nom',
    'age' => rand(18, 35),
    'resultat' => rand(1, 20)
];
$eleve3 = [
    'prenom' => 'Amandine',
    'nom' => 'Un nom',
    'age' => rand(18, 35),
    'resultat' => rand(1, 20)
];
$eleve4 = [
    'prenom' => 'Dylan',
    'nom' => 'Un dernier nom',
    'age' => rand(18, 35),
    'resultat' => rand(1, 20)
];

$eleves = [$eleve1, $eleve2, $eleve3, $eleve4];

/**
 * On aurait pu déclarer tout directement sans utiliser les variables
 */

$eleves2 = [
    [
        'prenom' => 'Alain',
        'nom' => 'Térieur',
        'age' => 23,
        'resultat' => 17
    ],
    [
        'prenom' => 'Timothé',
        'nom' => 'Encore un nom',
        'age' => rand(18, 35),
        'resultat' => rand(1, 20)
    ],
    [
        'prenom' => 'Amandine',
        'nom' => 'Un nom',
        'age' => rand(18, 35),
        'resultat' => rand(1, 20)
    ],
    [
        'prenom' => 'Dylan',
        'nom' => 'Un dernier nom',
        'age' => rand(18, 35),
        'resultat' => rand(1, 20)
    ],
];



/**
 * Ajouter une valeur dans un tableau existant
 */

$eleves[] = [
    'prenom' => 'Test',
    'nom' => 'Un dernier nom',
    'age' => rand(18, 35),
    'resultat' => rand(1, 20)
];

/**
 * Merger (fusionner) deux tableaux ensemble
 */

$tableauMerge = array_merge($eleves, $eleves2);

//dd($eleves, $eleves2, $tableauMerge);

?>

<div class="container">
    <div class="row">
        <?php foreach($tableauMerge as $eleve): ?>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header <?= $eleve['resultat'] >= 10 ? 'bg-success' : 'bg-danger' ?>">
                    <?= $eleve['nom'] . ' ' . $eleve['prenom'] ?>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Age : <?= $eleve['age'] ?> ans</li>
                        <li><?= 'Résultat : ' . $eleve['resultat'] . '/20'?></li>
                    </ul>
                    <hr>
                    <ul>
                    <?php foreach ($eleve as $key => $value): ?>
                        <li><?= $key . ' : ' . $value ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div style="height: 5px" class="bg-info mt-3 mb-3"></div>

<!-- Foreach à l'ancienne -->
<div class="container">
    <div class="row">
        <?php foreach($tableauMerge as $eleve){ ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header <?= $eleve['resultat'] >= 10 ? 'bg-success' : 'bg-danger' ?>">
                        <?= $eleve['nom'] . ' ' . $eleve['prenom'] ?>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Age : <?= $eleve['age'] ?> ans</li>
                            <li><?= 'Résultat : ' . $eleve['resultat'] . '/20'?></li>
                        </ul>
                        <hr>
                        <ul>
                            <?php foreach ($eleve as $key => $value){ ?>
                                <li><?= $key . ' : ' . $value ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php

/**
 * Calculer la moyenne de la classe
 */
$resultats = 0;
$count = 0;
$moyenne = 0;
foreach ($tableauMerge as $eleve) {
    //$resultats =  $resultats + $eleve['resultat'];
    $resultats += $eleve['resultat'];
    $count += 1;
}
$moyenne = $resultats / $count;

//$moyenne = $resultats / count($tableauMerge);

function calculMoyenne($total, $nombre, $precision = 2) {
    return round($total/$nombre, $precision);
}


//dd($moyenne);
?>

<h3>La moyenne des résultats est de </h3>
<div class="<?= $moyenne >= 10 ? 'bg-success' : 'bg-warning' ?> rounded rounded-circle d-flex justify-content-center align-items-center text-white shadow" style="height: 100px; width: 100px">
    <?= round($moyenne, 2) ?>
</div>
<hr>

<!-- version sans utiliser de condition ternaire -->
<?php if($moyenne >= 10): ?>
    <div class="bg-success rounded rounded-circle d-flex justify-content-center align-items-center text-white shadow" style="height: 100px; width: 100px">
        <?= round($moyenne, 2) ?>
    </div>
<?php else: ?>
    <div class="bg-danger rounded rounded-circle d-flex justify-content-center align-items-center text-white shadow" style="height: 100px; width: 100px">
        <?= round($moyenne, 2) ?>
    </div>
<?php endif;


?>

<h3>Affichage de la moyenne avec notre fonction calculMoyenne() avec la précision par défaut</h3>
<div class="<?= $moyenne >= 10 ? 'bg-success' : 'bg-warning' ?> rounded rounded-circle d-flex justify-content-center align-items-center text-white shadow" style="height: 100px; width: 100px">
    <?= calculMoyenne($resultats, count($tableauMerge)) ?>
</div>

<h3>Affichage de la moyenne avec notre fonction calculMoyenne() avec un arrondi sans chiffre après la virgule</h3>
<div class="<?= $moyenne >= 10 ? 'bg-success' : 'bg-warning' ?> rounded rounded-circle d-flex justify-content-center align-items-center text-white shadow" style="height: 100px; width: 100px">
    <?= calculMoyenne($resultats, count($tableauMerge), 0) ?>
</div>









<!-- passer des variables php côté javascript -->
<script>
    let eleves = <?= json_encode($tableauMerge); ?>

    eleves.forEach(eleve => {
        console.log(eleve)
    })
</script>





