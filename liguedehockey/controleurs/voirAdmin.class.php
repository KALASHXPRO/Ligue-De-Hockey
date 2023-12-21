<?php

	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/utilisateurDAO.class.php");
    include_once("modele/DAO/CalendrierDAO.class.php");
    include_once("modele/DAO/CalendrierDAO2.class.php");
    include_once("modele/DAO/EquipesDAO.class.php");
    include_once("modele/DAO/EquipesDAO2.class.php");
    include_once("modele/DAO/ResultatsDAO.class.php");
    include_once("modele/DAO/ResultatsDAO2.class.php");



	class VoirAdmin extends  Controleur {
		// ******************* Attributs
		private $tabCalendrier;
        private $tabCalendrier2;
        private $tabEquipes;
        private $tabEquipes2;
        private $tabResultats;
        private $tabResultats2;
        private $tabConnexion;

		
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabCalendrier=array();
			$this->tabCalendrier2=array();
            $this->tabEquipes=array();
            $this->tabEquipes2=array();
            $this->tabResultats=array();
            $this->tabResultats2=array();
            $this->tabConnexion=array();
		}
		
		// ******************* Accesseurs
		public function getTabCalendrier(){
			return $this->tabCalendrier;
		}
        public function getTabCalendrier2(){
			return $this->tabCalendrier2;
		}
        public function getTabEquipes(){
			return $this->tabEquipes;
		}
        public function getTabEquipes2(){
			return $this->tabEquipes2;
		}
        public function getTabResultats(){
			return $this->tabResultats;
		}
        public function getTabResultats2(){
			return $this->tabResultats2;
		}
        public function getTabConnexion(){
			return $this->tabConnexion;
		}


		// ******************* Méthode exécuter action
		public function executerAction() {
            $this->tabCalendrier=CalendrierDAO::chercherTous();	
            $this->tabCalendrier2=CalendrierDAO2::chercherTous();
            $this->tabEquipes=EquipesDAO::chercherTous();	
            $this->tabEquipes2=EquipesDAO2::chercherTous();	
            $this->tabResultats=ResultatsDAO::chercherTous();	
            $this->tabResultats2=ResultatsDAO2::chercherTous();	
            $this->tabConnexion=UtilisateurDAO::chercherTous();

			return "PageAdmin";
		}
	}	
?>