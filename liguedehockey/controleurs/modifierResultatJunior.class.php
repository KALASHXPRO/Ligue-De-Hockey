<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/ResultatsJuniorDAO.class.php");
include_once("modele/DAO/CalendrierJuniorDAO.class.php");
include_once("modele/Resultat.class.php");
include_once("modele/Calendrier.class.php");

class ModifierResultatJunior extends Controleur {

    private $resultat; 

    public function __construct() {
        parent::__construct();
    }

    public function getResultatJunior() {
        return $this->resultat;
    }

    public function executerAction() {
        if (!isset($_SESSION['utilisateurConnecte']) || empty($_SESSION['is_admin'])) {
            header('Location: ?action=seConnecter');
            exit;
        }

        if (isset($_POST['idMatch']) && isset($_POST['score']) && isset($_POST['equipeLocale']) && isset($_POST['equipeVisiteuse'])) {
            $idMatch = (int)$_POST['idMatch'];
            $score = trim($_POST['score']);
            $equipeLocale = trim($_POST['equipeLocale']);
            $equipeVisiteuse = trim($_POST['equipeVisiteuse']);

            if (empty($score) || empty($equipeLocale) || empty($equipeVisiteuse) || empty($idMatch)) {
                array_push($this->messagesErreur, "Tous les champs sont requis pour modifier un résultat.");
            } else {
                $resultatAModifier = new Resultat($score, $equipeLocale, $equipeVisiteuse, $idMatch);
                if (ResultatsJuniorDAO::modifier($resultatAModifier)) {
                    $match = CalendrierJuniorDAO::chercher($idMatch);
                    if ($match) {
                        $match->setEquipeLocale($equipeLocale);
                        $match->setEquipeVisiteuse($equipeVisiteuse);
                        CalendrierJuniorDAO::modifier($match);
                    }
                    array_push($this->messagesConfirmation, "Le résultat du match \"" . htmlspecialchars($idMatch) . "\" a été modifié avec succès.");
                    header('Location: ?action=voirResultatsJunior');
                    exit;
                } else {
                    array_push($this->messagesErreur, "Erreur lors de la modification du résultat junior.");
                }
            }
        } elseif (isset($_GET['id'])) {
            $idMatch = (int)$_GET['id'];
            $this->resultat = ResultatsJuniorDAO::chercher($idMatch);
            if (!$this->resultat) {
                array_push($this->messagesErreur, "Résultat junior introuvable.");
                return "voirResultatsJunior";
            }
        } else {
            array_push($this->messagesErreur, "Aucun résultat spécifié pour la modification.");
            return "voirResultatsJunior";
        }

        return "PageModifierResultatJunior";
    }
}

?> 