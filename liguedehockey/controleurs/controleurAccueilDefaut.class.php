<?php
    // *****************************************************************************************
	// Description   : Contrôleur spécifique pour toutes les actions non-valides qui rammène à la
	//                 page d'accueil
	// Date        : 12 Decembre  2021
	// Auteur      : Dini Ahamada
    // *****************************************************************************************
	include_once("controleurs/controleur.abstract.class.php");

	class AcceuilDefaut extends  Controleur {
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		

		// ******************* Méthode exécuter action
		public function executerAction() {
			//----------------------------- VÉRIFIER LA VALIDITÉ DE LA SESSION (pas besoin ici) -----------
			//----------------------------- VÉRIFIER LA VALIDITÉ DES POSTS (pas besoin ici) ---------------
			//----------------------------- INTERACTION BD (pas besoin ici) -------------------------------			
			//----------------------------- RETOURNER LE NOM DE LA VUE À APPELER -----
			return "PageAccueil";
		}


		
	}	
	
?>