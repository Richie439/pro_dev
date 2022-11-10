<?php
require "../model/model.php";
session_start();
/* var_dump($_POST); */
if (isset($_POST["submit"])){
    $requeste = new ModelUser();
    $email=$_POST["email"];
    $mot_de_passe=$_POST["mot_de_passe"];
    $user = $requeste->selectUser($email);
    if (!$user || !password_verify($mot_de_passe, $user['mot_de_passe'])){
        header('location: connexion.php?erreur=Email ou mot de passe incorrect');
        exit;
    }
    

    
    /* var_dump($_POST); */
    // pour la recupération au niveau de la bd(admin/user)
    $_SESSION['matricule'] = $user['matricule'];
    $_SESSION['nom'] = $user['nom'];
    $_SESSION['prenom'] = $user['prenom'];
    $_SESSION['photo'] = $user['photo'];
    $_SESSION['id'] = $user['id']; 
    $_SESSION['email'] =$user['email'];
    if ($user['role'] === 'admin' && $user['etat']==1){
        $_SESSION['role'] = $user['role'];
        header('location: admin.php');
        exit;
    }
    else{
        header('location: connexion.php');
    }
    if ($user['role'] === 'user' && $user['etat']==1){
        $_SESSION['role'] = $user['role'];
        header('location: user.php');
        exit;
    }
    else{
        header('location: connexion.php');
    }
        
  
     

}