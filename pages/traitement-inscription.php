<?php
require "../model/model.php";

if (isset($_POST["submit"])){
    $requeste = new ModelUser();
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $role=$_POST["role"];
    $mot_de_passe=$_POST["mot_de_passe"];
    $matricule=$requeste->generateMatricule();
    $photo = file_get_contents($_FILES['photo']['tmp_name']) ?? null;
    if ($requeste->getUser($email)){
        header('location: inscription.php?erreur=Email déjà existant');
        exit;
    }
    //criptage mdp
    $mot_de_passe=password_hash($mot_de_passe, PASSWORD_DEFAULT);
    $date_heure = date('y-m-d h:i:s');
   $success = $requeste->ajoutUser($nom,$prenom,$mot_de_passe,$role,$matricule,$email, $photo,$date_heure);
    if($success)
    {
        header('location: inscription.php?success=Inscription réussie');
        exit;
    } else {
        header('location: inscription.php?erreur=Une erreur est survenue veuillez reessayer');
        exit;
    }

}