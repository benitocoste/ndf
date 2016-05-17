<?php
class Utilisateur{
	public $login;
	public $mdp;
	public $admin;
	public $actif;
	public $email;
	public $idutilsateur;

	function Utilisateur($vlogin = '', $vmdp= '', $vadmin= false, $vactif= '',$vemail= '',$vidutilisateur= ''){

		$this->login =  $vlogin;
		$this->mdp = $vmdp;
		$this->actif = $vactif;
		$this->email = $vemail;
		$this->admin = $vadmin;
		$this->idutilsateur = $vidutilisateur ;

	}
}
?>