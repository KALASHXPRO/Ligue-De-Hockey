<?php
	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/utilisateurDAO.class.php");

	class SeConnecter extends  Controleur {
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		

		// ******************* Méthode exécuter action
		public function executerAction() {
			if ($this->acteur=="utilisateur") {
				array_push ($this->messagesErreur,"Deja connecter");
				return "PageAccueil";
			}
			if (ISSET($_POST['nom_utilisateur']) AND ISSET($_POST['mot_passe'])){ 
				$unUtilisateur=UtilisateurDAO::chercher($_POST['nom_utilisateur']);
				if ($unUtilisateur==null) {
					array_push ($this->messagesErreur,"Unable to find username.");
					return "Connecter";					
				} elseif (!$unUtilisateur->verifierMotPasse($_POST['mot_passe']))  {
					array_push ($this->messagesErreur,"Incorrect password.");
					return "Connecter";										
				} else {
					$this->acteur="utilisateur";
					$_SESSION['utilisateurConnecte']=$_POST['nom_utilisateur'];
					return "PageAcceuil";
				}
			} else {
				return "Connecter";
			}
		}
	}	
?>