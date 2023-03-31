<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Envoyer des paramètres en GET et en POST</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        Envoyer des paramètres avec la méthode http GET depuis cette page vers la page
                        <a href="/3-exercices/13-parametres-get-reception">13-parametres-get-reception</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->
<?php
/*
$parametres = [
    'age' => 18,
    'nom' => 'thibaut',
    'pays' => 'Belgique',
];
$urlParams = http_build_query($parametres);

$url = '/3-exercices/13-parametres-get-reception?' . $urlParams;

$url1 = '/3-exercices/13-parametres-get-reception?age='.$parametres['age'].'&nom='.$parametres['nom'].'&pays='.$parametres['pays']
?>

<a href="<?= $url ?>">Mon beau lien</a>
<br>
<a href="<?= $url1 ?>">Mon beau lien créé manuellement</a>

<a href="/?message=coucou">lien vers l'accueil avec message coucou</a>
*/

$users = [
    [
        'id' => 1,
        'nom' => 'thibaut'
    ],
    [
        'id' => 2,
        'nom' => 'simon'
    ],
    [
        'id' => 3,
        'nom' => 'dylan'
    ],
];

foreach ($users as $user) {
    echo '<a href="/user/edit?id='.$user['id'].'">Lien pour mettre à jour '.$user['nom']. '</a><br>';
}









