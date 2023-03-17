<div class="row">
    <div class="col-md-12">
        <h5>La variable superglobale $_POST "traitement"</h5>
        <p>
            Cette page est la page de traitement des données reçues depuis <a href="/2-theorie/8-la-variable-superglobale-post-formulaire">la page qui contient le formulaire</a>
        </p>
        <hr>
    </div>
</div>

<?php

if(count($_POST) > 0) {
    echo 'Données reçues via la méthode POST <br>';
    dd($_POST);
}else {
    echo 'Aucune données reçues via la méthode POST';
}


