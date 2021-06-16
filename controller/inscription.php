<?php require_once('./config.php');

$statut = $_POST['statut'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$mobile = $_POST['mobile'];
$ville = $_POST['ville'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$identifiant = $_POST['identifiant'];
$coordonnee = $_POST['coordonnee'];
$poste = $_POST['poste'];
$mdp = $_POST['mdp'];

if ($statut == "etudiant") {
    $req = $conn->prepare('INSERT INTO etudiant( prenom, nom , email ,telephone,mobile,ville, adresse, identifiant, mdp, date_inscription) VALUES( :prenom, :nom, :email, :telephone, :mobile, :ville, :adresse, :identifiant, :mdp, CURDATE() )');
} else if ($statut == "enseignant") {
    $req = $conn->prepare('INSERT INTO entreprise( prenom,nom,poste,coordonnee,telephone,email, mdp, date_inscription) VALUES( :prenom,:nom,:poste,:coordonnee,:telephone,:email, :mdp, CURDATE() )');
} else if ($statut == "entreprise") {
    $req = $conn->prepare('INSERT INTO enseignant( telephone,mobile,email, mdp, date_inscription) VALUES( :telephone,:mobile,:email, :mdp, CURDATE() )');
}

$req->execute(array(
    'email' => $email,
    'mdp' => $mdp,
    'prenom' => $prenom,
    'telephone' => $telephone,
    'nom' => $nom,
    'adresse' => $adresse,
    'ville' => $ville,
    'identifiant' => $identifiant,
    'coordonnee' => $coordonnee,
    'poste' => $poste,
    'mobile' => $mobile,
));

header('Location: ../index.php');
 