<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/UtilisateurDAO.class.php");

	class VoirConnexion extends  Controleur {
		// ******************* Attributs
		private $tabConnexion;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabConnexion=array();
		}
		
		// ******************* Accesseurs
		public function getTabConnexion(){
			return $this->tabConnexion;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
		$this->tabConnexion=UtilisateurDAO::chercherTous();	
		return "PageConnexion";
	}

}
?>