<?php require_once('./config.php');

$entreprise = $_POST['nomEntreprise'];
$contrat = $_POST['dureeContrat'];
$secteur = $_POST['secteur'];
$description = $_POST['description'];
$competences = $_POST['competences'];

$insert_sql = "INSERT INTO alternances ( name, duree, secteur, description, competences) VALUES( :name, :duree, :secteur, :description,:competences );";

$stmt = $conn->prepare($insert_sql);

$stmt->execute(array(
    'name' => $entreprise,
    'duree' => $contrat,
    'secteur' => $secteur,
    'description' => $description,
    'competences' => $competences,
));

header('Location: ../entreprise.php');
