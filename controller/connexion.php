<?php 
include("config.php");
?>
<?php
$msg = ""; 
if(isset($_POST['submitBtnLogin'])) {
  $email = trim($_POST['email']);
  $mdp = trim($_POST['mdp']);
  if($email != "" && $mdp != "") {
    try {
      $query = "select * from `etudiant` where `email`=:email and `mdp`=:mdp";
      $stmt = $conn->prepare($query);
      $stmt->bindParam('email', $email, PDO::PARAM_STR);
      $stmt->bindValue('mdp', $mdp, PDO::PARAM_STR);
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        $_SESSION['sess_user_id']   = $row['id'];
        $_SESSION['sess_user_name'] = $row['email'];
        $_SESSION['sess_name'] = $row['name'];
       
      } else {
        $msg = "Mot de passe ou email invalide";
      }
    } catch (PDOException $e) {
      echo "Erreur PDO : ".$e->getMessage();
    }
  } else {
    $msg = "Merci de remplir les deux champs";
  }
}
header('Location: ../index.php');
?>
