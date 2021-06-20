<?php include('header.php') 
?>
<div class="container pt-4">
    <h3>Votre emploie du temps</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/add-note.php" method="post">
            <div class="mb-3">
            <?php require_once('./controller/config.php');

            $query = "SELECT * FROM images";
            $req = $conn->prepare($query);
            $req->execute();

            $result = $req->fetch(PDO::FETCH_ASSOC);
            ?>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>

