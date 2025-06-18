<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/CalendrierJuniorDAO.class.php");

	class VoirCalendrierJunior extends  Controleur {
		// ******************* Attributs
		private $tabCalendrierJunior;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabCalendrierJunior = array();
		}
		
		// ******************* Accesseurs
		public function getTabCalendrierJunior(){
			return $this->tabCalendrierJunior;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
			$this->tabCalendrierJunior = CalendrierJuniorDAO::chercherTous();
		return "PageCalendrier2";
	}

}
?>