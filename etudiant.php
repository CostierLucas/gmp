<?php 
session_start(); 
include('./header.php'); ?>

<div class="container pt-4">
    <h3>Espace Étudiant</h3>
    <hr>
</div>
<div class="container">

<!-- Espace Étudiant -->
<section class="d-flex bg-light" id="feature-cards">
    <div class="container d-flex justify-content-center">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-12 col-lg-7 mx-auto text-center">
                        <p class="text-muted lead mb-5">Bienvenue sur l'espace étudiant, voici toutes les fonctionnalités disponible sur votre espace étudiant.</p>
                    </div>
                </div>
                <!-- Notes et emploi du temps -->
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                        <i class="fas fa-graduation-cap fa-4x text-info"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-info">Notes et Emploi du temps</p>
                                        <?php if (isset($_SESSION['sess_user_etudiant_email'])){ ?>
                                            <div class="col-12 text-center">
                                            <p class="text-secondary">Consultez vos notes et votre emploi du temps depuis votre espace étudiant.</p>
                                            <a href="./liste-note-etudiant.php"><button class="btn btn-primary mt-3 px-4">Voir vos notes</button></a>
                                        </div>
                                        <?php } else { ?> 
                                        <p class="text-secondary">Consultez vos notes et votre emploi du temps depuis votre espace étudiant.</p>
                                        <?php } ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Projet tuteurés -->
                    <div class="col-12 col-lg-3">
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
                                        <?php if (isset($_SESSION['sess_user_etudiant_email'])){ ?>
                                            <div class="col-12 text-center">
                                            <p class="text-secondary">Vous avez la possibilitée de consulter les projet tuteurés dans leur ensemble afin d'en choisir un.</p>
                                            <a href="./listes-projets-etudiant.php"><button class="btn btn-primary mt-3 px-4">Consultez les projets</button></a>
                                        </div>
                                        <?php } else { ?> 
                                        <p class="text-secondary">Vous avez la possibilitée de consulter les projet tuteurés dans leur ensemble afin d'en choisir un.</p>
                                        <?php } ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offre alternance -->
                    <div class="col-12 col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                        <i class="fa fa-briefcase fa-4x text-success"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-success">Offre Alternance</p>
                                        <?php if (isset($_SESSION['sess_user_etudiant_email'])){ ?>
                                            <div class="col-12 text-center">
                                            <p class="text-secondary">Recherchez et postulez aux différents offres d'alternance disponible.</p>
                                            <a href="./liste-alternance-etudiant.php"><button class="btn btn-primary mt-3 px-4">Consultez les offres</button></a>
                                        </div>
                                        <?php } else { ?> 
                                        <p class="text-secondary">Recherchez et postulez aux différents offres d'alternance disponible.</p>
                                        <?php } ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Support de cours -->
                    <div class="col-12 col-lg-3">
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
                                        <?php if (isset($_SESSION['sess_user_etudiant_email'])){ ?>
                                            <div class="col-12 text-center">
                                            <p class="text-secondary">Accédez aux différents supports de cours mis à disposition, par vos enseignants.</p>
                                            <a href="./liste-cours-etudiant.php"><button class="btn btn-primary mt-3 px-4">Afficher les cours</button></a>
                                        </div>
                                        <?php } else { ?> 
                                        <p class="text-secondary">Accédez aux différents supports de cours mis à disposition, par vos enseignants.</p>
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
                                <?php if (isset($_SESSION['sess_user_etudiant_email'])){ ?>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                        <?php  echo '<p class="text-primary"> Bienvenu, '.$_SESSION['sess_user_etudiant_email']; ?>
                                            <p class="text-secondary">Vous êtes identifié sur votre compte étudiant.</p>
                                            <a href="./controller/suppression.php"><button class="btn btn-primary mt-3 px-4">Déconnexion</button></a>
                                        </div>
                                    </div>
                                <?php } else { ?> 
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <p class="text-primary">Connectez vous</p>
                                            <p class="text-secondary">Identifiez vous afin d'accéder à toutes ses fonctionnalités, depuis votre compte étudiant.</p>
                                            <a href="./form-connexion-etudiant.php"><button class="btn btn-primary mt-3 px-4">Connectez-vous</button></a>
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
<?php //include('./form-connexion.php'); ?>
<?php include('./footer.php');
