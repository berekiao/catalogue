<?php

    require('index.php');

    require('admin/addcategorie.php');

?>
<br>

<form action="" method="post" style="margin: 45px ;">
    <h2>Catégorie</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">Nom Catégorie</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nom_categorie">
    </div> <br>
    
    <button type="submit" class="btn btn-primary" name="send">Ajouter</button>
</form>