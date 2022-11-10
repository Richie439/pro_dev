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
    
        <div class="container bg-light col-lg-4 col-md-4 col-sm-12 mt-4">
            <div class="row ">
                <img src="../images/rdv.jpg" class="rounded" alt="logo" style="width: 200%">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 offset-2">
                        <div class="card mb-5 border border-4 border-secondary" style="margin-top: -30px ;">
                            <!-- <span class="border border-secondary"></span> -->
                            <div class="card-body">
                            <form action="traitement-connexion.php" method="POST" id="submit">
                                <center><button type="button" class="text-white col-12 btn-lg text-center mt-2" style="background-color:RGB(51, 21, 15) ;" disabled>Connexion</button></center>
                                <div class="input-control">
                                    <div class="mb-3 mt-4">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email" style="background-color:rgba(227, 215, 206, 1)">
                                        <span id="erreur"></span>
                                    </div>
                                </div>
                                <div class="input-control">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Mot_de_passe</label>
                                        <div class="d-flex" style="background-color:rgba(227, 215, 206, 1)">
                                            <input name="mot_de_passe" type="password" class="form-control" id="password" placeholder="Mot de passe" style="background-color:rgba(227, 215, 206, 1)">
                                            <img src="../images/oeil.svg" id="oeil" alt="" style="margin-right: .5rem;">
                                            <!-- <i class="bi bi-eye-slash"></i> -->
                                            <img src="../images/oeil.1.svg" class="d-none" id="oeil1" alt="" style="margin-right: .5rem;">
                                            <!-- <i class="bi bi-eye"></i> -->
                                        </div>
                                        <span id="erreur1"></span>
                                    </div>
                                </div>
                                <center><button type="submit" name="submit" class="btn-lg text-center col-10 mt-2" style="background-color:rgba(174, 115, 74, 1);">Se connecter</button></center>
                                <a href="inscription.php" class="text-left mt-">Inscription ? </h5>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <script src="js/connexion.js"></script>
</body>

</html>