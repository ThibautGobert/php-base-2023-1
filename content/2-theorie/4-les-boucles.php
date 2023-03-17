<div class="row">
    <div class="col-md-12">
        <h5>Les boucles</h5>
        <p>
            Les boucles en PHP sont des structures de contrôle qui permettent de répéter des instructions jusqu'à ce qu'une condition soit remplie. Elles sont utilisées pour exécuter un bloc de code plusieurs fois de suite.
            <br>
            Il existe plusieurs types de boucles en PHP, notamment :
        </p>
        <ul>
            <li>
                <b>La boucle for</b> qui permet de répéter un bloc de code un nombre précis de fois. Elle est utilisée lorsque le nombre de répétitions est connu à l'avance.
                <br>
                La syntaxe de la boucle for est la suivante :
<div class="editor">
    for (initialisation ; condition ; incrémentation) {
        // instructions à répéter
    }
</div>
            </li>
            <li>
                <b>La boucle while</b> qui permet de répéter un bloc de code tant qu'une condition est vraie. Elle est utilisée lorsque le nombre de répétitions est indéterminé ou dépend de l'exécution d'un certain nombre de conditions.
                <br>
                La syntaxe de la boucle while est la suivante :
<div class="editor">
    while (condition) {
        // instructions à répéter
    }
</div>
            </li>
            <li>
                <b>La boucle do while</b> qui est similaire à la boucle while, mais qui garantit que le bloc de code sera exécuté au moins une fois.
                <br>
                La syntaxe de la boucle do while est la suivante :
<div class="editor">
    do {
        // instructions à répéter
    } while (condition);
</div>
            </li>
            <li>
                <b>La boucle foreach</b> en PHP est une boucle spécialement conçue pour parcourir un tableau (array). Elle permet de répéter un bloc de code pour chaque élément du tableau.
                <br>
                La boucle foreach est particulièrement utile pour parcourir un tableau dont on ne connait pas la longueur ou dont celle-ci est susceptible de changer.
                <br>
                Voici la syntaxe de la boucle foreach en PHP :
<div class="editor">
    foreach ($tableau as $element) {
        // instructions à répéter pour chaque élément du tableau ou de la chaîne de caractères
    }
</div>
                Il est également possible d'utiliser la boucle foreach avec un tableau associatif, c'est-à-dire un tableau dont les éléments sont associés à une clé (un nom).
                <br>
                Dans ce cas, la syntaxe est la suivante :
<div class="editor">
    foreach ($tableauAssociatif as $cle => $element) {
        // instructions à répéter pour chaque élément du tableau associatif
    }
</div>
                Voici un exemple d'utilisation de la boucle foreach avec un tableau simple :
<div class="editor">
    $prenoms = array('Paul', 'Marie', 'Alice', 'Pierre');

        foreach ($prenoms as $prenom) {
        echo "Bonjour $prenom !<br>";
    }
</div>
                Le résultat de ce code sera le suivant :
<div class="editor">
    Bonjour Paul !
    Bonjour Marie !
    Bonjour Alice !
    Bonjour Pierre !
</div>
            </li>
        </ul>
    </div>
</div>