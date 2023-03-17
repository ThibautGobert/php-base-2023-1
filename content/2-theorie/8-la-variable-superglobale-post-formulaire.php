<div class="row">
    <div class="col-md-12">
        <h5>La variable superglobale $_POST</h5>
        <p>
            La variable superglobale $_POST permet de récupérer des données passées à un script php via la méthode POST du protocole HTTP.<br>
            Les données sont généralement envoyées depuis un formulaire HTML via la méthode POST, l'attribut "action"
            de l'élément "form" détermine la cible vers laquelle sera envoyée la requête POST. <br>
            Les attributs "name" des différents champs du formulaire déterminent les clés de la variable $_POST dans lesquelles nous pourrons retrouver les valeurs sur la page cible.
        </p>
        <p>
            <b>Avertissement sur la sécurité :</b> <br>
            Même si les variables ne sont pas visibles dans l'url comme pour une requête GET, il est toujours nécessaire de procéder à une validation des données avant de les utiliser dans une application.
            <br>
            Il est par exemple très facile de modifier les attributs des champs et donc d'envoyer des choses qui ne sont pas nécessairement attendues côté serveur.
            <br>
        </p>
        <p>
            Ci-dessous, un formulaire dont les données seront postées sur <a href="/2-theorie/9-la-variable-superglobale-post-traitement">la page de traitement</a>
        </p>
        <hr>
    </div>
</div>
<form action="/2-theorie/9-la-variable-superglobale-post-traitement" method="POST">
    <div class="row">
        <div class="col-md-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="col-md-3">
            <label for="name" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="col-md-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="col-md-3">
            <label for="country" class="form-label">Pays</label>
            <select class="form-select" name="country">
                <option value="belgique">Belgique</option>
                <option value="luxembourg">Luxembourg</option>
                <option value="france">France</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-2 text-end">
            <button class="btn btn-success"><i class="fa fa-check me-2"></i>Envoyer</button>
        </div>
    </div>
</form>



