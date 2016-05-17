<?php
//on vérifie ici si on se connecte
require('./controleur/cutilisateur.php');
require('./modele/connexionbase.php');
session_start();
if(isset($_SESSION['idutilisateur']) && $_SESSION['idutilisateur'] > 0){
			header('Location: bureau.php'); 
}


if(isset($_POST['email']) && isset($_POST['mdp']) ){
	$conutilisateur = new CUtilisateur();
	//on se connecte à la base
	$MaBase = new Database("localhost","ndfsimphonis","root","");
	$MaBase->onseconnecte();
	$sessionok = $conutilisateur->verificationConnexion($MaBase->connexion,$_POST['email'],$_POST['mdp']);
	if($sessionok > 0){
		//on met l'id en variable
		$_SESSION['idutilisateur'] = $sessionok;
		header('Location: bureau.php'); 
	}
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>NDF Simphonis : Connexion</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->
    	<style>
    		.espacelog{
    			max-width: 400px;
    			margin: auto;
    		}
    	</style>
  </head>

  <body>

    <div class="container">
    	<div class="espacelog">
      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">NDF Simphonis</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="email" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">mot de passe</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="mot de passe" name="mdp" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      </form>
      	</div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
