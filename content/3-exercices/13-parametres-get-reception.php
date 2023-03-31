<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Récupérer des paramètres en GET</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                       Récupérer les paramètres envoyés depuis la page <a href="/3-exercices/12-parametres-get">12-parametres-get</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->
<?php

if(count($_GET) > 0) {
    dd($_GET);
}else {
    echo 'Aucun paramètres dans l\'URL';
}












