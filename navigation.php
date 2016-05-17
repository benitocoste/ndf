<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">NDF Simphonis</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php //if($_GET['page']="utilisateur"){ echo 'class="active"';}?>><a href="bureau.php?page=utilisateur">Utilisateurs</a></li>
            <li><a href="bureau.php?page=parametrage">Parametrage</a></li>
            <li><a href="bureau.php?page=note">Note</a></li>
            <li><a href="bureau.php?page=frais">Reçu</a></li>
            <li><a href="bureau.php?page=fraiskilo">Frais kilometrique</a></li>
            <li><a href="./fonction/deconnection.php">Deconnexion</a></li>
          </ul>
        </div>
      </div>
    </nav>