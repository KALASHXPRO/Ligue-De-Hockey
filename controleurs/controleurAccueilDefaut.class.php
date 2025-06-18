<?php

	include_once("controleurs/controleur.abstract.class.php");

	class AcceuilDefaut extends  Controleur {
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		

		// ******************* Méthode exécuter action
		public function executerAction() {

			return "PageAccueil";
		}


		
	}	
	
?>