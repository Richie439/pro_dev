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
            <br><br>
            <center><button type="button" class="btn btn-secondary btn-lg text-center mt-2" disabled>Formulaire D'inscription</button></center><br>
            <h5 class="text-danger text-center">Email existe déjà ou mot de passe incorrect</h5>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nom</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputPassword4" class="form-label">Prenom</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputState" class="form-label">Role</label>
                    <select id="inputState" class="form-select">
                        <option></option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Mot de passe</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputPassword4" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Photo</label>
                </div>
            </form><br>
            <center><button type="button" class="btn btn-success btn-lg text-center mb-4">Se connecter</button></center>
        </div>
    </body>
</html>