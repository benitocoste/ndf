<?php
class Frais{

	public $idfrais;
	public $idnote;
	public $libelletag1;
	public $libelletag2;
	public $libellecat;
	public $montant;
	public $datefrais;
	public $idutilsateur;
	public $cheminphoto;


	function Frais($idnote = '', $libelletag1= '', $libelletag2= '', $libellecat= '',$montant= '',$datefrais= '', $idutilsateur = '', $cheminphoto = ''){

		$this->idnote =  $idnote;
		$this->libelletag1 = $libelletag1;
		$this->libelletag2 = $libelletag2;
		$this->libellecat = $libellecat;
		$this->montant = $montant;
		$this->datefrais = $datefrais;
		$this->idutilsateur = $idutilsateur;
		$this->cheminphoto = $cheminphoto;

	}
}
?>