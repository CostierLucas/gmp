<?php include('header.php') ?>
<div class="container pt-4">
    <h3>Votre compte recruteur</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/inscription.php" method="post">
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="type" class="form-control" name="prenom" id="prenom">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="type" class="form-control" name="nom" id="nom">
            </div>
            <div class="mb-3">
                <label for="poste" class="form-label">Poste dans l'entreprise</label>
                <input type="type" class="form-control" name="poste" id="poste">
            </div>
            <div class="mb-3">
                <label for="coordonnee" class="form-label">Nom et coordonnée de l'entreprise</label>
                <input type="type" class="form-control" name="coordonnee" id="coordonnee">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Numéro de téléphone</label>
                <input type="type" class="form-control" name="telephone" id="telephone">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse email (votre identifiant)</label>
                <input type="type" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" id="mdp">
                <div id="emailHelp" class="form-text">Ne partagez jamais votre mot de passe.</div>
            </div>
            <div class="mb-3">
                <label for="statut" class="form-label">Statut</label>
                <br>
                <select class="w-100" name="statut" id="statut">
                    <option value="entreprise">Entreprise</option>
                </select>
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary text-light  me-3">S'incrire</button>
                <button class="btn btn-primary ">Connexion</button>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>