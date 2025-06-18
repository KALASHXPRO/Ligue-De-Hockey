<?php

	abstract class Controleur {
		// ******************* Attributs 
		protected $messagesErreur = array();
		protected $messagesConfirmation = array();
		protected $acteur="visiteur";
		
		// ******************* Constructeur vide
		public function __construct() {$this->determinerActeur();}
		
		// ******************* Accesseurs 
		public function getMessagesErreur() { return $this->messagesErreur; }
		public function getActeur() { return $this->acteur; }

		
		abstract public function executerAction();
		
		// ****************** Méthode privée
		private function determinerActeur(){
			if (session_status() === PHP_SESSION_NONE) {
			    session_start();
			}
			if (ISSET($_SESSION['utilisateurConnecte'])){
				$this->acteur="utilisateur";
			}
		}
	}
	
?>