<?php include('header.php') 
?>
<div class="container pt-4">
    <h3>Enregistrer une note</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/add-note.php" method="post">
            <div class="mb-3">
                <label for="matiere" class="form-label">Nom de la matière</label>
                <input type="text" class="form-control" id="matiere" name="matiere">
            </div>
            <div class="mb-3">
                <label for="etudiant_id" class="form-label">Entrée l'identifiant de l'étudiant</label>
                <input type="text" class="form-control" id="etudiant_id" name="etudiant_id">
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Note (20)</label>
                <input type="text" class="form-control" id="note" name="note">
            </div>
            <div class="mb-3">
                <label for="coefficient" class="form-label">Coefficient de la note</label>
                <input type="text" class="form-control" id="coefficient" name="coefficient">
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary text-light  me-3">Enregistrer la note</button>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>