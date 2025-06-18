<?php
	include_once("controleurs/controleur.abstract.class.php");
	include_once("modele/DAO/ResultatsJuniorDAO.class.php");

	class VoirResultatsJunior extends  Controleur {
		// ******************* Attributs
		private $tabResultatsJunior;
		
		// ******************* Constructeur vide
		public function __construct() {
			parent::__construct();
			$this->tabResultatsJunior = array();
		}
		
		// ******************* Accesseurs
		public function getTabResultatsJunior(){
			return $this->tabResultatsJunior;
		}

		// ******************* Méthode exécuter action
		public function executerAction() {
			$this->tabResultatsJunior = ResultatsJuniorDAO::chercherTous();
		return "PageResultats2";
	}

}

?>