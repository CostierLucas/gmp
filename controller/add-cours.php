<?php require_once('./config.php');

$nom_cours = $_POST['nom_cours'];
$pdf_doc = $_POST['pdf_doc'];

$insert_sql = "INSERT INTO cours ( nom_cours, pdf_doc ) VALUES( :nom_cours, :pdf_doc );";

$stmt = $conn->prepare($insert_sql);

$stmt->execute(array(
    'nom_cours' => $nom_cours,
    'pdf_doc' => $pdf_doc,
));
              
header('Location: ../enseignant.php');    