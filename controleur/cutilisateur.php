<?php
//require('/modele/mutilisateur.php');


class CUtilisateur {
	//on se fait des functions
	public function creerUtilisateur($conn,$utilisateur){
			$sql = "INSERT INTO utilisateur (login, mdp, email, actif, admin) 
			VALUES ('$utilisateur->login', '$utilisateur->mdp', '$utilisateur->email',$utilisateur->actif,$utilisateur->admin)";

			if ($conn->query($sql) === TRUE) {
			    //echo "un nouvel enregistrement a ete cree";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	public function listerUtilisateur($conn){
		//un tableau d'utilisateur
		$tabutilisateur = array();

		$sql =  'SELECT login, mdp, idutilisateur,admin FROM utilisateur ORDER BY idutilisateur';
	    foreach  ($conn->query($sql) as $row) {
	    	$nouvelutilisateur = new Utilisateur();
	    	$nouvelutilisateur->idutilisateur = $row['idutilisateur'];
	    	$nouvelutilisateur->login = $row['login'];
	        $nouvelutilisateur->mdp = $row['mdp'];
	        array_push($tabutilisateur, $nouvelutilisateur);
	  	}
	  	//enfin on retoure notre tableau d'objet
	  	return $tabutilisateur;

	}
	public function modifierUtilisateur($conn){

	}
	public function supprimerUtilisateur($conn, $idutilisateur){
		$sql = "DELETE FROM utilisateur WHERE idutilisateur=".$idutilisateur;

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
	}
	public function verificationConnexion($conn, $email, $mdp){
		$idutilisateur = "";
		$sql = 'SELECT email, mdp, idutilisateur FROM utilisateur WHERE email="'.$email.'" AND mdp="'.$mdp.'"';
		$resultat = $conn->query($sql);
		//print_r($resultat) ;
		//print_r($resultat->num_rows);
		

	
		if ($resultat->num_rows == 1) {
		    //echo "yoplaboom";
		    foreach ($resultat as $row) {
		    	$idutilisateur = $row['idutilisateur'];
		    }
		} else {
			//echo "dommage";
		    //echo "Erreur de selection record: " . $conn->error;
		    echo "Email et/ou mot de passe incorrect";
		}

		return $idutilisateur;
	}
}



?>