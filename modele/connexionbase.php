<?php

class Database {
	private $VALEUR_hote;
	private $VALEUR_nom_bd;
	private $VALEUR_user;
	private $VALEUR_mot_de_passe;
	public $connexion;
	public function onseconnecte(){
			$this->connexion = new mysqli($this->VALEUR_hote, $this->VALEUR_user, $this->VALEUR_mot_de_passe, $this->VALEUR_nom_bd);
			// Check connection
			if ($this->connexion->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

	}
	function Database($hote, $nom_bdd, $user, $mdp){

		$this->VALEUR_user =  $user;
		$this->VALEUR_hote = $hote;
		$this->VALEUR_nom_bd = $nom_bdd;
		$this->VALEUR_mot_de_passe = $mdp;

	}
}

?>