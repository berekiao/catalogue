<?php

    require('index.php');
    require('admin/affuser.php');

?>
<br><br>
<div class="col-md-7" style="margin: 25px ;">

    <a href="ajoutusers.php" class="btn btn-primary">Ajouter un utilisateur</a> <br><br>

    <div class="card">
    <div class="card-header">

        
        <table class="table table-bordered">
            <thead >
                <tr>
                    <th>Nom</th>                              
                    <th>Prenom</th>                              
                    <th>Email</th>                              
                </tr>
            </thead>

            <?php while($liste = $us->fetch()) { ?>
            <tbody>
                <tr>
                    <td><?= $liste['nomuser']; ?></td>
                    <td><?= $liste['prenomuser']; ?></td>
                    <td><?= $liste['email']; ?></td>
                    
                </tr>
            </tbody>
            <?php } ?>
        </table>

    </div>
    </div>
</div>      

