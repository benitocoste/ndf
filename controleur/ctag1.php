<?php
class CTag1{
	public function creerTag1($con,$tag){ 
			$sql = "INSERT INTO tag1 (libellet1, idutilisateur) VALUES ('$tag->libellet', '$tag->idutilisateur')";

			if ($con->query($sql) === TRUE) {
			    //echo "un nouvel enregistrement a ete cree";
			    //on redirige vers la bonne page

			} else {
			    echo "Error: " . $sql . "<br>" . $con->error;
			}
	}
	public function modifierTag1($con,$id, $tag){

	}
	public function supprimerTag1($con,$id){

	}
	public function listerTag1($conn,$idutilisateur){
		//un tableau de tag
		$tabcat1 = array();

		//une requete
		$sql =  'SELECT idtag1, libellet1, idutilisateur FROM tag1 WHERE idutilisateur = '.$idutilisateur  ;
		//echo $idutilisateur;
	    foreach($conn->query($sql) as $row) {
	    	$nouveautag = new Tag();
	    	$nouveautag->libellet = $row['libellet1'];
	    	$nouveautag->idtag = $row['idtag1'];
	    	$nouveautag->idutilisateur = $row['idutilisateur'];

	        array_push($tabcat1, $nouveautag);
	  	}
	  	//enfin on retoure notre tableau d'objet
	  	return $tabcat1;
	}
}



?>