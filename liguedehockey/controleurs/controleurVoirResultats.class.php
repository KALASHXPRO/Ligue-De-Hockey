<?php
   // *****************************************************************************************
	// Description   : Contrôleur spécifique pour l'action de voirProduits qui s'occupe de gérer
	//                 l'affichage de l'ensemble des produits
	// Date        : 27 novembre 2021
	// Auteur      : Dini Ahamada
    // *****************************************************************************************
	include_once("controleurs/controleur.abstract.class.php");
//	include_once("modele/DAO/infoAccessoireDAO.class.php");
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

		
		

		
	

	
	//public function executerAction() {
			
		//$this->tabEquipes=EquipesDAO::chercherTous();	
		//return "PageEquipes";
	//}

?>