<?php
function mdr($salutation,$prenom,$nom){
    echo "$salutation $prenom $nom";
}
?>
<h1><?php mdr("bonjour", "Richie","Richard")?></h1>

// echo $chaine [5];  






<?php
// require "../model/model.php";



// if (isset(
//     $_POST['nom'],
//     $_POST['prenom'],
//     $_POST['age'],
//     $_POST['sexe'],
//     $_POST['username'],
//     $_POST['passwords'],
//     $_POST['tel'],
//     $_POST['email'],
//     $_POST['lieu_naissance']
// )) {



//     $nom = trim($_POST['nom']);
//     $prenom = trim($_POST['prenom']);
//     $age = trim($_POST['age']);
//     $sexe = trim($_POST['sexe']);
//     $roles = 'employer';
//     $username = trim($_POST['username']);
//     $passwords = trim($_POST['passwords']);
//     $email = trim($_POST['email']);
//     $lieu_naissance = ltrim($_POST['lieu_naissance']);
//     $tel = trim($_POST['tel']);

//     $requeste = new ModelUser();

//     $matricule = $requeste->generateMatricule();


   /*  if (!empty($nom) && !empty($prenom) && !empty($username) && !empty($lieu_naissance)) {
        $requeste->addUser($nom, $prenom, $age, $sexe, $username, $passwords, $email);
    } else {
        echo '<script>alert("Tout les champs doivent etre rempli")</script>';
    }
} */
?> 