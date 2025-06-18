<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/ResultatsSeniorDAO.class.php");
include_once("modele/DAO/CalendrierSeniorDAO.class.php");
include_once("modele/Resultat.class.php");
include_once("modele/Calendrier.class.php");

class ModifierResultatSenior extends Controleur {

    private $resultat;

    public function __construct() {
        parent::__construct();
    }

    public function getResultatSenior() {
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
                if (ResultatsSeniorDAO::modifier($resultatAModifier)) {

                    $match = CalendrierSeniorDAO::chercher($idMatch);
                    if ($match) {
                        $match->setEquipeLocale($equipeLocale);
                        $match->setEquipeVisiteuse($equipeVisiteuse);
                        CalendrierSeniorDAO::modifier($match);
                    }
                    array_push($this->messagesConfirmation, "Le résultat du match \"" . htmlspecialchars($idMatch) . "\" a été modifié avec succès.");
                    header('Location: ?action=voirResultatsSenior');
                    exit;
                } else {
                    array_push($this->messagesErreur, "Erreur lors de la modification du résultat senior.");
                }
            }
        } elseif (isset($_GET['id'])) {
            $idMatch = (int)$_GET['id'];
            $this->resultat = ResultatsSeniorDAO::chercher($idMatch);
            if (!$this->resultat) {
                array_push($this->messagesErreur, "Résultat senior introuvable.");
                return "voirResultatsSenior";
            }
        } else {
            array_push($this->messagesErreur, "Aucun résultat spécifié pour la modification.");
            return "voirResultatsSenior";
        }

        return "PageModifierResultatSenior";
    }
}

?> 