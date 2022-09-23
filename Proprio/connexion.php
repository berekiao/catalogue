<?php 
  require('admin/login.php');

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


    <br><br>

    
        <form style="margin: 45px;" method="POST" >
        
            <h1 style="color:blue" >Connexion</h1>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputPassword4">Mot de Passe</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
                </div>
            </div> <br>
            <button type="submit" class="btn btn-primary" name="save">Connexion</button>

           
        </form>

</body>
</html>
