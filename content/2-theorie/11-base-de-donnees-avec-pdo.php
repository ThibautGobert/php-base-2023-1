<div class="row">
    <div class="col-md-12">
        <h5>Connexion à une base de donnée via l'extension <a target="_blank" href="https://www.php.net/manual/fr/intro.pdo.php">PDO</a></h5>
        <p>
            PDO est une extension PHP qui fournit une interface pour accéder à des bases de données relationnelles. <br>
            PDO signifie "PHP Data Objects" et permet de se connecter et de travailler avec des bases de données
            telles que MySQL/MariaDB, PostgreSQL, Oracle, SQL Server, SQLite, ... <br>
            Nous allons travailler avec une base de données MariaDB (version open source de MySQL), l'extension pdo_mysql doit donc
            être activée dans le fichier de configuration php.ini (pour activer une extension PHP il suffit de
            décommenter la ligne correspondante dans le fichier php.ini en supprimant le ; en début de ligne).
            <br>
            <br>
            PDO est donc une <a target="_blank" href="https://www.php.net/manual/fr/intro.pdo.php">extension du langage PHP</a>. <br>
            PDO est également une <a target="_blank" href="https://www.php.net/manual/fr/class.pdo.php">classe native de PHP</a> qui utilise l'extension du même nom pour nous fournir, dans le code, des objets
            de type PDO qui nous permettent de manipuler les données d'une base de données de manière relativement simple.
        </p>
        <img alt="" class="img-fluid" src="/img/extension_pdo_mysql.png">
        <p class="mt-3">
            Exemple de connexion à une base de donnée avec la <a target="_blank" href="https://www.php.net/manual/fr/class.pdo.php">classe PDO</a> :
        </p>
<div class="editor">
    $dsn = 'mysql:host=localhost;dbname=ma_base_de_donnees';
    $username = 'mon_utilisateur';
    $password = 'mon_mot_de_passe';

    try {
        $pdo = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>Insérer des données</h5>
        <p>
            Une fois la connexion établie, nous pouvons utiliser notre objet PDO pour y insérer des données. <br>
            Un exemple typique d'utilisation est la récupération de données fournies via un formulaire HTML avec la variable superglobale $_POST.
        </p>
        <div class="alert alert-danger">
            <b class="text-danger"><i class="fa-solid fa-skull-crossbones me-2"></i>ATTENTION</b><br>
            <b>Il ne faut JAMAIS faire confiance aux données fournies par l'utilisateur, c'est pourquoi
                il est fortement recommandé d'utiliser des <span class="text-underline">requêtes préparées</span>
                afin d'éviter les attaques par injection SQL.</b>
        </div>
        <p>
            Exemple d'insertion de données de manière non sécurisée :
        </p>
<div class="editor">
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];

    $query = "INSERT INTO students (firstname, lastname, email, phone, birthday) VALUES ('$firstname', '$lastname', '$email', '$phone', '$birthday')";
    $result = $pdo->query($query);
</div>
        <p>
            Exemple d'insertion de données de manière sécurisée :
        </p>
<div class="editor">
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];

    $query = "INSERT INTO students (firstname, lastname, email, phone, birthday) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$firstname, $lastname, $email, $phone, $birthday]);
</div>
        <p>
            Dans le premier exemple, nous avons utilisé directement les valeurs de la variable superglobale $_POST
            pour insérer les données dans la table students.
            <br>
            Cela peut poser un problème de sécurité connu sous le nom d'injection SQL. <br>
            Un attaquant pourrait potentiellement manipuler les données pour exécuter une requête malveillante ou obtenir des données confidentielles.
        </p>
        <p>
            Dans le deuxième exemple, nous avons utilisé une requête préparée avec la méthode prepare() de l'objet PDO.
            <br>
            Nous avons remplacé les variables par des points d'interrogation dans la chaîne de requête. <br>
            Ensuite, nous avons exécuté la requête en fournissant les valeurs séparément avec la méthode execute(). <br>
            Cette approche est plus sécurisée car elle utilise des paramètres liés pour protéger les données contre les attaques par injection SQL.
        </p>
        <p>
            La méthode prepare() de l'objet PDO crée une requête préparée, qui permet de séparer la requête SQL et les valeurs fournies.
            <br>
            Cela signifie que les valeurs sont envoyées séparément à la base de données,
            et que la base de données les traite comme des données distinctes de la requête SQL elle-même. <br>
            <b>De cette manière, même si un attaquant essaie d'injecter du code malveillant, la base de données le traitera comme des données et non pas comme du code SQL</b>.
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>Récupérer des données</h5>
        <p>
            De la même manière que pour l'insertion, PDO nous permet de récupérer des données dans une base de données.
            <br>
            Voici un exemple :
        </p>
<div class="editor">
    // Connexion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=example_db', 'user', 'password');

    // Préparation et exécution de la requête de sélection des étudiants
    $stmt = $db->prepare("SELECT * FROM students");
    $stmt->execute();

    // Récupération des résultats dans un tableau associatif
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats
    foreach ($results as $row) {
        echo $row['firstname'] . ' ' . $row['lastname'] . '<br>';
        echo 'Email : ' . $row['email'] . '<br>';
        echo 'Phone : ' . $row['phone'] . '<br>';
        echo 'Birthday : ' . $row['birthday'] . '<br><br>';
    }
</div>
        <p>
            Nous commençons par nous connecter à la base de données (si la connexion est déjà établie nous pouvons réutiliser le même objet PDO).
            <br>
            Nous préparons une requête de sélection de tous les étudiants de la table "students" en utilisant
            la méthode prepare() de PDO, suivie de l'exécution de la requête en utilisant la méthode execute().
            <br>
            Ensuite, nous utilisons la méthode fetchAll() de PDO pour récupérer tous les résultats de la requête dans un tableau associatif, ce tableau est stocké dans la variable $result.
            <br>
            $result contiendra une entrée pour chaque ligne de la table "students", avec les noms des colonnes comme clés et les valeurs des colonnes comme valeurs.
            <br>
            Enfin, nous bouclons à travers le tableau de résultats et affichons les données des étudiants, en utilisant les clés du tableau pour accéder aux différentes colonnes de la table.
            <br>
            Notez que dans cet exemple, nous utilisons la constante PDO::FETCH_ASSOC comme argument pour la méthode fetchAll(), ce qui signifie que nous récupérons les résultats sous forme de tableau associatif, de cette manière, nous pouvons accéder facilement aux données en utilisant les noms des colonnes comme clés.
        </p>
    </div>
</div>


