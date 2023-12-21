<?php
	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/utilisateurDAO.class.php");

	class SeConnecter extends  Controleur {
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
		}
		public function executerAction() {
			if (ISSET($_POST['nom_utilisateur']) && ISSET($_POST['mot_passe'])){ 
				$unUtilisateur=UtilisateurDAO::chercher($_POST['nom_utilisateur']);
				if ($unUtilisateur==null) {
					array_push ($this->messagesErreur,"Impossible de trouver l'utilisateur.");
					return "Connecter";					
				} elseif (!$unUtilisateur->verifierMotPasse($_POST['mot_passe']))  {
					array_push ($this->messagesErreur,"Mot de passe incorecct.");
					return "Connecter";										
				} else {
					$this->acteur="utilisateur";
					$_SESSION['utilisateurConnecte']=$_POST['nom_utilisateur'];
					return "PageAdmin";
				}
			} else {
				return "Connecter";
			}
		}

	
	}	
?>