<?php 
session_start(); 
include("config.php");
?>
<?php
$email = $_POST['email'];
$mdp = $_POST['mdp'];
var_dump($email);
if($email != "" && $mdp != "") {
  try {
    $query = "SELECT * FROM entreprise WHERE email = :email AND mdp = :mdp";
    $stmt = $conn->prepare($query);
    $stmt->execute(array(
      'email' => $email,
      'mdp' => $mdp,
    ));
    $count = $stmt->rowCount();
    $row = $stmt->fetch(PDO::FETCH_BOTH);
    var_dump($row['email']);
    if($count == 1 && !empty($row)) {
      $_SESSION['sess_user_entreprise_email'] = $row['email'];
      header('Location: ../entreprise.php');
    } else {
      $_SESSION['errorMDP'] = array("Mot de passe ou email invalide");
    }
  } catch (PDOException $e) {
    $_SESSION['errorPDO'] = array("Erreur PDO : ".$e->getMessage());
  }
} else {
  $_SESSION['errorChamps'] = array("Merci de remplir les deux champs");
}
?>
