<?php
// Récupérer le nombre d'enregistrements
$count=$pdo->prepare("select count(id) as cpt from articles");
$count->setfetchMode(PDO::FETCH_ASSOC);
$count->execute();
$count=$count->fetchAll();
// pagination
@$page=$_GET["page"];
$nbr_element_par_page=5;
$nbr_de_page=ceil($tcount[0]["cpt"]/$nbr_element_par_page);
$debut=
// echo"$nbr_element_par_page";

// récupérer les enreigistrements eux-memes
$sel=$pdo->prepare("select user from  order by a");
$sel->setfetchMode(PDO::FETCH_ASSOC);
$sel->execute();
$tab=$sel->fetchAll();
