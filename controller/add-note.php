<?php require_once('./config.php');

$etudiant_id = $_POST['etudiant_id'];
$matiere = $_POST['matiere'];
$coefficient = $_POST['coefficient'];
$note = $_POST['note'];

$insert_sql = "INSERT INTO note ( etudiant_id, matiere, coefficient ,note) VALUES( :etudiant_id, :matiere, :coefficient,:note );";

$stmt = $conn->prepare($insert_sql);

$stmt->execute(array(
    'etudiant_id' => $etudiant_id,
    'matiere' => $matiere,
    'coefficient' => $coefficient,
    'note' => $note,
));

header('Location: ../enseignant.php');
