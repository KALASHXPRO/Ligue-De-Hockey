<?php

	abstract class Controleur {
		// ******************* Attributs 
		protected $messagesErreur = array();
		protected $acteur="visiteur";
		
		// ******************* Constructeur vide
		public function __construct() {$this->determinerActeur();}
		
		// ******************* Accesseurs 
		public function getMessagesErreur() { return $this->messagesErreur; }
		public function getActeur() { return $this->acteur; }

		
		abstract public function executerAction();
		
		// ****************** Méthode privée
		private function determinerActeur(){
			session_start();
			if (ISSET($_SESSION['utilisateurConnecte'])){
				$this->acteur="utilisateur";
			}
		}
	}
	
?>