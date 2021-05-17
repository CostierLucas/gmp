 <div class="container pt-4">
    <h3>Connexion</h3>
    <hr>
</div>
<!--
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
-->
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/images/logo-gmp-unique.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
                <form action="./controller/connexion.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user" value="email" placeholder="Votre e-mail">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="mdp" class="form-control input_pass" value="mdp" placeholder="Votre mot de passe">
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Se connecter</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<p class="signup"> Vous n'avez pas de compte ? <a href="./form-inscription.php" class="ml-2">Inscrivez-vous</a> </p>
					</div>
					
				</div>
			</div>
		</div>
	</div>