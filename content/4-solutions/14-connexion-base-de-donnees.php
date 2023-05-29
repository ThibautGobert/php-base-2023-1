<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Connexion DB</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        Se connecter à une base de donnée avec PDO et récupérer des données.
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->
<?php

/**
 * Données de connexion à la base de données
 */
$dsn = 'mysql:host=127.0.0.1;dbname=todolist';
$username = getConfig('mysql_username');
$password = getConfig('mysql_password');

try {
    $pdo = new PDO($dsn, $username, $password);
    $statement = $pdo->query('select * from users');
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($users as $user) {
        echo 'id='. $user['id']. ' '. $user['name'] . '<br>';
    }

    $pdo->query("update users set name='Thibaut' where id=1");

    echo '<hr>';
    $statement = $pdo->query('select * from users');
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($users as $user) {
        echo 'id='. $user['id']. ' '. $user['name'] . '<br>';
    }

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}










