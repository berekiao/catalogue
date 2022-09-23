<?php
    require ('dbconnexion.php');

    $us = $bdd->query('SELECT * FROM utilisateur WHERE statut = "user"');


?>