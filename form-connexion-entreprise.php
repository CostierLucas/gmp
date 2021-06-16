<?php include('header.php'); ?>
<div class="container pt-4">
    <h3>Connexion à votre compte recruteur</h3>
    <hr>
</div>

<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/images/logo-gmp-unique.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
                <form action="./controller/connexion-entreprise.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user" value="" placeholder="Votre e-mail">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="mdp" class="form-control input_pass" value="" placeholder="Votre mot de passe">
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Se connecter</button>
				   </div>
					</form>
				</div>
				<?php if (isset($_SESSION['errors'])): ?>
    					<div class="form-errors">	
        				<?php foreach($_SESSION['errors'] as $error): ?>
            				<p><?php echo $error ?></p>
        				<?php endforeach; ?>
    					</div>
					 <?php endif; ?>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<p class="signup"> Vous n'avez pas de compte ? <a href="./form-inscription-entreprise.php" class="ml-2">Inscrivez-vous</a> </p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<?php include('./footer.php');
