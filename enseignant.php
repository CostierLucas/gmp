<?php
session_start();
include('./header.php'); ?>

<div class="container pt-4">
    <h3>Espace Enseignant</h3>
    <hr>
</div>
<div class="container">

    <!-- Feature Cards -->
    <section class="d-flex bg-light" id="feature-cards">
        <div class="container d-flex justify-content-center">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-12 col-lg-7 mx-auto text-center">
                            <p class="text-muted lead mb-5">Bienvenue dans l’espace enseignants, accessible aux enseignants de l'IUT. Découvrez les différentes fonctionnalités disponible.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mx-auto text-center">
                                            <i class="fa fa-chalkboard-teacher fa-4x text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <p class="text-warning">Notes</p>
                                            <?php if (isset($_SESSION['sess_user_enseignant_email'])) { ?>
                                                <div class="col-12 text-center">
                                                    <p class="text-secondary">Consultez, ajoutez et modifiez vos notes publiées depuis votre compte enseignant.</p>
                                                    <a href="./form-add-note.php"><button class="btn btn-primary mt-3 px-4">Ajouter une note</button></a>
                                                </div>
                                            <?php } else { ?>
                                                <p class="text-secondary">Consultez, ajoutez et modifiez vos notes publiées depuis votre compte enseignant.</p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mx-auto text-center">
                                            <i class="fa fa-briefcase fa-4x text-success"></i>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <p class="text-success">Emploi du temps personnel</p>
                                            <?php if (isset($_SESSION['sess_user_enseignant_email'])) { ?>
                                                <div class="col-12 text-center">
                                                    <p class="text-secondary">Consulter votre emploi du temps personnel depuis votre espace enseignant..</p>
                                                    <a href="./liste-emploie-du-temps.php"><button class="btn btn-primary mt-3 px-4">Voir votre emploi du temps</button></a>
                                                </div>
                                            <?php } else { ?>
                                                <p class="text-secondary">Consulter votre emploi du temps personnel depuis votre espace enseignant.</p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mx-auto text-center">
                                            <i class="fa fa-book-open fa-4x text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <p class="text-danger">Supports de cours</p>
                                            <?php if (isset($_SESSION['sess_user_enseignant_email'])) { ?>
                                                <div class="col-12 text-center">
                                                    <p class="text-secondary">Déposez et partagez vos supports cours au formats PDF avec vos élèves.</p>
                                                    <a href="./form-add-cours.php"><button class="btn btn-primary mt-3 px-4">Ajouter un support de cours</button></a>
                                                </div>
                                            <?php } else { ?>
                                                <p class="text-secondary">Déposez et partagez vos supports cours au formats PDF avec vos élèves.</p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mx-auto text-center">
                                            <i class="fa fa-user fa-4x text-primary"></i>
                                        </div>
                                    </div>
                                    <?php if (isset($_SESSION['sess_user_enseignant_email'])) { ?>
                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <?php echo '<p class="text-primary"> Bienvenu, ' . $_SESSION['sess_user_enseignant_email']; ?>
                                                <p class="text-secondary">Vous êtes identifié sur votre compte enseignant.</p>
                                                <a href="./controller/suppression.php"><button class="btn btn-primary mt-3 px-4">Déconnexion</button></a>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <p class="text-primary">Connectez vous</p>
                                                <p class="text-secondary">Identifiez vous afin d'accéder à toutes ses fonctionnalités, depuis votre compte enseignant.</p>
                                                <a href="./form-connexion-enseignant.php"><button class="btn btn-primary mt-3 px-4">Connectez-vous</button></a>
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
