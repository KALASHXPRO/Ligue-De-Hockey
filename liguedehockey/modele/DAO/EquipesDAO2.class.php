<?php
	include_once("DAO.interface.php");
	include_once("modele/Equipes2.class.php");

	class EquipesDAO2 implements DAO {	

		public static function chercher($cles) { 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch(Exception $e){
				throw new Exception("Impossible d'obtenir la connexion à la BD");
			}

			$UneEquipe2=null;
			$requete = $connexion->prepare("SELECT * FROM Equipes_Juniors WHERE id_equipes_juniors=? ");
			$requete->execute(array($cles));

			if($requete->rowCount()!=0){
				$enr=$requete->fetch();
				$UneEquipe2 = new Equipe2($enr['id_equipes_juniors'], $enr['nom_equipes_juniors']);
			}

			$requete->closeCursor();
			ConnexionBD::close();

			return $UneEquipe2;
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
			$requete = $connexion->prepare("SELECT * FROM Equipes_Juniors " .$filtre);
			$requete->execute();

			foreach($requete as $enr){
				$UneEquipe2 = new Equipe2($enr['id_equipes_juniors'], $enr['nom_equipes_juniors']);
				array_push($tableau2,$UneEquipe2);
			}

			$requete->closeCursor();
			ConnexionBD::close();

			return $tableau2;
		} 

		static function inserer($UneEquipe2){ 
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete= $connexion->prepare("INSERT INTO Equipes_Juniors (id_equipes_juniors,nom_equipes_juniors) VALUES(?,?)");
        
			$tableauInfos2 =[$UneEquipe2->getId2(),$UneEquipe2->getNom2()];
			return $requete->execute($tableauInfos2);
		}

		static public function modifier($UneEquipe2) {
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete=$connexion->prepare("UPDATE Equipes_Juniors SET nom_equipes_juniors=? WHERE id_equipes_juniors=?");

			$tableauInfos2 =[$UneEquipe2->getNom2(),$UneEquipe2->getId2()];
			return $requete->execute($tableauInfos2);
		}

		static public function supprimer($UneEquipe2){
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}

			$requete=$connexion->prepare("DELETE FROM Equipes_Juniors WHERE id_equipes_juniors=?");
			$tableauInfos2=[$UneEquipe2->getId2()];
			return $requete->execute($tableauInfos2);
		} 
	}
?>
