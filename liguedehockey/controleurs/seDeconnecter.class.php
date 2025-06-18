<?php

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/utilisateurDAO.class.php");

class SeDeconnecter extends  Controleur {
	
	// ******************* Constructeur vide
	public function __construct() {
		parent::__construct();
	}
	
	// ******************* Méthode exécuter action
	public function executerAction() {
		$_SESSION = array();

		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
			);
		}

		session_destroy();

		header('Location: ?action=voirPageAccueil');
		exit;
	}
}	
?>