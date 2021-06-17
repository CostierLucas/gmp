<?php include('header.php') 
?>
<div class="container pt-4">
    <h3>Ajouter un emploi du temps</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
    <form action="./controller/add_schedule.php" method="post" enctype="multipart/form-data">
        <label>Select Image File:</label>
        <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">
    </form>
    </div>
</div>
<?php include('footer.php') ?>