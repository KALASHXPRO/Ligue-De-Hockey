<?php

	include_once("controleurs/controleur.abstract.class.php");

	include_once("modele/DAO/ResultatsSeniorDAO.class.php");

	class VoirResultatsSenior extends  Controleur {
		// ******************* Attributs
		private $tabResultatsSenior;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabResultatsSenior=array();
		}
		
		// ******************* Accesseurs
		public function getTabResultatsSenior(){
			return $this->tabResultatsSenior;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
			$this->tabResultatsSenior=ResultatsSeniorDAO::chercherTous();	
			return "PageResultats";
		}

}

?>