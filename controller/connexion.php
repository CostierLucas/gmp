<?php 
include("config.php");
?>
<?php
$msg = ""; 
$email = trim($_POST['email']);
$mdp = trim($_POST['mdp']);
if($email != "" && $mdp != "") {
  try {
    $query = "SELECT * FROM etudiant WHERE 'email' = :email AND 'mdp' = :mdp";
    $stmt = $conn->prepare($query);
    $stmt->execute(array(
      'email' => $email,
      'mdp' => $mdp,
    ));
    $count = $stmt->rowCount();
    if($count == 1 && !empty($row)) {
      $_SESSION['sess_user_email'] = $row['email'];
    } else {
      $_SESSION['errorMDP'] = array("Mot de passe ou email invalide");
      header('Location: ../form-connexion.php');
    }
  } catch (PDOException $e) {
    $_SESSION['errorPDO'] = array("Erreur PDO : ".$e->getMessage());
  }
} else {
  $_SESSION['errorChamps'] = array("Merci de remplir les deux champs");
}
?>
