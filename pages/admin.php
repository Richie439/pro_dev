<?php session_start();
require "../model/model.php";
$db = new PDO('mysql:host=127.0.0.1;dbname=Pro_dev;', 'root', '');
$reponse = $db->query('SELECT COUNT(*) AS total FROM `user` WHERE `etat`= 1');
$total_lignes = $reponse->fetch()['total'];
$limite = 5;
$nbre_pages = ceil($total_lignes / $limite);

$page = (isset($_GET['page']) and $_GET['page'] > 0) ? $_GET['page'] : 1;
$page = (isset($_GET['page']) and $_GET['page'] > $nbre_pages) ? $nbre_pages : $page;
$debut = ($page - 1) * $limite;

$reponse = $db->prepare("SELECT * FROM user WHERE etat= 1   ORDER BY id ASC LIMIT :debut, :limite");
$reponse->bindValue('debut', $debut, PDO::PARAM_INT);
$reponse->bindValue('limite', $limite, PDO::PARAM_INT);
$reponse->execute() || die('Impossible de charger la page');
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<!-- background-color:RGB(51, 21, 15) -->
<!-- style="background-color:rgba(156, 156, 163, 1)" -->

<body style="background-color:rgba(156, 156, 163, 1)">
<a href="admin.php"><span class="material-symbols-outlined">
keyboard_return
</span></a>
    <div class="container border-danger bg-white pt-1">
        <div class="container admin col-lg-12 mt-5">
            <div class="row text-white btn-lg text-center mt-2" style="background-color:RGB(51, 21, 15)">
                <span class="d-flex justify-content-center">
                    <!-- pour l'affichage sur le profil -->
                    <span class="col-1 ">
                        <?php if (base64_encode($_SESSION['photo']) != "") : ?>
                            <img src="data:image/jpg;base64,<?= base64_encode($_SESSION['photo']) ?>" class="rounded-circle" height="80" width="80" alt="">
                        <?php else : ?>
                            <div class="rounded-circle" style="height: 60px;width:30px">
                                <?= mb_substr($_SESSION['nom'], 0, 1) . ' ' . mb_substr($_SESSION['prenom'], 0, 1); ?>
                            </div>
                        <?php endif; ?>
                        <em><?= $_SESSION['matricule'] ?? null ?></em>
                    </span>

                    <span class="d-flex  mt-4  w-50" style="max-height: 2rem;">
                        <?= $_SESSION['nom'] ?? null ?>
                        <?= $_SESSION['prenom'] ?? null ?>
                        <span style="margin-left: 4rem">
                            <h4><a href="archive_admin.php" class="text-white">liste des archives</a> </h4>
                        </span>
                    </span>

                    <div class="ml-auto  mt-3 " style="margin-left:auto;max-height: 2.5rem;">
                        <form class="d-flex" action="" method="get" role="search">
                            <input class="form-control me-2" name="search" type="search" placeholder="Recherche" aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </form>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <a href="connexion.php" class="mt-1"><i class="bi bi-box-arrow-right text-white " style="font-size:40px;"></i></a>

                </span>
            </div>

            <h1 class="d-flex justify-content-center">Espace Administrateur</h1>

            <div class="row">
                <table class="table table-striped table-bordered border border-4 border-dark">
                    <thead class="text-white btn-lg text-center border border-4 border-dark" style="background-color:rgba(174, 115, 74, 1)">
                        <tr class="border border-4 border-dark">
                            <th scope="col" class="border border-4 border-dark">Nom</th>
                            <th scope="col" class="border border-4 border-dark">Prenom</th>
                            <th scope="col" class="border border-4 border-dark">Email</th>
                            <th scope="col" class="border border-4 border-dark">Matricule</th>
                            <th scope="col" class="border border-4 border-dark">Role</th>
                            <th scope="col" class="border border-4 border-dark">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <?php
                            
                            $db = new PDO('mysql:host=127.0.0.1;dbname=Pro_dev;', 'root', '');
                            $sql = $db->query('SELECT * FROM user WHERE etat=1');
                            $aff=false;
                            if (isset($_GET['search']) && !empty($_GET['search'])) {
                                $search = $_GET['search'];
                                $sql = $db->query("SELECT * FROM user WHERE nom LIKE '%$search%' OR prenom LIKE '%$search%' OR matricule OR email LIKE '%$search%' AND etat=1");
                                $data= $sql->fetch();
                                if($_SESSION['email']!=$data['email']){
                                    $aff=true;
                                }
                                

                            }
                            ?>
                            <?php
                           if($aff){
                            
                            echo '<tr>';
                           

                                echo ' <tr  scope="row">';
                                echo '<td class="border border-4 border-dark">' . $data['nom'] . '</td>';
                                echo '<td class="border border-4 border-dark">' . $data['prenom'] . '</td>';
                                echo '<td class="border border-4 border-dark">' . $data['email'] . '</td>';
                                echo '<td class="border border-4 border-dark">' . $data['matricule'] . '</td>';
                                echo '<td class="border border-4 border-dark">' . $data['role'] . '</td>';

                                echo '<td class= "border border-4 border-dark">

                                    <span style="display:flex; justify-content:space-between;font-size:30px;">
                                  <a title="modifer" onclick= "return confirm(\'voulez vous vraiment modifier?\')" href="modifier.php?matricule=' . $data['matricule'] . '"><i class="bi bi-pencil-square text-dark "></i></a>
                                    <a onclick= "return confirm(\'voulez vous vraiment archiver?\')" href="traitement_archive.php?matricule=' . $data['matricule'] . '"><i class="bi bi-archive-fill text-dark"></i></a>
                                    <a href="changer.php?matricule=' . $data['matricule'] . '"><i class="bi bi-arrow-repeat text-dark"></i></a>
                                    </span>

                                    </td>';



                                echo '</tr>';
                           }else{
                             
                            $count = 1;
                            for ($i = 0; $i < $limite; $i++) {
                                $debut++;

                                echo '<tr>';
                                while ($a = $reponse->fetch()) {
                                    if($_SESSION['email'] != $a['email']){

                                        echo ' <tr  scope="row">';
                                        echo '<td class="border border-4 border-dark">' . $a['nom'] . '</td>';
                                        echo '<td class="border border-4 border-dark">' . $a['prenom'] . '</td>';
                                        echo '<td class="border border-4 border-dark">' . $a['email'] . '</td>';
                                        echo '<td class="border border-4 border-dark">' . $a['matricule'] . '</td>';
                                        echo '<td class="border border-4 border-dark">' . $a['role'] . '</td>';
    
                                        echo '<td class= "border border-4 border-dark">
        
                                            <span style="display:flex; justify-content:space-between;font-size:30px;">
                                          <a onclick= "return confirm(\'voulez vous vraiment modifier?\')" href="modifier.php?matricule=' . $a['matricule'] . '"><i class="bi bi-pencil-square text-dark "></i></a>
                                            <a onclick= "return confirm(\'voulez vous vraiment archiver?\')" href="traitement_archive.php?matricule=' . $a['matricule'] . '"><i class="bi bi-archive-fill text-dark"></i></a>
                                            <a href="changer.php?matricule=' . $a['matricule'] . '"><i class="bi bi-arrow-repeat text-dark"></i></a>
                                            </span>
        
                                            </td>';
    
    
    
                                        echo '</tr>';

                                    }

                                  
                                }
                            }
                           }
                            ?>
                            <!-- while ($a = $sql->fetch()) {

                                echo ' <tr  scope="row">';
                                echo '<td class="border border-4 border-dark">' . $a['nom'] . '</td>';
                                echo '<td class="border border-4 border-dark">' . $a['prenom'] . '</td>';
                                echo '<td class="border border-4 border-dark">' . $a['email'] . '</td>';
                                echo '<td class="border border-4 border-dark">' . $a['matricule'] . '</td>';
                                echo '<td class="border border-4 border-dark">' . $a['role'] . '</td>';

                                echo '<td class= "border border-4 border-dark">

                                    <span style="display:flex; justify-content:space-between;font-size:30px;">
                                    <a href="modifier.php?matricule=' . $a['matricule'] . '"><i class="bi bi-pencil-square text-dark "></i></a>
                                    <a href="traitement_archive.php?matricule=' . $a['matricule'] . '"><i class="bi bi-archive-fill text-dark"></i></a>
                                    <a href="changer.php?matricule=' . $a['matricule'] . '"><i class="bi bi-arrow-repeat text-dark"></i></a>
                                    </span>

                                    </td>';



                                echo '</tr>';
                            } -->

                            
                        </tr>

                    </tbody>
                </table>
                <tfoot>
                    <tr>
                        <th colspan="7" class="text-center">
                            <nav aria-label="Page navigation example d-flex justify-content-center">
                                <ul class="pagination d-flex justify-content-center">
                                        <li class="page-item">   
                                    <?php
                                    if ($page > 1) {
                                    ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                    <?php
                                    } else {
                                        echo '
                                            <a class="page-link pe-none  disabled "  href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                                                <span class="disabled" aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                    ';
                                    }

                                    for ($i = 1; $i <= $nbre_pages; $i++) {
                                        if ($i != $page) {
                                            echo '<li class="page-item"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                                        } else {
                                            echo '
                                                <li class="page-item">   
                                                    <a class="page-link border border-success"  href="#" aria-label="Previous">
                                                        <span class="disabled" aria-hidden="true">' . $i . '</span>
                                                    </a>
                                                </li>
                                                ';
                                        }
                                    }
                                    if ($page < $nbre_pages) {
                                    ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    <?php
                                    } else {
                                    ?>
                                        <li class="page-item">
                                            <a class="page-link pe-none disabled" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                                                <span class="disabled" aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </th>
                    </tr>
                </tfoot>
            </div>

        </div>
</body>

</html>