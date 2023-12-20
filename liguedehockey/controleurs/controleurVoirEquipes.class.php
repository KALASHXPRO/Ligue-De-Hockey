<?php

	include_once("controleurs/controleur.abstract.class.php");

	include_once("modele/DAO/EquipesDAO.class.php");

	class VoirEquipes extends  Controleur {
		// ******************* Attributs
		private $tabEquipes;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabEquipes=array();
		}
		
		// ******************* Accesseurs
		public function getTabEquipes(){
			return $this->tabEquipes;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
		$this->tabEquipes=EquipesDAO::chercherTous();	
		return "PageEquipes";
	}

}
?>