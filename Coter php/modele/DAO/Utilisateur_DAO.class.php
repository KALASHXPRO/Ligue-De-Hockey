<?php
    include_once("modele/DAO/DAO_interface.php");
	include_once("modele/utilisateur.class.php");

	class UtilisateurDAO implements DAO {	
		
		public static function chercher($nom) { 
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			$leUtilisateur=null; 
			
			$requete= $connexion->prepare("SELECT * FROM utilisateur WHERE nom=:leNom");
			$requete->bindParam(":leNom",$nom);  
		  
			$requete->execute();			
			
			if ($requete->rowCount() > 0) {
				$enregistrement=$requete->fetch();
				$leUtilisateur=new Utilisateur($enregistrement['nom'], $enregistrement['mot_passe']);
			}
			$requete-> closeCursor();
			ConnexionDB::close();	
		  
			return $leUtilisateur;	 
		} 

}
?>