<?php
class Categorie{
	public $idcat;
	public $libellec;
	public $idutilisateur;
	

	function Categorie($libellec = '', $id= ''){

		$this->libellec =  $libellec;
		$this->idutilisateur = $id;
		

	}
}
?>