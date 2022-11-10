<?php
if (isset($_GET['matricule'])){
    $db = new PDO('mysql:host=127.0.0.1;dbname=Pro_dev;', 'root', '');
    $matricule = $_GET['matricule'];
    $stmt=$db->prepare("SELECT * FROM user where matricule='$matricule'");

  $stmt->execute();
  if ($stmt->rowCount() > 0) {
      $check=$stmt->fetchAll()[0];
      $role = $check['role'] === "admin" ? "user" : "admin";
      $matricule = $check['matricule'];
      $sql = "UPDATE user SET `role`='$role' WHERE matricule='$matricule'";
      $stmt1 = $db->exec($sql);
      //$stmt->execute();
      header('location: admin.php');
      exit;
  }
}
