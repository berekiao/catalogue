<?php

    require('index.php');

    require('admin/addusers.php');

?>
<br>

<form action="" method="post" style="margin: 45px ;">
    <h2>Utilisateurs</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nomuser">
    </div> <br>
    <div class="form-group">
        <label for="exampleInputEmail1">Prenom</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="prenomuser">
    </div> <br>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
    </div> <br>
    <div class="form-group">
        <label for="exampleInputEmail1">Mot de Passe</label>
        <input type="password" class="form-control" id="exampleInputEmail1" name="password">
    </div> <br>
    
    <button type="submit" class="btn btn-primary" name="send">Ajouter</button>
</form>