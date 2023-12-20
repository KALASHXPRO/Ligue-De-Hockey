<?php
	include_once("DAO.interface.php");
	include_once("modele/Calendrier.class.php");

	class CalendrierDAO implements DAO {

		public static function chercher($cles) {
			try {
				$connexion = ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d'obtenir la connexion à la BD");
			}

			$UnCalendrier = null;
			$requete = $connexion->prepare("SELECT * FROM 'Matches_Ligue_Majeure' WHERE id_matches_majeurs=? ");
			$requete->execute(array($cles));
			if ($requete->rowCount() != 0) {
				$enr = $requete->fetch();
				$UnCalendrier = new Calendrier($enr['id_matches_majeurs'], $enr['date_matches_majeurs'], $enr['lieu_matches_majeurs'], $enr['nom_equipes_locales_majeures'], $enr['nom_equipes_visiteuses_majeures']);
			}

			$requete->closeCursor();
			ConnexionBD::close();

			return $UnCalendrier;
		}

		static public function chercherTous() {
			return self::chercherAvecFiltre("");
		}

		static public function chercherAvecFiltre($filtre) {
			try {
				$connexion = ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d'obtenir la connexion à la BD");
			}

			$tableau = [];
			$requete = $connexion->prepare("SELECT * FROM Matches_Ligue_Majeure " . $filtre);
			$requete->execute();
			foreach ($requete as $enr) {
				$UnCalendrier = new Calendrier($enr['id_matches_majeurs'], $enr['date_matches_majeurs'], $enr['lieu_matches_majeurs'], $enr['nom_equipes_locales_majeures'], $enr['nom_equipes_visiteuses_majeures']);
				array_push($tableau, $UnCalendrier);
			}

			$requete->closeCursor();
			ConnexionBD::close();

			return $tableau;
		}

		static function inserer($UnCalendrier) {
			try {
				$connexion = ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD.");
			}

			$requete = $connexion->prepare("INSERT INTO Matches_Ligue_Majeure (id_matches_majeurs,date_matches_majeurs,lieu_matches_majeurs,nom_equipes_locales_majeures,nom_equipes_visiteuses_majeures) VALUES(?,?,?,?,?)");

			$tableauInfos = [$UnCalendrier->getId(), $UnCalendrier->getDate(), $UnCalendrier->getLieu(), $UnCalendrier->getEquipeLocale(), $UnCalendrier->getEquipeVisiteuse()];
			return $requete->execute($tableauInfos);
		}

		static public function modifier($UnCalendrier) {
			try {
				$connexion = ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD.");
			}

			$requete = $connexion->prepare("UPDATE Matches_Ligue_Majeure SET id_matches_majeurs=?,date_matches_majeurs=?,lieu_matches_majeurs=?,nom_equipes_locales_majeures=?,nom_equipes_visiteuses_majeures=?  WHERE id_matches_majeurs=?");

			$tableauInfos = [$UnCalendrier->getId(), $UnCalendrier->getDate(), $UnCalendrier->getLieu(), $UnCalendrier->getEquipeLocale(), $UnCalendrier->getEquipeVisiteuse()];
			return $requete->execute($tableauInfos);
		}

		static public function supprimer($UnCalendrier) {
			try {
				$connexion = ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD.");
			}

			$requete = $connexion->prepare("DELETE FROM Matches_Ligue_Majeure WHERE id_matches_majeurs=?");
			$tableauInfos = [$UnCalendrier->getId(), $UnCalendrier->getDate(), $UnCalendrier->getLieu(), $UnCalendrier->getEquipeLocale(), $UnCalendrier->getEquipeVisiteuse()];
			return $requete->execute($tableauInfos);
		}
	}
?>
