<?php  require('./Proprio/admin/affvideo.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Catalogue</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="Proprio/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Catalo-Vid</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Catalo-Vid!</h1>
                    <p class="lead mb-0">Take advantage of our different services and programs for the whole family</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    
                    
                    <div class="row">
                    <?php 
                        if ($re->rowCount() > 0) {
                            while($trouver = $re->fetch()) { ?>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h2 class="card-title h4"><?= $trouver['titre']; ?> : <?= $trouver['nom_categorie']; ?> </h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                </div>
                            </div>
                            
                        </div>
                    <?php }  } else {
                        ?>
                        <h2>Aucune reponse trouver</h2>
                        <?php
                    }
                
                ?>
                     
                      
                        
                    </div>
                    
                    
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <form action="" method="get">
                                    <input type="text" placeholder="Enter search term..." name="s" autocomplete="off">
                                    <input type="submit" value="Rechercher" name="envoyer">
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
