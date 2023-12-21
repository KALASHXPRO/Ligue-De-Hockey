<?php
	include_once("modele/DAO/DAO.interface.php");
	include_once("modele/utilisateur.class.php");
	
	class UtilisateurDAO implements DAO {	

		public static function chercher($cles) { 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			
			$leUtilisateur=null; 
			$requete= $connexion->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur=:leNom");
			$requete->bindParam(":leNom",$cles);  
			$requete->execute();			
			
			if ($requete->rowCount() > 0) {
				$enregistrement=$requete->fetch();
				$leUtilisateur=new Utilisateur($enregistrement['nom_utilisateur'], $enregistrement['mot_passe']);
			}
			
			$requete-> closeCursor();
			ConnexionBD::close();	
		  
			return $leUtilisateur;	 
		} 
		
		static public function chercherTous() { 
			return self::chercherAvecFiltre("");
		} 
		
		static public function chercherAvecFiltre($filtre){ 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			
			$liste = array(); 
			$requete= $connexion->prepare("SELECT * FROM utilisateur ".$filtre);
			$requete-> execute();			

			foreach ($requete as $enregistrement) {
				$leUtilisateur=new Utilisateur($enregistrement['nom_utilisateur'], $enregistrement['mot_passe']);
				array_push($liste, $leUtilisateur);
			}
			
			$requete-> closeCursor();
			ConnexionBD::close();	
			
			return $liste;	 
		} 
		
		static function inserer($unUtilisateur){ 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			
			$commandeSQL  = "INSERT INTO Utilisateur (nom_utilisateur,mot_passe)";  
			$commandeSQL .=  "VALUES (?,?)";
			$requete = $connexion->prepare($commandeSQL);

			$tab = [$unUtilisateur->getNomUtilisateur(), $unUtilisateur->getMotPasse()];
			return	$requete-> execute($tab);
		}

		static public function modifier($unUtilisateur) {
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			
			$commandeSQL = "UPDATE utilisateur SET nom_utilisateur=?, mot_passe=?";
			$requete = $connexion->prepare($commandeSQL);
			$tab = [$unUtilisateur->getNomUtilisateur(), $unUtilisateur->getMotPasse()];
			return	$requete-> execute($tab);
		}
		
		static public function supprimer($unUtilisateur){
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			
			$commandeSQL = "DELETE FROM utilisateur WHERE nom_utilisateur=?";
			$requete = $connexion->prepare($commandeSQL);
			return	$requete-> execute([$unUtilisateur->getNomUtilisateur()]);
		} 
	}
?>
