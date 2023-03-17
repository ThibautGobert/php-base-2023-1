<?php
/**
 * On vérifie si la variable de session "students" existe, si elle n'existe pas on la crée.
 * On génère 50 élèves de manière aléatoire, l'utilité de sauvegarder nos élèves dans une variable de session
 * est d'avoir toujours le même tableau et de voir comment il s'affiche en fonction de la colonne et de la direction sur lequel le tri est fait.
 * Si nous n'utilisions pas de variable de session notre tableau serait régénéré de manière aléatoire à chaque chargement de page
 */
if(!isset($_SESSION['students']) || isset($_GET['regenerate']) && (bool)$_GET['regenerate'] === true) {
    $students = [];
    $firstNames = array('Emilie', 'Julie', 'Camille', 'Chloé', 'Victoire', 'Léa', 'Louise', 'Pauline', 'Amélie', 'Mathilde');
    $names = array('Martin', 'Dubois', 'Thomas', 'Robert', 'Richard', 'Petit', 'Durand', 'Moreau', 'Simon', 'Laurent');

    for ($i = 0; $i < 50; $i++) {
        $name = $names[array_rand($names)];
        $firstName = $firstNames[array_rand($firstNames)];
        $age = rand(18, 45);
        $email = strtolower($firstName) . '.' . strtolower($name) . '@example.com';
        $countries = array('Belgique', 'France', 'Luxembourg');
        $country = $countries[array_rand($countries)];

        switch ($country) {
            case 'Belgique':
                $phonePrefix = '0032';
                break;
            case 'France':
                $phonePrefix = '0033';
                break;
            case 'Luxembourg':
                $phonePrefix = '00352';
                break;
            default:
                $phonePrefix = '0032';
        }

        $phoneNumber = $phonePrefix . ' ' . str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        $students[] = array(
            'name' => $name,
            'firstname' => $firstName,
            'age' => $age,
            'email' => $email,
            'country' => $country,
            'phone' => $phoneNumber
        );
    }
    $_SESSION['students'] = $students;
}

/**
 * On vérifie si $_GET['direction'] et $_GET['column'] n'existent pas, si c'est le cas c'est que
 * l'utilisateur vient d'arriver sur la page, par défaut on va trier sur le nom dans la direction ascendante
 * sinon, on récupère la colonne et la direction depuis la variable $_GET
 */
if(!isset($_GET['direction']) && !isset($_GET['column'])) {
    $direction = 'asc';
    $column = 'name';
}else {
    $direction = $_GET['direction'];
    $column = $_GET['column'];
}

/**
 * On crée une fonction qui nous permet d'ordonner notre tableau d'élèves en fonction de la colonne et de la direction
 * https://stackoverflow.com/a/19454643/9450712
 * @param array $array
 * @param $column
 * @param $direction
 * @return array
 */
function sortByColumnAndDirection(array $array, string $column, string $direction): array
{
    if($direction === 'asc') {
        usort($array, function ($item1, $item2) use ($column) {
            return $item1[$column] <=> $item2[$column];
        });
    }else {
        usort($array, function ($item1, $item2) use ($column) {
            return $item2[$column] <=> $item1[$column];
        });
    }
    return $array;
}

/**
 * Ici, on sait que $_SESSION['students'] existe, on assigne sa valeur réordonnée à la variable $students qu'on utilisera pour afficher un tableau
 */
$students = sortByColumnAndDirection($_SESSION['students'], $column, $direction);

/**
 * On crée un tableau de colonnes avec une clé 'label' pour afficher le texte de la colonne et une clé 'field' qui nous permet de faire des tests.
 */
$columns = [
    [
        'label' => 'Nom',
        'field' => 'name',
    ],
    [
        'label' => 'Prénom',
        'field' => 'firstname',
    ],
    [
        'label' => 'Age',
        'field' => 'age',
    ],
    [
        'label' => 'Email',
        'field' => 'email',
    ],
    [
        'label' => 'Téléphone',
        'field' => 'phone',
    ],
    [
        'label' => 'Pays',
        'field' => 'country',
    ],
];

/**
 * Nous avons maintenant :
 * - une variable $students qui est un tableau trié dans l'ordre demandé par l'utilisateur
 * - une variable $column qui représente la colonne sur laquelle l'utilisateur souhaite faire le tri
 * - une variable $direction qui représente le sens dans lequel le tri de la colonne doit s'effectuer 'asc' ou 'desc'
 * - une variable $columns qui représente chaque colonne du tableau avec une clé label qui est le texte affiché et une clé field qui correspond aux clés de nos élèves.
 */
?>

<div class="row">
    <div class="col-md-12">
        <h5>La variable superglobale $_GET</h5>
        <p>
            La variable superglobale $_GET est souvent utilisée pour récupérer les paramètres passés dans une URL.<br>
            Les paramètres sont passés à la page en utilisant la méthode GET du protocole HTTP. <br>
            Les données récupérées via cette méthode sont généralement utilisées pour fournir des informations non sensibles à une page web,
            par exemple pour récupérer l'ordre de tri, les filtres ou les paramètres de pagination d'un tableau.
            <br><br>
            Exemple d'utilisation : <br>
        </p>
        <ul>
            <li>
                Dans l'URL "example.com/page.php?nom=John&age=25", les paramètres passés sont "nom" et "age" avec les valeurs respectives "John" et "25".
            </li>
            <li>
                On peut récupérer ces valeurs en utilisant $_GET['nom'] et $_GET['age'] dans le script PHP.
            </li>
        </ul>
        <p>
            <b>Avertissement sur la sécurité :</b> <br>

            Les données passées dans les paramètres GET peuvent être vues et modifiées par l'utilisateur, il est donc important de ne pas inclure d'informations sensibles dans ces paramètres.
            <br>
            En savoir plus sur les <a target="_blank" href="https://fr.wikipedia.org/wiki/Injection_SQL">injections SQL</a>  ou les
            <a target="_blank" href="https://fr.wikipedia.org/wiki/Cross-site_scripting">attaques XSS</a>.
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <hr>
        <h6>Le tableau ci-dessous est un exemple concret d'utilisation de $_GET pour gérer l'affichage d'une liste d'élèves.</h6>
        <p>N'hésitez pas à regarder le code/les commentaires de cette page afin d'en comprendre le fonctionnement.</p>
        <ul>
            <li>Au premier affichage, on génère 50 élèves qui sont stockés dans une variable de session.</li>
            <li>Au premier affichage, on ordonne par défaut sur la colonne 'Nom' dans la direction 'desc'</li>
            <li>On utilise une boucle sur une variable $columns pour afficher chaque élément du header du tableau</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="/2-theorie/7-la-variable-superglobale-get?column=<?= $column ?>&direction=<?= $direction ?>&regenerate=true"><i class="fa-solid fa-rotate-right me-2"></i>Régénérer la liste d'élèves</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <?php foreach($columns as $col): ?>
                        <th>
                            <?php if($column !== $col['field']): ?>
                                <a href="/2-theorie/7-la-variable-superglobale-get?column=<?= $col['field'] ?>&direction=<?= $direction ?>">
                                    <?= $col['label'] ?>
                                </a>
                            <?php else: ?>
                                <?= $col['label'] ?>
                            <?php endif; ?>
                            <?php if($column === $col['field']): ?>
                                <?php if($direction === 'asc'): ?>
                                    <a href="/2-theorie/7-la-variable-superglobale-get?column=<?= $col['field'] ?>&direction=desc">
                                        <i class="fa-solid fa-arrow-down"></i>
                                    </a>
                                <?php else: ?>
                                    <a href="/2-theorie/7-la-variable-superglobale-get?column=<?= $col['field'] ?>&direction=asc">
                                        <i class="fa-solid fa-arrow-up"></i>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </th>
                    <?php endforeach; ?>
                </tr>
                </thead> <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= $student['name'] ?></td>
                        <td><?= $student['firstname'] ?></td>
                        <td><?= $student['age'] ?></td>
                        <td><?= $student['email'] ?></td>
                        <td><?= $student['phone'] ?></td>
                        <td><?= $student['country'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




