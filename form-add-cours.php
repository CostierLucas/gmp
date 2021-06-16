<?php include('header.php') ?>
<div class="container pt-4">
    <h3>Enregistrer un cours</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/SUBMIT.php" method="post">
            <div class="mb-3">
                <label for="nom_cours" class="form-label">Nom du cours</label>
                <input type="nom_cours" class="form-control" id="nom_cours" name="nom_cours">
            </div>
            <div class="formgroup container-fluid">
                <input type="file" name="pdf_doc" accept=".pdf"/>
                <input type="hidden" name="MAX_FILE_SIZE" value="67108864"/> 
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary text-light  me-3">Crée le cours</button>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>

