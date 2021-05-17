<?php require_once('./config.php');

$statut = $_POST['statut'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

if ($statut == "etudiant") {
    $req = $conn->prepare('INSERT INTO etudiant( email, mdp, date_inscription) VALUES( :email, :mdp, CURDATE() )');
} else if ($statut == "enseignant") {
    $req = $conn->prepare('INSERT INTO enseignant( email, mdp, date_inscription) VALUES( :email, :mdp, CURDATE() )');
} else if ($statut == "entreprise") {
    $req = $conn->prepare('INSERT INTO entreprise( email, mdp, date_inscription) VALUES( :email, :mdp, CURDATE() )');
}

$req->execute(array(
    'email' => $email,
    'mdp' => $mdp,
));

header('Location: ../index.php');
