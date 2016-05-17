<div class="container cgeneral">
    <div>
      <?php
          //echo  $_SESSION['idutilisateur'];

      ?>
      <h1>Création utilisateur</h1>
      <form role="form" action="bureau.php" method="post">
        <div class="form-group">
          <label for="email">Login:</label>
          <input type="text" class="form-control" id="email" name="login" placeholder="Saisir le login">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Saisir l'email">
        </div>
        <div class="form-group">
          <label for="mdp">mdp:</label>
          <input type="password" class="form-control" id="pwd" name="mdp" placeholder="Entrer le mot de passe">
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="admin" value="1"> Administrateur</label>
        </div>
        <button type="submit" class="btn btn-default">Envoyer</button>
      </form>
    </div>
    
    <div>
      <h1>Liste utilisateur</h1>
      <form action="bureau.php" method="post">

       <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>login</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
        <?php
        //on ajoute la donnée
        $tabutilisateur = $conutilisateur->listerUtilisateur($MaBase->connexion);
        //on parcourt notre tableau d'utilisateur : 
        foreach ($tabutilisateur as $lutilisateur){
                echo '<tr>';
                echo '<td>'.$lutilisateur->idutilisateur.'</td>';
                echo '<td>'.$lutilisateur->login.'</td>';
                echo '<td>'.$lutilisateur->mdp.'</td>';
                echo '<td>Supprimer le <input type="submit" name="deleteItem" value="'.$lutilisateur->idutilisateur.'" /></td>"';

                echo '</tr>';
        }

        ?>
    </tbody>
  </table>
</form>
    </div>
  </div>