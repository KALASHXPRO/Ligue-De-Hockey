<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/CalendrierJuniorDAO.class.php");
include_once("modele/DAO/ResultatsJuniorDAO.class.php");

class SupprimerCalendrierJunior extends Controleur {

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
            
            $matchASupprimer = CalendrierJuniorDAO::chercher($idMatch);
            $infoMatch = $matchASupprimer ? "match du " . htmlspecialchars($matchASupprimer->getDate()) . " à " . htmlspecialchars($matchASupprimer->getLieu()) : "inconnu";

            $resultat = ResultatsJuniorDAO::chercher($idMatch);
            if ($resultat) {
                ResultatsJuniorDAO::supprimer($idMatch);
            }

            if (CalendrierJuniorDAO::supprimer($idMatch)) {
                array_push($this->messagesConfirmation, "Le " . $infoMatch . " a été supprimé avec succès du calendrier junior.");
            } else {
                array_push($this->messagesErreur, "Erreur lors de la suppression du " . $infoMatch . " du calendrier junior.");
            }
        } else {
            array_push($this->messagesErreur, "Aucun match spécifié pour la suppression du calendrier.");
        }
        
        header('Location: ?action=voirCalendrierJunior');
        exit;
    }
}

?> 