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
<?php
/*
$eleve1 = [
    'prénom' => 'Dylan',
    'nom' => 'Proviste',
    'age' => 32,
    'resultats' => [5, 15, 10, 17, 11],
];
$eleve2 = [
    'prénom' => 'Timothé',
    'nom' => 'Nom',
    'age' => 32,
    'resultats' => [5, 15, 10, 17, 11],
];
$eleve3 = [
    'prénom' => 'Amandine',
    'nom' => 'Nom',
    'age' => 32,
    'resultats' => [5, 15, 10, 17, 11],
];
$eleves = [$eleve1, $eleve2, $eleve3];

*/

/*
function generateResultats() {
    $resultats = [];
    for($i = 0; $i < 5; $i++) {
        $nombreAleatoire = rand(0, 20);
        $resultats[] = $nombreAleatoire;
    }
    return $resultats;
}
*/

/*
 * On n'a pas besoin de variable en plus pour ajouter un nombre aléatoir à $resultats
 *
function generateResultats() {
    $resultats = [];
    for($i = 0; $i < 5; $i++) {
        $resultats[] = rand(0, 20);
    }
    return $resultats;
}
*/

function generateResultats(int $nbreResultats = 5, int $min = 0, int $max = 20) {
    $resultats = [];
    for($i = 0; $i < $nbreResultats; $i++) {
        $resultats[] = rand($min, $max);
    }
    return $resultats;
}

//$resultats = generateResultats(15, 10, 50);


$eleves = [
    [
        'prenom' => 'Dylan',
        'nom' => 'Proviste',
        'age' => 32,
        'resultats' => generateResultats(),
    ],
    [
        'prenom' => 'Timothé',
        'nom' => 'Nom',
        'age' => 32,
        'resultats' => generateResultats(),
    ],
    [
        'prenom' => 'Amandine',
        'nom' => 'Nom',
        'age' => 32,
        'resultats' => generateResultats(),
    ],
];

/**
 * Créer une fonction qui calcul une moyenne en fonction d'un tableau de résultats
 * moyenne = somme de chaque résultat / nombre de résultats
 *
 * ex : function calculMoyenne($resultats) {
 *         [calculer la moyenne]
 *      return $moyenne
 * }
 */

function calculMoyenne($resultats) {
    $somme = 0;
    //$nbreResultat = 0;
    foreach ($resultats as $r) {
        //$somme = $somme + $resultat;
        $somme += $r;
        //nbreResultat = $nbreResultat + 1;
        //$nbreResultat ++;
    }
    return $somme / count($resultats);
}
/*
$resultatsTest = [2, 5, 10, 20];
calculMoyenne($resultatsTest);
*/


/**
 * Boucler sur $eleves et à chaque tour de boucle, utiliser la fonction pour assigner
 * la valeur moyenne à une nouvelle clé du tableau de l'élève en cours
 * ex : $eleves[index]['moyenne'] = calculMoyenne($eleve['resultats'])
 */

foreach ($eleves as $index => $eleve) {
    $eleves[$index]['moyenne'] = calculMoyenne($eleve['resultats']);
}

?>

<div class="row">
    <?php foreach ($eleves as $eleve): ?>
        <div class="col-md-4">
            <?php echo $eleve['prenom']; ?>
        </div>
    <?php endforeach; ?>
</div>

<div class="row">
    <?php foreach ($eleves as $eleve): ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <!--<?php echo $eleve['prenom']; ?> -->
                    <?= $eleve['prenom'] . ' ' . $eleve['nom'] ?>
                </div>
                <div class="card-body">
                    <div class="<?= $eleve['moyenne'] >= 10 ? 'text-success' : 'text-danger' ?>">
                        Moyenne : <?= $eleve['moyenne']?>
                    </div>
                    <hr>
                    <ul>
                        <?php foreach ($eleve['resultats'] as $resultat): ?>
                        <li><?= $resultat?>/20</li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
