<?php
require_once("AbstractDAO.class.php");
require_once("modele/Calendrier.class.php");

class CalendrierSeniorDAO extends AbstractDAO {
    protected static $tableName = "Matches_Ligue_Majeure";
    protected static $primaryKey = "id_matches_majeurs";

    protected function createObject($data) {
        return new Calendrier(
            $data['id_matches_majeurs'],
            $data['date_matches_majeurs'],
            $data['lieu_matches_majeurs'],
            $data['nom_equipes_locales_majeures'],
            $data['nom_equipes_visiteuses_majeures']
        );
    }

    protected function getInsertFields() {
        return "date_matches_majeurs, lieu_matches_majeurs, nom_equipes_locales_majeures, nom_equipes_visiteuses_majeures";
    }

    protected function getUpdateFields() {
        return "date_matches_majeurs = ?, lieu_matches_majeurs = ?, nom_equipes_locales_majeures = ?, nom_equipes_visiteuses_majeures = ?";
    }

    protected function getInsertValues($object) {
        return [
            $object->getDate(),
            $object->getLieu(),
            $object->getEquipeLocale(),
            $object->getEquipeVisiteuse()
        ];
    }

    protected function getUpdateValues($object) {
        return [
            $object->getDate(),
            $object->getLieu(),
            $object->getEquipeLocale(),
            $object->getEquipeVisiteuse(),
            $object->getId()
        ];
    }

    public static function inserer($unCalendrier) {
        try {
            $connexion = self::getConnexion();
            $instance = new static();
            $requete = $connexion->prepare(
                "INSERT INTO " . self::$tableName . " (" . $instance->getInsertFields() . ") VALUES (?, ?, ?, ?)"
            );
            return $requete->execute($instance->getInsertValues($unCalendrier));
        } catch (Exception $e) {
            throw new Exception("Erreur lors de l'insertion: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }

    public static function modifier($unCalendrier) {
        try {
            $connexion = self::getConnexion();
            $instance = new static();
            $requete = $connexion->prepare(
                "UPDATE " . self::$tableName . " SET " . $instance->getUpdateFields() . 
                " WHERE " . self::$primaryKey . " = ?"
            );
            $values = $instance->getUpdateValues($unCalendrier);
            return $requete->execute($values);
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la modification: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }

    public static function supprimer($unCalendrier) {
        try {
            $connexion = self::getConnexion();
            $requete = $connexion->prepare(
                "DELETE FROM " . self::$tableName . " WHERE " . self::$primaryKey . " = ?"
            );
            $id = is_object($unCalendrier) ? $unCalendrier->getId() : $unCalendrier;
            return $requete->execute([$id]);
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la suppression: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }

    public static function obtenirMatchsSansResultat() {
        try {
            $connexion = self::getConnexion();
            $requete = $connexion->prepare(
                "SELECT m.* FROM " . self::$tableName . " m 
                LEFT JOIN Resultats_Majeurs r ON m.id_matches_majeurs = r.id_matches_majeurs 
                WHERE r.id_matches_majeurs IS NULL"
            );
            $requete->execute();
            $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
            $instance = new static();
            return array_map([$instance, 'createObject'], $resultats);
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la récupération des matchs sans résultat: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }
} 