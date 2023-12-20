<?php

// ****** INCLUSIONS *******

// Importe l'interface DAO et la classe Produit
include_once("DAO.interface.php");
include_once("modele/Calendrier2.class.php");

class CalendrierDAO2 implements DAO {

    public static function chercher($cles) {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d'obtenir la connexion à la BD");
        }

        $UnCalendrier2 = null;
        $requete = $connexion->prepare("SELECT * FROM 'Matches_Ligue_Junior' WHERE id_matches_juniors=? ");
        $requete->execute(array($cles));

        if ($requete->rowCount() != 0) {
            $enr = $requete->fetch();
            $UnCalendrier2 = new Calendrier2($enr['id_matches_juniors'], $enr['date_matches_juniors'], $enr['lieu_matches_juniors'], $enr['nom_equipes_locales_juniors'], $enr['nom_equipes_visiteuses_juniors']);
        }

        $requete->closeCursor();
        ConnexionBD::close();

        return $UnCalendrier2;
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

        $tableau2 = [];
        $requete = $connexion->prepare("SELECT * FROM Matches_Ligue_Junior " . $filtre);
        $requete->execute();

        foreach ($requete as $enr) {
            $UnCalendrier2 = new Calendrier2($enr['id_matches_juniors'], $enr['date_matches_juniors'], $enr['lieu_matches_juniors'], $enr['nom_equipes_locales_juniors'], $enr['nom_equipes_visiteuses_juniors']);
            array_push($tableau2, $UnCalendrier2);
        }

        $requete->closeCursor();
        ConnexionBD::close();

        return $tableau2;
    }

    static function inserer($UnCalendrier2) {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }

        $requete = $connexion->prepare("INSERT INTO Matches_Ligue_Junior (id_matches_juniors,date_matches_juniors,lieu_matches_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors) VALUES(?,?,?,?,?)");

        $tableauInfos2 = [$UnCalendrier2->getId2(), $UnCalendrier2->getDate2(), $UnCalendrier2->getLieu2(), $UnCalendrier2->getEquipeLocale2(), $UnCalendrier2->getEquipeVisiteuse2()];
        return $requete->execute($tableauInfos2);
    }

    static public function modifier($UnCalendrier2) {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }

        $requete = $connexion->prepare("UPDATE Matches_Ligue_Junior SET id_matches_juniors=?,date_matches_juniors=?,lieu_matches_juniors=?,nom_equipes_locales_juniors=?,nom_equipes_visiteuses_juniors=?  WHERE id_matches_juniors=?");

        $tableauInfos2 = [$UnCalendrier2->getId2(), $UnCalendrier2->getDate2(), $UnCalendrier2->getLieu2(), $UnCalendrier2->getEquipeLocale2(), $UnCalendrier2->getEquipeVisiteuse2()];
        return $requete->execute($tableauInfos2);
    }

    static public function supprimer($UnCalendrier2) {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible d’obtenir la connexion à la BD.");
        }

        $requete = $connexion->prepare("DELETE FROM Matches_Ligue_Junior WHERE id_matches_juniors=?");
        $tableauInfos2 = [$UnCalendrier2->getId2(), $UnCalendrier2->getDate2(), $UnCalendrier2->getLieu2(), $UnCalendrier2->getEquipeLocale2(), $UnCalendrier2->getEquipeVisiteuse2()];
        return $requete->execute($tableauInfos2);
    }
}

?>
