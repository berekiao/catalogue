<?php

    require('index.php');
    require('admin/affcategorie.php');

?>
<br><br>
<div class="col-md-7" style="margin: 25px ;">

    <a href="ajoutcat.php" class="btn btn-primary">Ajouter une Catégorie</a> <br><br>

    <div class="card">
    <div class="card-header">

        
        <table class="table table-bordered">
            <thead >
                <tr>
                    <th>Nom Categorie</th>                              
                </tr>
            </thead>

            <?php while($liste = $recup->fetch()) { ?>
            <tbody>
                <tr>
                    <td><?= $liste['nom_categorie']; ?></td>
                    
                </tr>
            </tbody>
            <?php } ?>
        </table>

    </div>
    </div>
</div>      

