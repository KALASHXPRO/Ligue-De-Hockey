<?php
require_once('DAO.interface.php');
require_once('connexionBD.class.php');

abstract class AbstractDAO implements DAO {
    protected static $connexion;
    protected static $tableName;
    protected static $primaryKey;

    protected static function getConnexion() {
        try {
            if (!self::$connexion) {
                self::$connexion = ConnexionBD::getInstance();
            }
            return self::$connexion;
        } catch(Exception $e) {
            throw new Exception("Impossible d'obtenir la connexion à la BD: " . $e->getMessage());
        }
    }

    protected static function closeConnexion() {
        if (self::$connexion) {
            ConnexionBD::close();
            self::$connexion = null;
        }
    }

    protected static function beginTransaction() {
        self::getConnexion()->beginTransaction();
    }

    protected static function commit() {
        self::getConnexion()->commit();
    }

    protected static function rollback() {
        self::getConnexion()->rollBack();
    }

    public static function chercher($cles) {
        try {
            $connexion = self::getConnexion();
            $requete = $connexion->prepare("SELECT * FROM " . static::$tableName . " WHERE " . static::$primaryKey . " = ?");
            $requete->execute([$cles]);
            
            $result = null;
            if ($requete->rowCount() > 0) {
                $enr = $requete->fetch(PDO::FETCH_ASSOC);
                $instance = new static();
                $result = $instance->createObject($enr);
            }
            
            $requete->closeCursor();
            return $result;
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la recherche: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }

    public static function chercherTous() {
        return self::chercherAvecFiltre("");
    }

    public static function chercherAvecFiltre($filtre) {
        try {
            $connexion = self::getConnexion();
            $requete = $connexion->prepare("SELECT * FROM " . static::$tableName . " " . $filtre);
            $requete->execute();
            
            $result = [];
            $instance = new static();
            while ($enr = $requete->fetch(PDO::FETCH_ASSOC)) {
                $result[] = $instance->createObject($enr);
            }
            
            return $result;
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la recherche avec filtre: " . $e->getMessage());
        } finally {
            self::closeConnexion();
        }
    }

    abstract protected function createObject($data);
    abstract protected function getInsertFields();
    abstract protected function getUpdateFields();
    abstract protected function getInsertValues($object);
    abstract protected function getUpdateValues($object);
} 