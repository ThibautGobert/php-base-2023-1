<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Intervertir les valeurs de différentes variables</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>
                                Déclarer 4 variable comme ceci :
<div class="editor">
    $a = 3;
    $b = 6;
    $c = 10;
</div>
                            </li>
                            <li>Suite à l'exécution de votre code, la variable $a aura la valeur 6, $b la valeur 10 et $c la valeur 3.</li>
                            <li>
                                Il est interdit de réaffecter les valeurs à l'aide d'entier, vous ne pouvez utiliser que des variables.
                                <br>
                                Il est donc interdit de faire ceci :
<div class="editor">
    $a = 6;
    $b = 10;
    $c = 3;
</div>
                            </li>
                            <li>
                                Afficher les valeurs finales.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="alert alert-info">
                            <i class="fa-regular fa-lightbulb me-2"></i>Pour aller plus loin, mettre les 3 variables dans un tableau et les afficher à l'aide d'une boucle.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->
<?php

/**
 * Qui va devoir montrer son code ?
 */

$eleves = [
    'Franklin',
    'Dylan',
    'Amandine',
    'Oumarou',
    'Simon'
];
$index = rand(0, 4);
//$theWinner = array_rand($eleves);
?>

<div class="bg-danger rounded rounded-circle d-flex justify-content-center align-items-center text-white" style="height: 100px; width: 100px">
    <?= $eleves[$index] ?>
</div>

<div style="height: 5px; margin-bottom: 50px; margin-top: 50px;" class="bg-info"></div>

<?php

$a = 3;
$b = 6;
$c = 10;

$temp = $a;
$a = $b;
$b = $c;
$c = $temp;

echo "a = $a, b = $b et c = $c";

$tableau1 = [$a, $b, $c];

$tableau2 = [
    'a' => $a,
    'b' => $b,
    'c' => $c,
];
echo '<br>';
//dd($tableau1, $tableau2);

foreach ($tableau1 as $cle => $valeur) {
    echo 'L\'index : ' .  $cle . ' vaut : ' . $valeur . '<br>';
}

echo '<br>';
echo '<br>';

foreach ($tableau2 as $cle => $valeur) {
    echo 'La valeur de : $' .  $cle . ' vaut : ' . $valeur . '<br>';
}








