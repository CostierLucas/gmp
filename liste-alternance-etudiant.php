<?php include('header.php') 
?>
<div class="container pt-4">
    <h3>Les alternances disponibles</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/add-note.php" method="post">
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
                <?php } ?>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>
