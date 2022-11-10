<?php session_start();


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
        
        <form action="traitement-inscription.php" enctype="multipart/form-data" method="POST" id="submit" class="row g-3">
        <center><button type="button" class="text-white btn-lg text-center mt-2" style="background-color:rgba(62, 30, 25, 1);" disabled>Formulaire D'inscription</button></center><br>
            <div class="text-danger d-flex justify-content-center">
            <?= $_GET['erreur'] ?? null ?>
            </div>
            <div class="text-success d-flex justify-content-center">
            <?= $_GET['success'] ?? null ?>
            </div>
        <div class="input-control col-md-6">
                <div class="">
                    <label for="inputNom4" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control border border-3 border-secondary" id="Nom" placeholder="nom" style="background-color:rgba(227, 215, 206, 1)">
                    <span id="erreur"></span>
                </div>
            </div>
            <div class="input-control col-md-6 mb-2">
                <div class="">
                    <label for="inputPrenom4" class="form-label">Prenom</label>
                    <input type="Prenom" name="prenom" class="form-control border border-3 border-secondary" id="Prenom" placeholder="Prenom" style="background-color:rgba(227, 215, 206, 1)">
                    <span id="erreur1"></span>
                </div>
            </div>
            <div class="input-control col-md-6">
                <div class="">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="Email" name="email" class="form-control border border-3 border-secondary" id="Email" placeholder="Email" style="background-color:rgba(227, 215, 206, 1)">
                    <span id="erreur2"></span>
                </div>
            </div>
            <div class="input-control col-md-6 mb-2">
                <div class="">
                    <label for="inputRole" class="form-label">Role</label>
                    <select id="Role" name="role" class="form-select border border-3 border-secondary" placeholder="Selectionner" style="background-color:rgba(227, 215, 206, 1)">
                        <option></option>
                        <option value="admin">Administrateur</option>
                        <option value="user">Utilisateur simple</option>
                    </select>
                    <span id="erreur3"></span>
                </div>
            </div>
            <div class="input-control col-md-6">
                <div class="">
                    <label for="inputEmail4" class="form-label">Mot_de_passe</label>
                    <input type="text" name="mot_de_passe" class="form-control border border-3 border-secondary" id="password" placeholder="Mot de passe" style="background-color:rgba(227, 215, 206, 1)">
                    <span id="erreur4"></span>
                </div>
            </div>
            <div class="input-control col-md-6 mb-2">
                <div class="">
                    <label for="inputMot de passe4" class="form-label">Mot de passe</label>
                    <input type="text" class="form-control border border-3 border-secondary" id="password1" placeholder="Mot de passe" style="background-color:rgba(227, 215, 206, 1)">
                    <span id="erreur5"></span>
                </div>
            </div>
            <div class="input-control">
                <div class="input-group mb-3">
                    <input type="file" name="photo" class="form-control border border-3 border-secondary" id="inputGroupFile02" placeholder="cliquer" style="background-color:rgba(227, 215, 206, 1)">
                    <label class="input-group-text" for="inputGroupFile02">Photo</label>
                </div>
            </div>
            <center><button type="submit" name="submit" class="col-6 btn-lg text-centerm mb-4" style="background-color:rgba(174, 115, 74, 1)">S'inscrire</button></center>
            <a href="connexion.php" class="text-left mt-">Se connecter ? </h4>
        </form><br>
    </div>
    <script src="../pages/js/inscription.js"></script>
</body>

</html>