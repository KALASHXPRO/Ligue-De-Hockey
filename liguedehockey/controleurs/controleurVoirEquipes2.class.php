<?php
   // *****************************************************************************************
	// Description   : Contrôleur spécifique pour l'action de voirProduits qui s'occupe de gérer
	//                 l'affichage de l'ensemble des produits
	// Date        : 27 novembre 2021
	// Auteur      : Dini Ahamada
    // *****************************************************************************************
	include_once("controleurs/controleur.abstract.class.php");
//	include_once("modele/DAO/infoAccessoireDAO.class.php");
	include_once("modele/DAO/EquipesDAO2.class.php");

	class VoirEquipes2 extends  Controleur {
		// ******************* Attributs
		private $tabEquipes2;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabEquipes2=array();
		}
		
		// ******************* Accesseurs
		public function getTabEquipes2(){
			return $this->tabEquipes2;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
		$this->tabEquipes2=EquipesDAO2::chercherTous();	
		return "PageEquipes2";
	}

}

		
		

		
	

	
	//public function executerAction() {
			
		//$this->tabEquipes=EquipesDAO::chercherTous();	
		//return "PageEquipes";
	//}

?>