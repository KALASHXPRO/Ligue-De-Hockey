<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/utilisateurDAO.class.php");

	class SeDeconnecter extends  Controleur {
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		
		// ******************* Méthode exécuter action
		public function executerAction() {
			if ($this->acteur=="visiteur") {
				array_push ($this->messagesErreur,"Vous êtes déjà déconnécté.");
				return "PageAccueil";
			} elseif (ISSET($_POST['deconnexion'])) {
				$this->acteur="visiteur";
				unset($_SESSION['utilisateurConnecte']);
				return "PageAccueil";
			} else {
				return "Deconnecter";				
			}
		}
	}	
?>