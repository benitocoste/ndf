<?php
//on ajoute nos require
//on ajoute notre classe de connexion
require('../modele/connexionbase.php');
require('../modele/mtag.php');
require('../controleur/ctag1.php');


//on ajoute notre session 
//on charge la variable de session : 
session_start();

//on verifie qu'on a le droit d'etre ici
$contag = new CTag1();

//on se connecte à la base
$MaBase = new Database("localhost","ndfsimphonis","root","");
$MaBase->onseconnecte();
//on regarde si on peut créer un tag1
if (isset($_POST['tag'])){
 
    $montag1 = new Tag($_POST['tag'],$_SESSION['idutilisateur']);
  	$contag->creerTag1($MaBase->connexion,$montag1);//le troisieme parametre définit le numero de tag
  	//on efface tous les post
  	unset($_POST);
  	//on redirige vers la bonne page
  	header('Location: ../bureau.php?page=parametrage'); 

}





?>