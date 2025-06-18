<?php

	include_once("controleurs/controleur.abstract.class.php");

	include_once("modele/DAO/EquipesJuniorDAO.class.php");

	class VoirEquipesJunior extends  Controleur {
		// ******************* Attributs
		private $tabEquipesJunior;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabEquipesJunior = array();
		}
		
		// ******************* Accesseurs
		public function getTabEquipesJunior(){
			return $this->tabEquipesJunior;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
			$this->tabEquipesJunior = EquipesJuniorDAO::chercherTous();
		return "PageEquipes2";
	}

}

?>