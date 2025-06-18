<?php
require_once("AbstractDAO.class.php");
require_once("modele/Equipes.class.php");

class EquipesSeniorDAO extends AbstractDAO {
    protected static $tableName = "Equipes_Majeures";
    protected static $primaryKey = "id_equipes_majeurs";

    protected function createObject($data) {
        return new Equipe($data['id_equipes_majeurs'], $data['nom_equipes_majeurs']);
    }

    protected function getInsertFields() {
        return "nom_equipes_majeurs";
    }

    protected function getUpdateFields() {
        return "nom_equipes_majeurs = ?";
    }

    protected function getInsertValues($object) {
        return [$object->getNom()];
    }

    protected function getUpdateValues($object) {
        return [$object->getNom(), $object->getId()];
    }

    public static function inserer($uneEquipe) {
        try {
            $connexion = self::getConnexion();
            $instance = new static();
            $requete = $connexion->prepare(
                "INSERT INTO " . self::$tableName . " (" . $instance->getInsertFields() . ") VALUES (?)"
            );
            return $requete->execute($instance->getInsertValues($uneEquipe));
        } catch (Exception $e) {
            throw new Exception("Erreur lors de l'insertion: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }

    public static function modifier($uneEquipe) {
        try {
            $connexion = self::getConnexion();
            $instance = new static();
            $requete = $connexion->prepare(
                "UPDATE " . self::$tableName . " SET " . $instance->getUpdateFields() . 
                " WHERE " . self::$primaryKey . " = ?"
            );
            return $requete->execute($instance->getUpdateValues($uneEquipe));
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la modification: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }

    public static function supprimer($uneEquipe) {
        try {
            $connexion = self::getConnexion();
            $requete = $connexion->prepare(
                "DELETE FROM " . self::$tableName . " WHERE " . self::$primaryKey . " = ?"
            );
            $id = is_object($uneEquipe) ? $uneEquipe->getId() : $uneEquipe;
            return $requete->execute([$id]);
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la suppression: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }

    public static function obtenirToutesLesEquipes() {
        try {
            $connexion = self::getConnexion();
            $requete = $connexion->prepare(
                "SELECT * FROM " . self::$tableName . " ORDER BY nom_equipes_majeurs"
            );
            $requete->execute();
            $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
            $instance = new static();
            return array_map([$instance, 'createObject'], $resultats);
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la récupération des équipes: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }
} 