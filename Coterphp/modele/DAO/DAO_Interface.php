<?php
		include_once('modele/DAO/connexionBD.class.php');

	interface DAO {	
		static public function chercher($nom); 
		static public function chercherTous(); 
		static public function chercherAvecFiltre($filtre); 
		static public function inserer($uneEquipe); 
		static public function modifier($uneEquipe); 
		static public function supprimer($uneEquipe); 
	}
?>