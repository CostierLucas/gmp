<?php require_once('./config.php');

$etudiant_id = $_POST['etudiant_id'];
$matiere = $_POST['matiere'];
$coefficient = $_POST['coefficient'];

$insert_sql = "INSERT INTO note ( etudiant_id, matiere, coefficient ) VALUES( :etudiant_id, :matiere, :coefficient );";

$stmt = $conn->prepare($insert_sql);

$stmt->execute(array(
    'etudiant_id' => $etudiant_id,
    'matiere' => $matiere,
    'coefficient' => $coefficient,
));
              
header('Location: ../enseignant.php');    