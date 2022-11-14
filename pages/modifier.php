<?php
include '../model/model.php';


if (isset($_GET['matricule'])) {

  $matricule = $_GET['matricule'];
  // nom base de donne/
  $db = new PDO('mysql:host=127.0.0.1;dbname=Pro_dev;', 'root', '');
  $stmt=$db->prepare("SELECT * FROM user where matricule='$matricule'");

  $stmt->execute();
  if ($stmt->rowCount() > 0) {
      $check=$stmt->fetchAll()[0];
  }

  if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    $matricule = $_GET['matricule'];
    $datemodif = date('y-m-d h:i:s');

    $stmtAjoutPersonne = $db->prepare("UPDATE user SET nom='$nom',prenom='$prenom',email='$email', date_modif='$datemodif' WHERE matricule='$matricule'");
    $stmtAjoutPersonne->execute();
    if ($stmtAjoutPersonne) {
      header('location: admin.php?reponse=modification réussie');
    } else {
      die('Erreur : ' . $e->getMessage());
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="accueil.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="/bootstrap/dist/js/bootstrap.js">
  <link rel="stylesheet" href="/bootstrap/scss/bootstrap.scss">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary">
  <div style="margin-top: 90px ;"></div>
  <div class="container bg-light col-lg-4 col-md-4 col-sm-12 mt-4" style="border-radius: 10px ; box-shadow: 4px 4px 4px #000 ;">
    <br> 
    <form action="" enctype="multipart/form-data" method="POST" id="submit" class="h-100 d-flex align-items-center justify-content-center flex-column">
      <center><button type="button" class="text-white btn-lg text-center mt-2" style="background-color:rgba(62, 30, 25, 1);" disabled>Formulaire de modification</button></center><br>
      <div class="text-danger d-flex justify-content-center">
        <?= $_GET['erreur'] ?? null ?>
      </div>
      <div class="text-success d-flex justify-content-center">
        <?= $_GET['success'] ?? null ?>
      </div>
      <div class="input-control col-md-6">
        <div class="">
          <label for="inputNom4" class="form-label">Nom</label>
          <input type="text" value="<?= $check['nom'] ?? null?>" name="nom" class="form-control border border-3 border-secondary" id="nom" placeholder="nom" style="background-color:rgba(227, 215, 206, 1)">
          <span id="erreur"></span>
        </div>
      </div>
      <div class="input-control col-md-6 mb-2">
        <div class="">
          <label for="inputPrenom4" class="form-label">Prenom</label>
          <input type="Prenom" value="<?= $check['prenom'] ?? null?>" name="prenom" class="form-control border border-3 border-secondary" id="prenom" placeholder="prenom" style="background-color:rgba(227, 215, 206, 1)">
          <span id="erreur1"></span>
        </div>
      </div>
      <div class="input-control col-md-6">
        <div class="">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="Email" value="<?= $check['email'] ?? null?>" name="email" class="form-control border border-3 border-secondary" id="Email" placeholder="Email" style="background-color:rgba(227, 215, 206, 1)">
          <span id="erreur2"></span>
        </div>


        <center><button type="submit" name="submit" class="col- btn-lg text-center mb-4 mt-5" style="background-color:rgba(174, 115, 74, 1)">Modifier</button></center>
    </form><br>
  </div>
  <script src="js/modifi.js"></script>

</body>

</html>