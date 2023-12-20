<?php
	include_once("DAO.interface.php");
	include_once("modele/Resultat2.class.php");

	class ResultatsDAO2 implements DAO {	

		public static function chercher($cles) { 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch(Exception $e){
				throw new Exception("Impossible d'obtenir la connexion à la BD");
			}

			$UnResultat2=null;
			$requete = $connexion->prepare("SELECT * FROM Resultats_Juniors WHERE id_matches_juniors=? ");
			$requete->execute(array($cles));

			if($requete->rowCount()!=0){
				$enr=$requete->fetch();
				$UnResultat2 = new Resultat2($enr['score_matchs_juniors'], $enr['nom_equipes_locales_juniors'],$enr['nom_equipes_visiteuses_juniors'],$enr['id_matches_juniors']);
			}

			$requete->closeCursor();
			ConnexionBD::close();

			return $UnResultat2;
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

			$tableau2=[];
			$requete = $connexion->prepare("SELECT * FROM Resultats_Juniors " .$filtre);
			$requete->execute();

			foreach($requete as $enr){
				$UnResultat2 = new Resultat2($enr['score_matchs_juniors'], $enr['nom_equipes_locales_juniors'],$enr['nom_equipes_visiteuses_juniors'],$enr['id_matches_juniors']);
				array_push($tableau2,$UnResultat2);
			}

			$requete->closeCursor();
			ConnexionBD::close();

			return $tableau2;
		} 

		static function inserer($UnResultat2){ 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete= $connexion->prepare("INSERT INTO Resultats_Juniors (score_matchs_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors,id_matches_juniors) VALUES(?,?,?,?)");
        
			$tableauInfos2 =[$UnResultat2->getScore2(),$UnResultat2->getEquipeLocale2(),$UnResultat2->getEquipeVisiteuse2(),$UnResultat2->getIdMatch2()];
			return $requete->execute($tableauInfos2);
		}

		static public function modifier($UnResultat2) {
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete=$connexion->prepare("UPDATE Resultats_Juniors SET  score_matchs_juniors=?, nom_equipes_locales_juniors=?, nom_equipes_visiteuses_juniors=? WHERE id_matches_juniors=?");

			$tableauInfos2 =[$UnResultat2->getScore2(),$UnResultat2->getEquipeLocale2(),$UnResultat2->getEquipeVisiteuse2(),$UnResultat2->getIdMatch2()];
			return $requete->execute($tableauInfos2);
		}

		static public function supprimer($UnResultat2){
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete=$connexion->prepare("DELETE FROM Resultats_Juniors WHERE id_matches_juniors=?");
			$tableauInfos2=[$UnResultat2->getIdMatch2()];
			return $requete->execute($tableauInfos2);
		} 
	}
?>
