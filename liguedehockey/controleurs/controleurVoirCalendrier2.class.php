<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/CalendrierDAO2.class.php");

	class VoirCalendrier2 extends  Controleur {
		// ******************* Attributs
		private $tabCalendrier2;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabCalendrier2=array();
		}
		
		// ******************* Accesseurs
		public function getTabCalendrier2(){
			return $this->tabCalendrier2;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
		$this->tabCalendrier2=CalendrierDAO2::chercherTous();	
		return "PageCalendrier2";
	}

}
?>