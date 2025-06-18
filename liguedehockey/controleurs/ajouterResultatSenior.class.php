<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/ResultatsSeniorDAO.class.php");
include_once("modele/Resultat.class.php");

class AjouterResultatSenior extends Controleur {

    public function __construct() {
        parent::__construct();
    }

    public function executerAction() {

        if (!isset($_SESSION['utilisateurConnecte']) || empty($_SESSION['is_admin'])) {
            header('Location: ?action=seConnecter');
            exit;
        }

        if (isset($_POST['score']) && isset($_POST['equipeLocale']) && isset($_POST['equipeVisiteuse']) && isset($_POST['idMatch'])) {
            $score = trim($_POST['score']);
            $equipeLocale = trim($_POST['equipeLocale']);
            $equipeVisiteuse = trim($_POST['equipeVisiteuse']);
            $idMatch = (int)$_POST['idMatch'];

            if (empty($score) || empty($equipeLocale) || empty($equipeVisiteuse) || empty($idMatch)) {
                array_push($this->messagesErreur, "Tous les champs sont requis pour ajouter un résultat.");
            } else {
                $nouveauResultat = new Resultat($score, $equipeLocale, $equipeVisiteuse, $idMatch); 
                if (ResultatsSeniorDAO::inserer($nouveauResultat)) {
                    array_push($this->messagesConfirmation, "Le résultat du match \"" . htmlspecialchars($idMatch) . "\" a été ajouté avec succès.");
                    header('Location: ?action=voirResultatsSenior');
                    exit;
                } else {
                    array_push($this->messagesErreur, "Erreur lors de l'ajout du résultat senior.");
                }
            }
        }
        return "PageAjouterResultatSenior";
    }
}

?> 