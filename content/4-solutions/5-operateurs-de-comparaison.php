<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Les opérateurs de comparaison</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <em>
                            Les opérateurs de comparaisons nous permettent de comparer des valeurs et d'adapter le comportement d'une application en combinant le résultat du test avec une condition.
                            <br>
                            <a target="_blank" href="https://www.php.net/manual/fr/language.operators.comparison.php">Les opérateurs de comparaison</a>
                        </em>
<div class="editor">
    $a == $b	//Égal, true si $a est égal à $b après le transtypage.
    $a === $b	//Identique, true si $a est égal à $b et qu'ils sont de même type.
    $a != $b	//Différent, true si $a est différent de $b après le transtypage.
    $a <> $b	//Différent, true si $a est différent de $b après le transtypage.
    $a !== $b	//Différent, true si $a est différent de $b ou bien s'ils ne sont pas du même type.
    $a < $b	    //Plus petit que, true si $a est strictement plus petit que $b.
    $a > $b	    //Plus grand, true si $a est strictement plus grand que $b.
    $a <= $b	//Inférieur ou égal, true si $a est plus petit ou égal à $b.
    $a >= $b	//Supérieur ou égal, true si $a est plus grand ou égal à $b.
</div>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>Affecter une valeur aléatoire comprise entre 1 et 30 à la variable $a à l'aide de la fonction
                                <a target="_blank" href="https://www.php.net/manual/fr/function.rand.php">rand()</a> de PHP.</li>
                            <li>Affecter une valeur aléatoire comprise entre 1 et 30 à la variable $b</li>
                            <li>Afficher la valeur de $a et de $b</li>
                            <li>Utiliser les conditions et les différents opérateurs de comparaison pour afficher une phrase ou une autre en fonction des différents résultats.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->
<?php

/**
 *     $a == $b	    //Égal, true si $a est égal à $b après le transtypage.
       $a === $b	//Identique, true si $a est égal à $b et qu'ils sont de même type.
 *
 * Différence entre double égalité et triple égalité
 */


$a = 20;
$b = '20';

var_dump($a == $b);
echo '<br>';
var_dump($a === $b);
echo '<br>';
/**
 * Si on caste la valeur de $b en entier, le résultat sera true
 */
var_dump($a === (int)$b);



/**
 * On n'a pas la possibilité de faire une comparaison stricte lorsqu'on veut tester plus petit < ou plus grand >
 */

$a = 20;
$b = '40';
echo '<hr>';
echo '<br>';
//true
var_dump($a < $b);
echo '<br>';
//true
var_dump((int)$a < (int)$b);
echo '<br>';

var_dump(gettype($a));
echo '<br>';
var_dump(gettype($b));
echo '<br>';
var_dump($a < $b && gettype($a) === gettype($b));
echo '<hr>';

$age = 21;

/**
 * Une première vraie condition
 */

if($age < 18) {
    echo 'Vous n\'avez pas 18 ans donc vous ne pouvez entrer sur le site !';
}else {
    echo 'Vous avez 18 ans ou plus, donc vous pouvez entrer sur le site !';
}

echo '<br>';
echo '<hr>';

if($age < 18) {
    echo 'Vous n\'avez pas 18 ans donc vous ne pouvez entrer sur le site !';
}

if($age >= 18) {
    echo 'Vous avez 18 ans ou plus, donc vous pouvez entrer sur le site !';
}

echo '<br>';
echo '<hr class="text-danger">';

if($age >= 18) {
    echo 'Vous avez 18 ans ou plus, donc vous pouvez entrer sur le site !';
}elseif ($age < 18 && $age >= 16) {
    echo 'Vous avez 18 ans ou plus, donc vous ne pouvez pas entrer sur le site mais pas de panique vous pourrez bientôt venir !';
}else {
    echo 'Vous n\'avez pas 18 ans donc vous ne pouvez pas entrer sur le site !';
}

echo '<br>';
echo '<hr class="text-danger">';

?>

<!-- Ancienne manière de faire un if dans du html -->
<?php if($age < 18) { ?>
    <h1>Vous n'avez pas 18 ans donc vous ne pouvez entrer sur le site !</h1>
<?php }else{ ?>
    <h1>Vous avez 18 ans ou plus, donc vous pouvez entrer sur le site !</h1>
<?php } ?>

<!-- Manière actuelle de faire un if dans du html -->

<?php if($age < 18): ?>
    <h1 class="text-danger">Vous n'avez pas 18 ans donc vous ne pouvez entrer sur le site !</h1>
<?php else: ?>
    <h1  class="text-success">Vous avez 18 ans ou plus, donc vous pouvez entrer sur le site !</h1>
<?php endif; ?>

<div style="height: 5px; margin-bottom: 50px" class="bg-info"></div>


<?php

$a = rand(1, 30);
$b = rand(1, 30);

echo '$a = '. $a . '<br>';
echo '$b = '. $b . '<br>';

if($a < $b) {
    echo 'a est plus petit que b';
}elseif($a === $b) {
    echo 'a est égal à b';
}else {
    echo 'a est plus grand que b';
}
?>

<hr>

<?php if($a < $b): ?>
 <div class="bg-primary rounded rounded-circle d-flex justify-content-center align-items-center text-white" style="height: 100px; width: 100px">
     a < b
 </div>
<?php elseif ($a === $b): ?>
<div class="bg-success rounded rounded-circle d-flex justify-content-center align-items-center text-white" style="height: 100px; width: 100px">
    a === b
</div>
<?php else: ?>
<div class="bg-danger rounded rounded-circle d-flex justify-content-center align-items-center text-white" style="height: 100px; width: 100px">
    a > b
</div>
<?php endif; ?>






