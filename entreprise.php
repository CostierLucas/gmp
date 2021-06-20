<?php
session_start();
include('./header.php'); ?>
<div class="container pt-4">
    <h3>Espace Entreprise</h3>
    <hr>
</div>
<div class="container">

    <!-- Carte enterprise 
Chaque couleur utilisé proviens de bootstrap
très bonne girl pour les coueurs et tout
-->
    <section class="d-flex bg-light" id="feature-cards">
        <div class="container d-flex justify-content-center">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-12 col-lg-7 mx-auto text-center">
                            <p class="text-muted lead mb-5">Bienvenue dans l’espace entreprise, accessible aux entreprises désirant entrer en contact avec les étudiants. Découvrez les différentes fonctionnalités disponible.</p>
                        </div>
                    </div>
                    <!-- Offre Alternance -->
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mx-auto text-center">
                                            <i class="fas fa-briefcase fa-4x text-success"></i>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <a class="text-success" href="./offre-alternance.php">Offres d’alternances</a>
                                            <p class="text-secondary">Ajouter une offre d’alternance, comportant le poste recherche, pour trouver le candidat qui correspondra le mieux à vos attentes. Consulter vos offres d’alternance, tout en les modifiant.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Projet Tuteures -->
                        <div class="col-12 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mx-auto text-center">
                                            <i class="fa fa-chalkboard-teacher fa-4x text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <p class="text-warning">Projets Tuteurés</p>
                                            <p class="text-secondary">Ajoutez, consultez et modifiez le projet tuteuré, que vous souhaitez réalisé, avec l’aide des étudiants, qui devront réaliser un projet, en lien avec une entreprise professionnels.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Nouvelle ligne pour faire ce qu'il faut  -->
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mx-auto text-center">
                                            <i class="fa fa-user fa-4x text-primary"></i>
                                        </div>
                                    </div>
                                    <?php if (isset($_SESSION['sess_user_entreprise_email'])) { ?>
                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <?php echo '<p class="text-primary"> Bienvenu, ' . $_SESSION['sess_user_entreprise_email']; ?>
                                                <p class="text-secondary">Vous êtes identifié sur votre compte recruteur.</p>
                                                <form action="./controller/suppression.php" method="post">
                                                    <input type="submit" name="logout" value="Déconnexion" />
                                                </form>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <p class="text-primary">Connectez vous</p>
                                                <p class="text-secondary">Identifiez vous afin d'accéder à toutes ses fonctionnalités, depuis votre compte recruteur.</p>
                                                <a href="./form-connexion-entreprise.php"><button class="btn btn-primary mt-3 px-4">Connectez-vous</button></a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </br> </br>
</div>
<?php //include('./form-connexion.php'); 
?>
<?php include('./footer.php');
