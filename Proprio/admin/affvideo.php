<?php
    require ('dbconnexion.php');

    $re = $bdd->query('SELECT * FROM video, maison, categorie WHERE video.idmaison = maison.idmaison AND categorie.idcategorie = video.idcategorie');

    if (isset($_GET["envoyer"]) && !empty($_GET["s"])) {
        $rech = htmlspecialchars($_GET['s']);
        $re = $bdd->query('SELECT * FROM video, maison, categorie WHERE video.idmaison = maison.idmaison AND categorie.idcategorie = video.idcategorie AND nom_categorie LIKE "%'.$rech.'%" ');
    }


?>