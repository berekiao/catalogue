<?php

    require('index.php');

    require('admin/addmaison.php');

?>
<br>

<form action="" method="post" style="margin: 45px ;">
    <h2>Maison d'Edition</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">Nom Maison</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nom_maison">
    </div> <br>
    
    <button type="submit" class="btn btn-primary" name="send">Ajouter</button>
</form>