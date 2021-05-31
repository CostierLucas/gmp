<?php include('./header.php'); ?>
<div class="container pt-4">
    <h3>Espace </h3>
    <hr>
</div>
<div class="container">

<!-- Carte de différents espaces -->
<section class="d-flex bg-light" id="feature-cards">
    <div class="container d-flex justify-content-center">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-12 col-lg-7 mx-auto text-center">
                        <p class="text-muted lead mb-5">Veuillez choisir votre statut afin de vous identifier.</p>
                    </div>
                </div>
                <!-- Espace Étudiant -->
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
                                        <p class="text-warning">Étudiant</p>
                                        <a href="./etudiant.php"><button class="btn btn-warning mt-3 px-4">Connectez-vous</button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Espace enseignant -->
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
                                        <p class="text-success">Enseignant</p>
                                        <a href="./enseignant.php"><button class="btn btn-success mt-3 px-4">Connectez-vous</button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Espace entreprise -->
                    <div class="col-12 col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mx-auto text-center">
                                        <i class="fa fa-book-open fa-4x text-info"></i>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-info">Entreprise</p>
                                        <a href="./entreprise.php"><button class="btn btn-info mt-3 px-4">Connectez-vous</button></a>

                                    </div>
                                </div>
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
