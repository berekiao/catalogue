<?php

    require ('dbconnexion.php');

    if (isset($_POST['send'])) {
        
        if (!empty($_POST['nomuser']) && !empty($_POST['prenomuser']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            
            $nom = htmlspecialchars($_POST['nomuser']);
            $prenom = htmlspecialchars($_POST['prenomuser']);
            $email = htmlspecialchars($_POST['email']);
            $pass = htmlspecialchars($_POST['password']);

            $insert = $bdd->prepare('INSERT INTO utilisateur(nomuser, prenomuser, email, password) VALUES (?,?,?,?)');
            $insert->execute(array($nom, $prenom, $email, $pass));
        }
    }

?>