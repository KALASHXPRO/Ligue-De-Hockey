<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/CalendrierJuniorDAO.class.php");
include_once("modele/DAO/ResultatsJuniorDAO.class.php");
include_once("modele/Calendrier.class.php");
include_once("modele/Resultat.class.php");

class ModifierCalendrierJunior extends Controleur {

    private $calendrier;

    public function __construct() {
        parent::__construct();
    }

    public function getCalendrierJunior() {
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
                if (CalendrierJuniorDAO::modifier($matchAModifier)) {
                    $resultat = ResultatsJuniorDAO::chercher($idMatch);
                    if ($resultat) {
                        $resultat->setEquipeLocale($equipeLocale);
                        $resultat->setEquipeVisiteuse($equipeVisiteuse);
                        ResultatsJuniorDAO::modifier($resultat);
                    }
                    array_push($this->messagesConfirmation, "Le match du \"" . htmlspecialchars($dateMatch) . "\" a été modifié avec succès au calendrier junior.");
                    header('Location: ?action=voirCalendrierJunior');
                    exit;
                } else {
                    array_push($this->messagesErreur, "Erreur lors de la modification du match au calendrier junior.");
                }
            }
        } elseif (isset($_GET['id'])) {
            $idMatch = (int)$_GET['id'];
            $this->calendrier = CalendrierJuniorDAO::chercher($idMatch);
            if (!$this->calendrier) {
                array_push($this->messagesErreur, "Match de calendrier junior introuvable.");
                return "voirCalendrierJunior";
            }
        } else {
            array_push($this->messagesErreur, "Aucun match spécifié pour la modification du calendrier.");
            return "voirCalendrierJunior";
        }

        return "PageModifierCalendrierJunior";
    }
}

?> 