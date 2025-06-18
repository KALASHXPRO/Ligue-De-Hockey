<?php
	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/CalendrierSeniorDAO.class.php");

	class VoirCalendrierSenior extends  Controleur {
		// ******************* Attributs
		private $tabCalendrierSenior;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabCalendrierSenior=array();
		}
		
		// ******************* Accesseurs
		public function getTabCalendrierSenior(){
			return $this->tabCalendrierSenior;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
			$this->tabCalendrierSenior=CalendrierSeniorDAO::chercherTous();	
			return "PageCalendrier";
		}

}
?>