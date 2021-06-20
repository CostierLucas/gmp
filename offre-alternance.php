<?php include('header.php') ?>


<div class="container pt-4 pb-4">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter une offre
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Offre alternance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./controller/add-offre.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nomEntreprise" class="form-label">Nom entreprise</label>
                            <input type="text" class="form-control" id="nomEntreprise" name="nomEntreprise" required>
                        </div>
                        <div class="mb-3">
                            <label for="dureeContrat" class="form-label">Durée du contrat</label>
                            <input type="text" class="form-control" name="dureeContrat" id="dureeContrat" required>
                        </div>
                        <div class="mb-3">
                            <label for="secteur" class="form-label">Secteur géographique</label>
                            <input type="text" class="form-control" name="secteur" id="secteur">
                        </div>
                        <div class="mb-3">
                            <label for="descriptionM" class="form-label">Description de la mission</label>
                            <input type="text" class="form-control" name="description" id="descriptionM" style="height: 250px" required>
                        </div>
                        <div class="mb-3">
                            <label for="compR" class="form-label">Compétences requises</label>
                            <input type="text" class="form-control" name="competences" id="compR" style="height: 150px" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary text-light  me-3">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <h3>Offre alternances</h3>
        <hr>
        <div class="col-12">
            <div class="mb-3">
                <?php require_once('./controller/config.php');

                $query = "SELECT * FROM alternances";
                $req = $conn->prepare($query);
                $req->execute();

                $result = $req->fetchAll();

                foreach ($result as $offre) { ?>
                    <div class="col-12 border mb-2">
                        <div><?php echo $offre['name']; ?></div>
                        <div> Secteur : <?php echo $offre['secteur']; ?></div>
                        <div> Durée : <?php echo $offre['duree']; ?></div>
                        <div> Description : <?php echo $offre['description']; ?></div>
                        <div> Compétences : <?php echo $offre['competences']; ?></div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>