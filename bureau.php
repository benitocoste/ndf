<?php

//on ajoute notre classe de connexion
require('./modele/connexionbase.php');
//on ajout tous nos modeles
require('./modele/mutilisateur.php');
require('./modele/mtag.php');
//on ajoute tous les controleurs 
require('./controleur/cutilisateur.php');
require('./controleur/ctag1.php');
require('./controleur/ctag2.php');
require('./controleur/ccategorie.php');
require('./controleur/ctxkilometrique.php');
require('./controleur/cnote.php');


//on charge la variable de session : 
session_start();

//on se connecte à la base
$MaBase = new Database("localhost","ndfsimphonis","root","");
$MaBase->onseconnecte();

//on instancie les controleur
$conutilisateur = new CUtilisateur();
$contag1  =new CTag1();
$contag2 = new CTag2();
//$concategorie = new CCategorie();
//$contxkilo = new CTxkilo();

//on se créé une donnée

if (isset($_POST['login']) && $_POST['login']<> ''){
  //c'est parti
  if (isset($_POST['admin'])){
    $resultatadmin = true;

  }else{
    $resultatadmin = 0;    
  }

  //echo "resultatadmin est ".$resultatadmin;
    $monutilisateur = new Utilisateur($_POST['login'], $_POST['mdp'], $resultatadmin, true,$_POST['email']);
//echo $monutilisateur->admin;
  $conutilisateur->creerUtilisateur($MaBase->connexion,$monutilisateur);
  //on efface tous les post
  unset($_POST);
}
//on regarde si on supprimer un utilisateur

if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem']))
{
$conutilisateur->supprimerUtilisateur($MaBase->connexion,$_POST['deleteItem']);


}
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title> note de frais simphonis</title>

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <style>
    .container{
      display: block;
    }
    nav{
      display: block;
    }
    .cgeneral{
      max-width: 80%;
      margin-top: 50px;
    }
    </style>
  </head>

  <body>

    
    
  <?php
    //la navigation
    include './navigation.php';
    //la page suivant le type de page
  if(isset($_GET['page'])){
    switch ($_GET['page']){
      case "note":
          include './note.php';
          break;
      case "parametrage":
          include './parametrage.php';
          break;
      case "utilisateur":
          include './utilisateur.php';
          break;
      case "frais":
          include './frais.php';
          break;
      case "fraiskilo":
          include './fraiskilo.php';
          break;
      default:
          include './note.php';    
        }
  }else{
     include './note.php';    

  }
    
  ?>

</html>
