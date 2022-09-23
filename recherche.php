<?php  
    require('./Proprio/admin/dbconnexion.php');

    $re = $bdd->query('SELECT * FROM video, maison, categorie WHERE video.idmaison = maison.idmaison AND categorie.idcategorie = video.idcategorie');

    if (isset($_GET["envoyer"]) && !empty($_GET["s"])) {
        $rech = htmlspecialchars($_GET['s']);
        $re = $bdd->query('SELECT * FROM video, maison, categorie WHERE video.idmaison = maison.idmaison AND categorie.idcategorie = video.idcategorie AND nom_categorie LIKE "%'.$rech.'%" ');
    }


?>

<form action="" method="GET"> 
    <input type="search" name="s" placeholder="Faites vos recherches" autocomplete="OFF">
    <input type="submit" name="envoyer">
</form>

<section>
    <?php 
        if ($re->rowCount() > 0) {
            while($trouver = $re->fetch()){
                ?>
                <p><?= $trouver['nom_categorie']; ?></p>  
                <?php
            }
            
        }else {
            ?>
            <p>Aucune reponse trouver</p>
            <?php
        }
    
    ?>
</section>
