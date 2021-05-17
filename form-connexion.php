<div class="container pt-4">
    <h3>Connexion</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/connexion.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" id="mdp">
                <div id="emailHelp" class="form-text">Ne partagez jamais votre mot de passe.</div>
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary me-3">Connexion</button>
                <button class="btn btn-primary"> <a class="text-light" href="./form-inscription.php">S'incrire</a></button>
            </div>
        </form>
    </div>
</div>