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
                            <li>À l'aide de boucles, trouver un moyen d'afficher un tableau HTML reprenant les tables de
                                multiplication jusqu'à 10
                            </li>
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

<?php for ($i = 0; $i < 2; $i++) { ?>
    <p>Coucou la boucle</p>
<?php } ?>


<table class="table table-bordered table-striped">
    <tr>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <th><?php echo $i ?></th>
        <?php endfor; ?>
    </tr>
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <tr class="class-col-md-3">
            <?php for ($j = 1; $j <= 10; $j++): ?>
                <td> <?php echo $i . "x" . $j . "=" . $i * $j ?> </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

