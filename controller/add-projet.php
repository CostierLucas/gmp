<?php require_once('./config.php');

$projet = $_POST['projet'];
$objectif = $_POST['objectif'];
$description = $_POST['description'];

$insert_sql = "INSERT INTO tuteure (projet, objectif, description) VALUES(:projet, :objectif, :description);";

$stmt = $conn->prepare($insert_sql);

$stmt->execute(array(
    'projet' => $projet,
    'objectif' => $objectif,
    'description' => $description,
));

header('Location: ../entreprise.php');
