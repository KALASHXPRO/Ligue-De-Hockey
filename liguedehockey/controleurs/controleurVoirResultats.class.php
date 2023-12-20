<?php

	include_once("controleurs/controleur.abstract.class.php");

	include_once("modele/DAO/ResultatsDAO.class.php");

	class VoirResultats extends  Controleur {
		// ******************* Attributs
		private $tabResultats;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabResultats=array();
		}
		
		// ******************* Accesseurs
		public function getTabResultats(){
			return $this->tabResultats;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
		$this->tabResultats=ResultatsDAO::chercherTous();	
		return "PageResultats";
	}

}

?>