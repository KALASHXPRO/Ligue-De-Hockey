<?php
	include_once("DAO.interface.php");
	include_once("modele/Equipes.class.php");

	class EquipesDAO implements DAO {	

		public static function chercher($cles) { 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch(Exception $e){
				throw new Exception("Impossible d'obtenir la connexion à la BD");
			}

			$UneEquipe=null;
			$requete = $connexion->prepare("SELECT * FROM Equipes_Majeures WHERE id_equipes_majeurs=? ");
			$requete->execute(array($cles));

			if($requete->rowCount()!=0){
				$enr=$requete->fetch();
				$UneEquipe = new Equipe($enr['id_equipes_majeurs'], $enr['nom_equipes_majeurs']);
			}

			$requete->closeCursor();
			ConnexionBD::close();
			return $UneEquipe;
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
			$requete = $connexion->prepare("SELECT * FROM Equipes_Majeures " .$filtre);
			$requete->execute();

			foreach($requete as $enr){
				$UneEquipe = new Equipe($enr['id_equipes_majeurs'], $enr['nom_equipes_majeurs']);
				array_push($tableau,$UneEquipe);
			}

			$requete->closeCursor();
			ConnexionBD::close();

			return $tableau;
		} 

		static function inserer($UneEquipe){ 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete= $connexion->prepare("INSERT INTO Equipes_Majeures (id_equipes_majeurs,nom_equipes_majeurs) VALUES(?,?)");

			$tableauInfos =[$UneEquipe->getId(),$UneEquipe->getNom()];
			return $requete->execute($tableauInfos);
		}

		static public function modifier($UneEquipe) {
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete=$connexion->prepare("UPDATE Equipes_Majeures SET nom_equipes_majeurs=? WHERE id_equipes_majeurs=?");

			$tableauInfos =[$UneEquipe->getNom(),$UneEquipe->getId()];
			return $requete->execute($tableauInfos);
		}

		static public function supprimer($UneEquipe){
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete=$connexion->prepare("DELETE FROM Equipes_Majeures WHERE id_equipes_majeurs=?");
			$tableauInfos=[$UneEquipe->getId()];
			return $requete->execute($tableauInfos);
		} 
	}
?>
