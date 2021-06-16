<?php include('header.php') 
?>
<div class="container pt-4">
    <h3>Vos notes</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/add-note.php" method="post">
            <div class="mb-3">
            <?php require_once('./controller/config.php');

            $query = "SELECT note FROM cours"; 
            $req = $conn->prepare($query);
            $req->execute();

            $result = $req->fetch(PDO::FETCH_ASSOC);
            print_r($result['pdf_doc']);
            ?>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>