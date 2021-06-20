<?php include('header.php') 
?>
<div class="container pt-4">
    <h3>Les projets tuteuré disponible</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/add-projet.php" method="post">
            <div class="mb-3">
            <?php require_once('./controller/config.php');

            $query = "SELECT * FROM tuteure";
            $req = $conn->prepare($query);
            $req->execute();

            $result = $req->fetch(PDO::FETCH_ASSOC);
            print_r("Vous avez le projet ".$result['projet'] . " qui à pour Objectif : " . $result['objectif'] . " : " . $result['description'] );
            ?>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>

