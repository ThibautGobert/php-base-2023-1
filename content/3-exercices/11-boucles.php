<!-- Enoncé de l'exercice -->
<div class="row mb-5">
    <div class="col-md-8">
        <div class="card border-info shadow">
            <div class="card-header">
                <h5><i class="fa-solid fa-code me-2"></i>Boucles</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>À l'aide de boucles, trouver un moyen d'afficher un tableau HTML reprenant les tables de multiplication jusqu'à 10</li>
                        </ul>
                        <p>Voici le résultat attendu au minimum : </p>
                        <img class="img-fluid" src="/img/table_multiplications.png" alt="">
                        <p>Ou mieux : </p>
                        <img class="img-fluid" src="/img/table_multiplications_2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ecrivez votre code ci-dessous -->

<div>
    <div>
        <?php for($i = 0; $i < 10; $i++){ ?>
            <h3>Coucou la boucle</h3>
        <?php } ?>
    </div>
</div>


<div class="row">
    <?php for($i = 0; $i < 10; $i++): ?>
    <div class="col-md-3">
        <?php for($j = 0; $j < 10; $j++): ?>
            <h3>Coucou la boucle</h3>
        <?php endfor; ?>
    </div>
    <?php endfor; ?>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>  <tr>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>  <tr>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>  <tr>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>








