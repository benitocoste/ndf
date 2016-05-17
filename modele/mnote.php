<?php
class Note{
	public $idutilisateur;
	public $nom;
	public $actif;
	

	function Note($idutilisateur = '', $nom= '',$actif = false){

		$this->idutilisateur =  $idutilisateur;
		$this->nom = $nom;
		$this->actif = $actif;
		

	}
}
?>