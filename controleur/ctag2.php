<?php
class CTag2{
	public function creerTag2($con,$tag){ 
			$sql = "INSERT INTO tag2 (libellet2, idutilisateur) VALUES ('$tag->libellet', '$tag->idutilisateur')";

			if ($con->query($sql) === TRUE) {
			    //echo "un nouvel enregistrement a ete cree";
			    //on redirige vers la bonne page

			} else {
			    echo "Error: " . $sql . "<br>" . $con->error;
			}
	}
	public function modifierTag2($con,$id, $tag){

	}
	public function supprimerTag2($con,$id){

	}
	public function listerTag2($conn,$idutilisateur){
		//un tableau de tag
		$tabcat2 = array();

		//une requete
		$sql =  'SELECT idtag2, libellet2, idutilisateur FROM tag2 WHERE idutilisateur = '.$idutilisateur  ;
		//echo $idutilisateur;
	    foreach($conn->query($sql) as $row) {
	    	$nouveautag = new Tag();
	    	$nouveautag->libellet = $row['libellet2'];
	    	$nouveautag->idtag = $row['idtag2'];
	    	$nouveautag->idutilisateur = $row['idutilisateur'];

	        array_push($tabcat2, $nouveautag);
	  	}
	  	//enfin on retoure notre tableau d'objet
	  	return $tabcat2;
	}
}



?>