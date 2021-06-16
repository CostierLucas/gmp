<?php include('header.php') ?>
<div class="container pt-4">
    <h3>Enregistrer une note</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/SUBMIT.php" method="post">
            <div class="mb-3">
                <label for="nom_matiere" class="form-label">Nom de la matière</label>
                <input type="text" class="form-control" id="nom_cours" name="nom_matiere">
            </div>
            <div class="mb-3">
                <label for="etudiant_id" class="form-label">Entrée le numéro de l'étudiant</label>
                <input type="text" class="form-control" id="etudiant_id" name="etudiant_id">
            </div>
            <div class="mb-3">
                <label for="coefficient" class="form-label">Coefficient de la note</label>
                <input type="text" class="form-control" id="coefficient" name="coefficient">
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary text-light  me-3">Crée le cours</button>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>