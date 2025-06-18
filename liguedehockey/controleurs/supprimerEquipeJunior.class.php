<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/EquipesJuniorDAO.class.php");

class SupprimerEquipeJunior extends Controleur {

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
            
            $equipeASupprimer = EquipesJuniorDAO::chercher($idEquipe);
            $nomEquipe = $equipeASupprimer ? htmlspecialchars($equipeASupprimer->getNom()) : "inconnue";

            if (EquipesJuniorDAO::supprimer($idEquipe)) {
                array_push($this->messagesConfirmation, "L'équipe junior \"" . $nomEquipe . "\" a été supprimée avec succès.");
            } else {
                array_push($this->messagesErreur, "Erreur lors de la suppression de l'équipe junior \"" . $nomEquipe . "\".");
            }
        } else {
            array_push($this->messagesErreur, "Aucune équipe spécifiée pour la suppression.");
        }
        
        header('Location: ?action=voirEquipesJunior');
        exit;
    }
}

?> 