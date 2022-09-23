<?php

    require('index.php');
    require('admin/affvideo.php');

?>
<br><br>
<div class="col-md-7" style="margin: 25px ;">

    <a href="ajoutvid.php" class="btn btn-primary">Ajouter une Video</a> <br><br>

    <div class="card">
    <div class="card-header">

        
        <table class="table table-bordered">
            <thead >
                <tr>
                    <th>Titre</th>                              
                    <th>Maison d'Edition</th>                              
                    <th>Catégorie</th>                              
                </tr>
            </thead>

            <?php while($liste = $re->fetch()) { ?>
            <tbody>
                <tr>
                    <td><?= $liste['titre']; ?></td>
                    <td><?= $liste['nom_maison']; ?></td>
                    <td><?= $liste['nom_categorie']; ?></td>
                    
                </tr>
            </tbody>
            <?php } ?>
        </table>

    </div>
    </div>
</div>      

