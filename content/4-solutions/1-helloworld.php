<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-6">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Premier exercice : Hello World !</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>Créer une variable <?= wrapString('$title') ?> et lui attribuer la valeur <?= wrapString('Hello World') ?>.</li>
                            <li>Afficher celle-ci avec la fonction <a target="_blank" href="https://www.php.net/manual/fr/function.echo.php">echo</a> de PHP.</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="alert alert-info">
                            <i class="fa-regular fa-lightbulb me-2"></i>Pour aller plus loin, afficher cette variable dans un élément HTML h1.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->
<?php
$title = 'Un super titre';
//mon commentaire
/**
 * Concaténation => insérer une variable dans du texte
 */
echo '<h1 class="text-warning">' . $title . '</h1>';

/**
 * Interpolation => avec des doubles guillemets php interprète
 * les variables sans avoir besoin de concaténation
 */

echo "<h1 class=\"text-danger\">$title</h1>";


// l'élève à 20 ans
$maVariable = 20;

echo 'L\'élève à ' . $maVariable . ' ans';
echo '<br>';
echo "L'élève à $maVariable ans";

?>

<!-- 2 manières d'afficher une variable dans du html -->
<h1 class="text-success"><?php echo $title ?></h1>

<h1 class="text-success"><?= $title ?></h1>




