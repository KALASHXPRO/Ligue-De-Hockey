<?php
require_once("AbstractDAO.class.php");
require_once("modele/Resultat.class.php");

class ResultatsJuniorDAO extends AbstractDAO {
    protected static $tableName = "Resultats_Juniors";
    protected static $primaryKey = "id_matches_juniors";

    protected function createObject($data) {
        return new Resultat(
            $data['score_matchs_juniors'],
            $data['nom_equipes_locales_juniors'],
            $data['nom_equipes_visiteuses_juniors'],
            $data['id_matches_juniors']
        );
    }

    protected function getInsertFields() {
        return "score_matchs_juniors, nom_equipes_locales_juniors, nom_equipes_visiteuses_juniors, id_matches_juniors";
    }

    protected function getUpdateFields() {
        return "score_matchs_juniors = ?, nom_equipes_locales_juniors = ?, nom_equipes_visiteuses_juniors = ?";
    }

    protected function getInsertValues($object) {
        return [
            $object->getScore(),
            $object->getEquipeLocale(),
            $object->getEquipeVisiteuse(),
            $object->getIdMatch()
        ];
    }

    protected function getUpdateValues($object) {
        return [
            $object->getScore(),
            $object->getEquipeLocale(),
            $object->getEquipeVisiteuse(),
            $object->getIdMatch()
        ];
    }

    public static function inserer($unResultat) {
        try {
            $connexion = self::getConnexion();
            $instance = new static();
            $requete = $connexion->prepare(
                "INSERT INTO " . self::$tableName . " (" . $instance->getInsertFields() . ") VALUES (?, ?, ?, ?)"
            );
            return $requete->execute($instance->getInsertValues($unResultat));
        } catch (Exception $e) {
            throw new Exception("Erreur lors de l'insertion: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }

    public static function modifier($unResultat) {
        try {
            $connexion = self::getConnexion();
            $instance = new static();
            $requete = $connexion->prepare(
                "UPDATE " . self::$tableName . " SET " . $instance->getUpdateFields() . 
                " WHERE " . self::$primaryKey . " = ?"
            );
            return $requete->execute($instance->getUpdateValues($unResultat));
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la modification: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }

    public static function supprimer($unResultat) {
        try {
            $connexion = self::getConnexion();
            $requete = $connexion->prepare(
                "DELETE FROM " . self::$tableName . " WHERE id_matches_juniors = ?"
            );
            $id = is_object($unResultat) ? $unResultat->getIdMatch() : $unResultat;
            return $requete->execute([$id]);
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la suppression: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }
} 