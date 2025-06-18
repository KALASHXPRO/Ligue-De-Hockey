<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/CalendrierSeniorDAO.class.php");
include_once("modele/Calendrier.class.php"); 

class AjouterCalendrierSenior extends Controleur {

    public function __construct() {
        parent::__construct();
    }

    public function executerAction() {
        if (!isset($_SESSION['utilisateurConnecte']) || empty($_SESSION['is_admin'])) {
            header('Location: ?action=seConnecter');
            exit;
        }

        if (isset($_POST['dateMatch']) && isset($_POST['lieuMatch']) && isset($_POST['equipeLocale']) && isset($_POST['equipeVisiteuse'])) {
            $dateMatch = trim($_POST['dateMatch']);
            $lieuMatch = trim($_POST['lieuMatch']);
            $equipeLocale = trim($_POST['equipeLocale']);
            $equipeVisiteuse = trim($_POST['equipeVisiteuse']);

            if (empty($dateMatch) || empty($lieuMatch) || empty($equipeLocale) || empty($equipeVisiteuse)) {
                array_push($this->messagesErreur, "Tous les champs sont requis pour ajouter un match au calendrier.");
            } else {

                $nouveauMatch = new Calendrier(0, $dateMatch, $lieuMatch, $equipeLocale, $equipeVisiteuse);
                if (CalendrierSeniorDAO::inserer($nouveauMatch)) {
                    array_push($this->messagesConfirmation, "Le match du \"" . htmlspecialchars($dateMatch) . "\" a été ajouté avec succès au calendrier senior.");
                    header('Location: ?action=voirCalendrierSenior');
                    exit;
                } else {
                    array_push($this->messagesErreur, "Erreur lors de l'ajout du match au calendrier senior.");
                }
            }
        }
        return "PageAjouterCalendrierSenior";
    }
}

?> 