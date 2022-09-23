<?php
    session_start();

    require("dbconnexion.php");

    if (isset($_POST["save"])) {
        
        if (!empty($_POST["email"]) && !empty($_POST["password"])) {
            
            $user_email = htmlspecialchars($_POST['email']);
            $user_password = htmlspecialchars($_POST['password']);

            $check = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? AND password = ?");
            $check->execute(array($user_email, $user_password));
            $data = $check->fetch();

            if ($check->rowCount() > 0) {
                
                if ($user_password === $data["password"]) {

                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $data['iduser'];
                    $_SESSION["user"] = $data['prenomuser'];
                    $_SESSION['statut'] = $data['statut'];

                   
                        header("location: index.php");
                   
                    
                }
            }
        }
    }

   

    


?>



