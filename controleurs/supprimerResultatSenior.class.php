<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/ResultatsSeniorDAO.class.php");

class SupprimerResultatSenior extends Controleur {

    public function __construct() {
        parent::__construct();
    }

    public function executerAction() {
        if (!isset($_SESSION['utilisateurConnecte']) || empty($_SESSION['is_admin'])) {
            header('Location: ?action=seConnecter');
            exit;
        }

        if (isset($_GET['id'])) {
            $idMatch = (int)$_GET['id'];
            
            $resultatASupprimer = ResultatsSeniorDAO::chercher($idMatch);
            $infoResultat = $resultatASupprimer ? "match ID: " . htmlspecialchars($resultatASupprimer->getIdMatch()) : "inconnu";

            if (ResultatsSeniorDAO::supprimer($idMatch)) {
                array_push($this->messagesConfirmation, "Le résultat du " . $infoResultat . " a été supprimé avec succès.");
            } else {
                array_push($this->messagesErreur, "Erreur lors de la suppression du résultat du " . $infoResultat . ".");
            }
        } else {
            array_push($this->messagesErreur, "Aucun résultat spécifié pour la suppression.");
        }
        
        header('Location: ?action=voirResultatsSenior');
        exit;
    }
}

?> 