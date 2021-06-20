<?php include('header.php') 
?>
<div class="container pt-4">
    <h3>Ajouter un projet tuteuré</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/add-projet.php" method="post">
            <div class="mb-3">
                <label for="projet" class="form-label">Nom du projet</label>
                <input type="text" class="form-control" id="projet" name="projet">
            </div>
            <div class="mb-3">
                <label for="objectif" class="form-label">Objectif</label>
                <input type="text" class="form-control" id="objectif" name="objectif">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary text-light  me-3">Poster votre projet</button>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>