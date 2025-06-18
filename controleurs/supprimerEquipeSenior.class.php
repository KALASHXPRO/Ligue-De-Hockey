<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/EquipesSeniorDAO.class.php");

class SupprimerEquipeSenior extends Controleur {

    public function __construct() {
        parent::__construct();
    }

    public function executerAction() {
        if (!isset($_SESSION['utilisateurConnecte']) || empty($_SESSION['is_admin'])) {
            header('Location: ?action=seConnecter');
            exit;
        }

        if (isset($_GET['id'])) {
            $idEquipe = (int)$_GET['id'];
            
            $equipeASupprimer = EquipesSeniorDAO::chercher($idEquipe);
            $nomEquipe = $equipeASupprimer ? htmlspecialchars($equipeASupprimer->getNom()) : "inconnue";

            if (EquipesSeniorDAO::supprimer($idEquipe)) {
                array_push($this->messagesConfirmation, "L'équipe senior \"" . $nomEquipe . "\" a été supprimée avec succès.");
            } else {
                array_push($this->messagesErreur, "Erreur lors de la suppression de l'équipe senior \"" . $nomEquipe . "\".");
            }
        } else {
            array_push($this->messagesErreur, "Aucune équipe spécifiée pour la suppression.");
        }
        
        header('Location: ?action=voirEquipesSenior');
        exit;
    }
}

?> 