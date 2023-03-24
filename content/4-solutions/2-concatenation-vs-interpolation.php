<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Utiliser la concaténation et l'interpolation</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <em>La concaténation et l'interpolation sont deux manières différentes d'afficher des variables à l'intérieur d'une chaine de caractère.</em>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>Créer une variable $nom et lui assigner la valeur <?= wrapString('Marc') ?>.</li>
                            <li>Créer une deuxième variable $anneeDeNaissance et lui assigner la valeur 1996.</li>
                            <li>Afficher la phrase <?= wrapString('Marc est né en 1996. Cette phrase utilise la concaténation et non l\'interpolation') ?> dans un élément HTML h3 en utilisant la concaténation.</li>
                            <li>Afficher la phrase &laquo;Marc est né en 1996. Cette phrase utilise l'interpolation et non la concaténation&raquo; dans un élément HTML h3 en utilisant l'interpolation.</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="alert alert-info">
                            <i class="fa-regular fa-lightbulb me-2"></i>Pour aller plus loin, trouver un moyen d'afficher la phrase &laquo;Marc est né en 1996, il a donc [son age] ans&raquo;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->
<?php

$nom = 'Marc';
$anneeDeNaissance = 1996;

$annee = date('Y');

echo '<br>';

/**
 * la fonction date() retourne une chaine de caractère (string) et notre année de naissance est un entier
 * Comme php est permissif on peut directement faire une soustraction.
 * MAIS si on veut vraiment travailler proprement, on peut "caster" la chaine de caractère en entier.
 */

// on caste le retour de la fonction en int
$annee = (int)date('Y');

$resultat = $annee - $anneeDeNaissance;

echo '<br>';


//Marc est né en 1996. Cette phrase utilise la concaténation et non l'interpolation

// concaténation
// Lorsqu'on doit échapper un caractère, comme le guillemet simple de "l'interpolation", on utilise le back slash
echo $nom . ' est né en ' . $anneeDeNaissance . '. Cette phrase utilise la concaténation et non l\'interpolation.';
echo '<br>';

//interpolation
echo "$nom est né en $anneeDeNaissance.  Cette phrase utilise l'interpolation et non la concaténation.";
echo '<br>';

echo "$nom est né en $anneeDeNaissance.  Il a donc $resultat ans.";
echo '<br>';

echo "$nom est né en $anneeDeNaissance.  Il a donc " . (int)date('Y') - $anneeDeNaissance . "ans.";
