<?php
//ceci permet de lister les tag1 de l'utilisateur 61.

//on ajoute notre classe de connexion
require('../modele/connexionbase.php');
//on ajout tous nos modeles
require('../modele/mutilisateur.php');
require('../modele/mtag.php');
require('../controleur/ctag1.php');

//on se connecte à la base
$MaBase = new Database("localhost","ndfsimphonis","root","");
$MaBase->onseconnecte();

//on instancie le controleur
$contag1 = new CTag1();
$tabtag1 = $contag1->listerTag1($MaBase->connexion,61);
echo json_encode($tabtag1);

//c'était pas plus compliqué

?>