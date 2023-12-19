<?php
   // *****************************************************************************************
	// Description   : Contrôleur spécifique pour l'action de voirProduits qui s'occupe de gérer
	//                 l'affichage de l'ensemble des produits
	// Date        : 27 novembre 2021
	// Auteur      : Dini Ahamada
    // *****************************************************************************************
	include_once("controleurs/controleur.abstract.class.php");
//	include_once("modele/DAO/infoAccessoireDAO.class.php");
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

		
		

		
	

	
	//public function executerAction() {
			
		//$this->tabEquipes=EquipesDAO::chercherTous();	
		//return "PageEquipes";
	//}

?>