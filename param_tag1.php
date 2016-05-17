<div class="row">
          <div class="col-lg-6">
            <h2 >Création </h2>
            <form role="form" action="./fonction/creertag1.php" method="post">
            <div class="form-group">
              <label for="libellet1">Libelle</label>
              <input type="text" class="form-control" id="email" name="tag" placeholder="Libelle du tag 1">
            </div>
            <button type="submit" class="btn btn-default">Créer</button>
          </form>
          </div>
          <div class="col-lg-6">
            <h2>Liste </h2>
            

       <table class="table table-hover">
    <thead>
      <tr>
        <th>id tag</th>
        <th>Libelle</th>
      </tr>
    </thead>
    <tbody>
              <!--<form action="bureau.php" method="post">-->

        <?php
        //on ajoute la donnée

        $tabtag1 = $contag1->listerTag1($MaBase->connexion,$_SESSION['idutilisateur']);
        //on parcourt notre tableau d'utilisateur : 
        foreach ($tabtag1 as $letag){
                echo '<tr>';
                echo '<td>'.$letag->idtag.'</td>';
                echo '<td>'.$letag->libellet.'</td>';
                echo '<td>Supprimer le <input type="submit" name="deleteItem" value="'.$letag->idtag.'" /></td>"';
                echo '</tr>';
        }

        ?>
        <!--</form>-->

    </tbody>
  </table>

       
          </div>
     </div>