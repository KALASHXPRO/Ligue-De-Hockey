<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/CalendrierSeniorDAO.class.php");
include_once("modele/DAO/ResultatsSeniorDAO.class.php");
include_once("modele/Calendrier.class.php");
include_once("modele/Resultat.class.php");

class ModifierCalendrierSenior extends Controleur {

    private $calendrier;

    public function __construct() {
        parent::__construct();
    }

    public function getCalendrierSenior() {
        return $this->calendrier;
    }

    public function executerAction() {
        if (!isset($_SESSION['utilisateurConnecte']) || empty($_SESSION['is_admin'])) {
            header('Location: ?action=seConnecter');
            exit;
        }

        if (isset($_POST['idMatch']) && isset($_POST['dateMatch']) && isset($_POST['lieuMatch']) && isset($_POST['equipeLocale']) && isset($_POST['equipeVisiteuse'])) {
            $idMatch = (int)$_POST['idMatch'];
            $dateMatch = trim($_POST['dateMatch']);
            $lieuMatch = trim($_POST['lieuMatch']);
            $equipeLocale = trim($_POST['equipeLocale']);
            $equipeVisiteuse = trim($_POST['equipeVisiteuse']);

            if (empty($dateMatch) || empty($lieuMatch) || empty($equipeLocale) || empty($equipeVisiteuse) || empty($idMatch)) {
                array_push($this->messagesErreur, "Tous les champs sont requis pour modifier un match au calendrier.");
            } else {
                $matchAModifier = new Calendrier($idMatch, $dateMatch, $lieuMatch, $equipeLocale, $equipeVisiteuse);
                if (CalendrierSeniorDAO::modifier($matchAModifier)) {
                    $resultat = ResultatsSeniorDAO::chercher($idMatch);
                    if ($resultat) {
                        $resultat->setEquipeLocale($equipeLocale);
                        $resultat->setEquipeVisiteuse($equipeVisiteuse);
                        ResultatsSeniorDAO::modifier($resultat);
                    }
                    array_push($this->messagesConfirmation, "Le match du \"" . htmlspecialchars($dateMatch) . "\" a été modifié avec succès au calendrier senior.");
                    header('Location: ?action=voirCalendrierSenior');
                    exit;
                } else {
                    array_push($this->messagesErreur, "Erreur lors de la modification du match au calendrier senior.");
                }
            }
        } elseif (isset($_GET['id'])) {
            $idMatch = (int)$_GET['id'];
            $this->calendrier = CalendrierSeniorDAO::chercher($idMatch);
            if (!$this->calendrier) {
                array_push($this->messagesErreur, "Match de calendrier senior introuvable.");
                header('Location: ?action=voirCalendrierSenior');
                exit;
            }
        } else {
            array_push($this->messagesErreur, "Aucun match spécifié pour la modification du calendrier.");
            header('Location: ?action=voirCalendrierSenior');
            exit;
        }

        if (!$this->calendrier) {
            header('Location: ?action=voirCalendrierSenior');
            exit;
        }

        return "PageModifierCalendrierSenior";
    }
}

?> 