<?php

    require ('dbconnexion.php');

    
    $maison = $bdd->query('SELECT * FROM maison');
    $recup = $maison->fetchAll(PDO::FETCH_OBJ);

    $categorie = $bdd->query('SELECT * FROM categorie');
    $rec = $categorie->fetchAll(PDO::FETCH_OBJ);

    if (isset($_POST['send'])) {
        
        if (!empty($_POST['titre']) && !empty($_POST['idmaison']) && !empty($_POST['idcategorie'])) {
            
            $titre = htmlspecialchars($_POST['titre']);
            $mais = htmlspecialchars($_POST['idmaison']);
            $cat = htmlspecialchars($_POST['idcategorie']);

            $insert = $bdd->prepare('INSERT INTO video(titre, idmaison, idcategorie) VALUES (?,?,?)');
            $insert->execute(array($titre, $mais, $cat));
        }
    }

?>