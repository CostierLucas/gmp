<?php include('header.php') ?>
<div class="container pt-4">
    <h3>Inscription</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/inscription.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
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
                    <option value="etudiant">Etudiant</option>
                    <option value="enseignant">Enseignant</option>
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