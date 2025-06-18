<?php

	include_once("controleurs/controleur.abstract.class.php");

	include_once("modele/DAO/EquipesSeniorDAO.class.php");

	class VoirEquipesSenior extends  Controleur {
		// ******************* Attributs
		private $tabEquipesSenior;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabEquipesSenior = array();
		}
		
		// ******************* Accesseurs
		public function getTabEquipesSenior(){
			return $this->tabEquipesSenior;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
			$this->tabEquipesSenior = EquipesSeniorDAO::chercherTous();	
			return "PageEquipes";
		}

}
?>