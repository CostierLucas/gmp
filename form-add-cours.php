<?php include('header.php') ?>
<div class="container pt-4">
    <h3>Enregistrer un cours</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/add-cours.php" method="post">
            <div class="mb-3">
                <label for="nom_cours" class="form-label">Nom du cours</label>
                <input type="nom_cours" class="form-control" id="nom_cours" name="nom_cours">
            </div>
            <div class="formgroup container-fluid">
                <input type="file" name="pdf_doc" accept=".pdf"/>
                <input class="btn btn-primary text-light  me-3"type="hidden" name="MAX_FILE_SIZE" value="67108864"/> 
            </div>
            <p></p>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary text-light  me-3">Crée le cours</button>
            </div>
        </form>
        <div>
        <?php require_once('./controller/config.php');

        $query = "SELECT * FROM cours"; 
        $req = $conn->prepare($query);
        $req->execute();

        $result = $req->fetch(PDO::FETCH_ASSOC);
        print_r($result['pdf_doc']);
        ?>
        </div>
    </div>
</div>
<?php include('footer.php') ?>

