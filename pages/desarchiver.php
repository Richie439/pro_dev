<?php
if (isset($_GET['matricule'])) {
    $matricule = $_GET['matricule'];
    $db = new PDO('mysql:host=127.0.0.1;dbname=Pro_dev;', 'root', '');
    $stmt=$db->prepare("UPDATE user SET etat=1 where matricule='$matricule'");

    $stmt->execute();
    header('location: admin.php?reponse=Desarchivage réussie');
}