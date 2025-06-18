<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/CalendrierJuniorDAO.class.php");
	include_once("modele/DAO/EquipesJuniorDAO.class.php");
	include_once("modele/DAO/ResultatsJuniorDAO.class.php");
	include_once("modele/DAO/utilisateurDAO.class.php");



	class VoirAdmin extends  Controleur {
		// ******************* Attributs
		private $tabCalendrier;
        private $tabEquipes;
        private $tabResultats;
        private $tabConnexion;

		
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabCalendrier=array();
            $this->tabEquipes=array();
            $this->tabResultats=array();
            $this->tabConnexion=array();
		}
		
		// ******************* Accesseurs
		public function getTabCalendrier(){
			return $this->tabCalendrier;
		}
        public function getTabEquipes(){
			return $this->tabEquipes;
		}
        public function getTabResultats(){
			return $this->tabResultats;
		}
        public function getTabConnexion(){
			return $this->tabConnexion;
		}


		// ******************* Méthode exécuter action
		public function executerAction() {
            $this->tabCalendrier=CalendrierJuniorDAO::chercherTous();	
            $this->tabEquipes=EquipesJuniorDAO::chercherTous();	
            $this->tabResultats=ResultatsJuniorDAO::chercherTous();	
            $this->tabConnexion=UtilisateurDAO::chercherTous();

			return "PageAdmin";
		}
	}	
?>