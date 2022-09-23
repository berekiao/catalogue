<?php require('admin/login.php');

if($_SESSION['auth'] != true ){

    header('Location: connexion.php');
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Catalogue</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">ADMIN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="video.php">Vidéo</a></li>
                        <li class="nav-item"><a class="nav-link" href="categorie.php">Catégorie</a></li>
                        <li class="nav-item"><a class="nav-link" href="maison.php">Publishing House</a></li>
                        <?php if (($_SESSION['statut']) == "admin" ) {?>
                        <li class="nav-item"><a class="nav-link" href="users.php">Utilisateurs</a></li>  
                        <?php } ?>
                        <li class="nav-item"><a href="admin/logout.php" class="btn btn-primary">Deconnexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
