<?php
   // *****************************************************************************************
	// Description   : Contrôleur spécifique pour l'action de voirProduits qui s'occupe de gérer
	//                 l'affichage de l'ensemble des produits
	// Date        : 27 novembre 2021
	// Auteur      : Dini Ahamada
    // *****************************************************************************************
	include_once("controleurs/controleur.abstract.class.php");
//	include_once("modele/DAO/infoAccessoireDAO.class.php");
	include_once("modele/DAO/CalendrierDAO.class.php");

	class VoirCalendrier extends  Controleur {
		// ******************* Attributs
		private $tabCalendrier;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabCalendrier=array();
		}
		
		// ******************* Accesseurs
		public function getTabCalendrier(){
			return $this->tabCalendrier;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
		$this->tabCalendrier=CalendrierDAO::chercherTous();	
		return "PageCalendrier";
	}

}

		
		

		
	

	
	//public function executerAction() {
			
		//$this->tabEquipes=EquipesDAO::chercherTous();	
		//return "PageEquipes";
	//}

?>