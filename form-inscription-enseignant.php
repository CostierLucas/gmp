<?php include('header.php') ?>
<div class="container pt-4">
    <h3>Inscription d'enseignant</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/inscription.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="type" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="telephone" class="form-control" name="telephone" id="telephone">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="mobile" class="form-control" id="mobile" name="mobile">
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
                    <option value="enseignant">Enseignant</option>
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