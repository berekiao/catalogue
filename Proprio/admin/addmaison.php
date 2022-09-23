<?php

    require ('dbconnexion.php');

    if (isset($_POST['send'])) {
        
        if (!empty($_POST['nom_maison'])) {
            
            $maiosn = htmlspecialchars($_POST['nom_maison']);

            $insert = $bdd->prepare('INSERT INTO maison(nom_maison) VALUES (?)');
            $insert->execute(array($maiosn));
        }
    }

?>