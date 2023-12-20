<?php
	include_once("DAO.interface.php");
	include_once("modele/Resultat.class.php");

	class ResultatsDAO implements DAO {	

		public static function chercher($cles) { 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch(Exception $e){
				throw new Exception("Impossible d'obtenir la connexion à la BD");
			}

			$UnResultat=null;
			$requete = $connexion->prepare("SELECT * FROM Resultats_Majeurs WHERE id_matches_majeurs=? ");
			$requete->execute(array($cles));

			if($requete->rowCount()!=0){
				$enr=$requete->fetch();
				$UnResultat = new Resultat($enr['score_matchs'], $enr['nom_equipes_locales_majeures'],$enr['nom_equipes_visiteuses_majeures'],$enr['id_matches_majeurs']);
			}

			$requete->closeCursor();
			ConnexionBD::close();

			return $UnResultat;
		} 

		static public function chercherTous() { 
			return self::chercherAvecFiltre("");
		}

		static public function chercherAvecFiltre($filtre){ 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch(Exception $e){
				throw new Exception("Impossible d'obtenir la connexion à la BD");
			}

			$tableau=[];
			$requete = $connexion->prepare("SELECT * FROM Resultats_Majeurs " .$filtre);
			$requete->execute();

			foreach($requete as $enr){
				$UnResultat = new Resultat($enr['score_matchs'], $enr['nom_equipes_locales_majeures'],$enr['nom_equipes_visiteuses_majeures'],$enr['id_matches_majeurs']);
				array_push($tableau,$UnResultat);
			}

			$requete->closeCursor();
			ConnexionBD::close();

			return $tableau;
		} 

		static function inserer($UnResultat){ 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete= $connexion->prepare("INSERT INTO Resultats_Majeurs (score_matchs,nom_equipes_locales_majeures,nom_equipes_visiteuses_majeures,id_matches_majeurs) VALUES(?,?,?,?)");
        
			$tableauInfos =[$UnResultat->getScore(),$UnResultat->getEquipeLocale(),$UnResultat->getEquipeVisiteuse(),$UnResultat->getIdMatch()];
			return $requete->execute($tableauInfos);
		}

		static public function modifier($UnResultat) {
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete=$connexion->prepare("UPDATE Resultats_Majeurs SET  score_matchs=?, nom_equipes_locales_majeures=?, nom_equipes_visiteuses_majeures=? WHERE id_matches_majeurs=?");

			$tableauInfos =[$UnResultat->getScore(),$UnResultat->getEquipeLocale(),$UnResultat->getEquipeVisiteuse(),$UnResultat->getIdMatch()];
			return $requete->execute($tableauInfos);
		}

		static public function supprimer($UnResultat){
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete=$connexion->prepare("DELETE FROM Resultats_Majeurs WHERE id_matches_majeurs=?");
			$tableauInfos=[$UnResultat->getIdMatch()];
			return $requete->execute($tableauInfos);
		} 
	}
?>
