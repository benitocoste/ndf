<?php
class Tag{
	public $idtag;
	public $libellet;
	public $idutilisateur;
	

	function Tag($libellet = '', $id= ''){

		$this->libellet =  $libellet;
		$this->idutilisateur = $id;
		

	}
}
?>