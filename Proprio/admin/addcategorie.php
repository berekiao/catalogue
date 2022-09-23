<?php

    require ('dbconnexion.php');

    if (isset($_POST['send'])) {
        
        if (!empty($_POST['nom_categorie'])) {
            
            $catego = htmlspecialchars($_POST['nom_categorie']);

            $insert = $bdd->prepare('INSERT INTO categorie(nom_categorie) VALUES (?)');
            $insert->execute(array($catego));
        }
    }

?>