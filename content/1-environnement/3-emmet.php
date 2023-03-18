<div class="row">
    <div class="col-md-12">
        <h5>Qu'est ce que <a target="_blank" href="https://docs.emmet.io/">Emmet</a> ?</h5>
        <p>
            Emmet est un plugin pour les éditeurs de texte et les IDE qui permet aux développeurs d'écrire
            plus rapidement du code HTML/CSS en utilisant des abréviations. <br>
            Il est tellement pratique qu'il a été intégré par défaut dans certains éditeurs tels que PHPStorm et VSCode.
            <br>
            Beaucoup de développeurs n'ont pas connaissance de cet outil et pourtant, avec très peu d'entrainement, il vous permettra
            de gagner énormément de temps à l'aide de quelques abréviations simples à retenir.
            <br>
            Le principe de base est que vous devez écrire une instruction suivie d'un appui sur la touche tab de votre clavier.
            <br>
            Par exemple, pour générer le bloc "doctype" qu'on retrouve sur n'importe quel site web, il vous suffit
            d'écrire le caractère ! et d'appuyer sur tabulation.
        </p>
        <p>
            <a target="_blank" href="https://docs.emmet.io/cheat-sheet/">Cheat sheet</a>
        </p>
<div class="editor">
    ! //Un point d'exclamation suivi d'une frappe sur la touche tab génèrera le code HTML ci-dessous
    &lt;!doctype html&gt;
        &lt;html lang="en"&gt;
        &lt;head&gt;
            &lt;meta charset="UTF-8"&gt;
            &lt;meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"&gt;
            &lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
            &lt;title&gt;Document&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;

        &lt;/body&gt;
    &lt;/html&gt;
</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h5>Quelques exemples d'instructions pratiques</h5>
        <p>
            Chaque exemple donné ci-dessous doit évidemment être suivi d'un appui sur tabulation.
        </p>
<div class="editor">
    // génerer une simple div

    div
    //résultat
    &lt;div&gt;&lt;/div&gt;


    // tous les élément html peuvent être généré de cette manière
    h1
    //résultat
    &lt;h1&gt;&lt;/h1&gt;


    //Il est également possible de donner un attribut id ainsi que des classes aux éléments générés

    h1#mon-titre.text-success.bg-primary
    //résultat
    &lt;h1 id="mon-titre" class="text-success bg-primary"&gt;&lt;/h1&gt;


    //Pour générer des éléments enfants on peut utiliser le chevron fermant >

    ul>li
    //résultat
    &lt;ul&gt;
        &lt;li&gt;&lt;/li&gt;
    &lt;/ul&gt;


    //Multiplication
    
    div*5
    //résultat
    &lt;div&gt;&lt;/div&gt;
    &lt;div&gt;&lt;/div&gt;
    &lt;div&gt;&lt;/div&gt;
    &lt;div&gt;&lt;/div&gt;
    &lt;div&gt;&lt;/div&gt;


    //Insérer du texte
    
    h3{Mon titre h3}
    //résultat
    &lt;h3&gt;Mon titre h3&lt;/h3&gt;


    //Pour une structure plus complexe, on peut remonter depuis un enfant vers un élément parent à l'aide de ce symbole : ^
    
    .row>.col-md-12>ul>li*3^^^.row>.col-md-12>h3{On est remonté des &lt;li&gt; vers la racine pour créer une nouvelle ligne}
    //résultat
    &lt;div class="row"&gt;
        &lt;div class="col-md-12"&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;/li&gt;
                &lt;li&gt;&lt;/li&gt;
                &lt;li&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-md-12"&gt;
            &lt;h3&gt;On est remonté des '&lt;li&gt;' vers la racine pour créer une nouvelle ligne&lt;/h3&gt;
        &lt;/div&gt;
    &lt;/div&gt;


    //on peut évidemment combiner tout ça pour générer une structure plus complexe

    .table-responsive>table.table-bordered.stable-stripped>thead>tr>th{titre colonne}*5^^tbody>tr*4>td{cellule}*5
    //résultat
    &lt;div class="table-responsive"&gt;
        &lt;table class="table-bordered stable-stripped"&gt;
            &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;titre colonne&lt;/th&gt;
                &lt;th&gt;titre colonne&lt;/th&gt;
                &lt;th&gt;titre colonne&lt;/th&gt;
                &lt;th&gt;titre colonne&lt;/th&gt;
                &lt;th&gt;titre colonne&lt;/th&gt;
            &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
                &lt;td&gt;cellule&lt;/td&gt;
            &lt;/tr&gt;
            &lt;/tbody&gt;
        &lt;/table&gt;
    &lt;/div&gt;
</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/E8fvowZqODU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
