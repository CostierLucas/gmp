<?php require_once('./config.php');


$id = 1;

$query = "SELECT pdf_doc FROM cours WHERE id = '$id'";
$stmt = $conn->prepare($query);
    $stmt->execute(array(
      'id' => $id,
    ));
list($pdf_doc) = mysqli_fetch_array($result);
header("Content-Disposition: attachment; filename=$pdf_doc");
ob_clean();
flush();
exit;
