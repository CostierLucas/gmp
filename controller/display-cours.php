<?php require_once('./config.php');

$query = "SELECT * FROM cours"; 
$req = $conn->prepare($query);
$req->execute();

$result = $req->fetch(PDO::FETCH_ASSOC);
print_r($result);
              
header('Location: ../index.php');    