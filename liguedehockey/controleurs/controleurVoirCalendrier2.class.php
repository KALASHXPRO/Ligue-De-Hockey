<?php
   // *****************************************************************************************
	// Description   : Contrôleur spécifique pour l'action de voirProduits qui s'occupe de gérer
	//                 l'affichage de l'ensemble des produits
	// Date        : 27 novembre 2021
	// Auteur      : Dini Ahamada
    // *****************************************************************************************
	include_once("controleurs/controleur.abstract.class.php");
//	include_once("modele/DAO/infoAccessoireDAO.class.php");
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

		
		

		
	

	
	//public function executerAction() {
			
		//$this->tabEquipes=EquipesDAO::chercherTous();	
		//return "PageEquipes";
	//}

?>