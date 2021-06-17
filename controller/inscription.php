<?php require_once('./config.php');

$statut = $_POST['statut'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$mdp = $_POST['mdp'];
var_dump ($statut);
if ($statut == "etudiant") {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mobile = $_POST['mobile'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $poste = $_POST['poste'];
    $req = $conn->prepare('INSERT INTO etudiant( prenom, nom , email ,telephone,mobile,ville, adresse, identifiant, mdp, date_inscription) VALUES( :prenom, :nom, :email, :telephone, :mobile, :ville, :adresse, :identifiant, :mdp, CURDATE() )');
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
} else if ($statut == "entreprise") {
    $identifiant = $_POST['identifiant'];
    $coordonnee = $_POST['coordonnee'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $poste = $_POST['poste'];
    $req = $conn->prepare('INSERT INTO entreprise( prenom,nom,poste,coordonnee,telephone,email, mdp, date_inscription) VALUES( :prenom,:nom,:poste,:coordonnee,:telephone,:email, :mdp, CURDATE() )');
    $req->execute(array(
        'email' => $email,
        'mdp' => $mdp,
        'prenom' => $prenom,
        'telephone' => $telephone,
        'nom' => $nom,
        'coordonnee' => $coordonnee,
        'poste' => $poste,
    ));
} else if ($statut == "enseignant") {
    $mobile = $_POST['mobile'];
    $req = $conn->prepare('INSERT INTO enseignant( telephone,mobile,email, mdp, date_inscription) VALUES( :telephone,:mobile,:email, :mdp, CURDATE() )');
    $req->execute(array(
        'email' => $email,
        'mdp' => $mdp,
        'telephone' => $telephone,
        'mobile' => $mobile,
    ));
}



header('Location: ../index.php');
 