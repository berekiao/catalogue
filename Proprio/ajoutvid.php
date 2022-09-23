<?php

    require('index.php');

    require('admin/addvideo.php');

?>
<br>

<form action="" method="post" style="margin: 45px ;">
    <h2>Video</h2>
    <div class="col-md-8">
        <label for="exampleInputEmail1">Titre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="titre">
    </div> <br>

    <div class="col-md-8">
        <label for="exampleInputEmail1" class="form-label">Maison d'Edition</label>
        <select class="form-control" id="exampleFormControlSelect1" name= "idmaison" >
            <option selected>Maison d'Edition</option>
            <?php foreach($recup as $re) : ?>
            <option value="<?= $re->idmaison ?>"><?= $re->nom_maison ?></option>                
            <?php endforeach; ?>
        </select>
    </div><br>

    <div class="col-md-8">
        <label for="exampleInputEmail1" class="form-label">Categorie</label>
        <select class="form-control" id="exampleFormControlSelect1" name= "idcategorie" >
            <option selected>Categorie</option>
            <?php foreach($rec as $r) : ?>
                <option value="<?= $r->idcategorie ?>"><?= $r->nom_categorie ?></option>
            <?php endforeach; ?>
        </select>
    </div> <br>
    
    <button type="submit" class="btn btn-primary" name="send">Ajouter</button>
</form>