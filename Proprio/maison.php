<?php

    require('index.php');
    require('admin/affmaison.php');

?>
<br><br>
<div class="col-md-7" style="margin: 25px ;">

    <a href="ajoutmai.php" class="btn btn-primary">Ajouter une Maison</a> <br><br>

    <div class="card">
    <div class="card-header">

        
        <table class="table table-bordered">
            <thead >
                <tr>
                    <th>Nom Maison d'Edition</th>                              
                </tr>
            </thead>

            <?php while($liste = $recuperation->fetch()) { ?>
            <tbody>
                <tr>
                    <td><?= $liste['nom_maison']; ?></td>
                    
                </tr>
            </tbody>
            <?php } ?>
        </table>

    </div>
    </div>
</div>      

