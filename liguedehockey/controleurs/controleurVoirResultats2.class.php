<?php
	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/ResultatsDAO2.class.php");

	class VoirResultats2 extends  Controleur {
		// ******************* Attributs
		private $tabResultats2;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabResultats2=array();
		}
		
		// ******************* Accesseurs
		public function getTabResultats2(){
			return $this->tabResultats2;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
		$this->tabResultats2=ResultatsDAO2::chercherTous();	
		return "PageResultats2";
	}

}

?>