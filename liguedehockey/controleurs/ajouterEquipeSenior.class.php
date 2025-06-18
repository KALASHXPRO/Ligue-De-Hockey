<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/EquipesSeniorDAO.class.php");
include_once("modele/Equipes.class.php");

class AjouterEquipeSenior extends Controleur {

    public function __construct() {
        parent::__construct();
    }

    public function executerAction() {
        if (!isset($_SESSION['utilisateurConnecte']) || empty($_SESSION['is_admin'])) {
            header('Location: ?action=seConnecter');
            exit;
        }

        if (isset($_POST['nom_equipe'])) {
            $nomEquipe = trim($_POST['nom_equipe']);

            if (empty($nomEquipe)) {
                array_push($this->messagesErreur, "Le nom de l'équipe ne peut pas être vide.");
            } else {
                $nouvelleEquipe = new Equipe(0, $nomEquipe);
                if (EquipesSeniorDAO::inserer($nouvelleEquipe)) {
                    array_push($this->messagesConfirmation, "L'équipe senior \"" . htmlspecialchars($nomEquipe) . "\" a été ajoutée avec succès.");
                    header('Location: ?action=voirEquipesSenior');
                    exit;
                } else {
                    array_push($this->messagesErreur, "Erreur lors de l'ajout de l'équipe senior.");
                }
            }
        }
        return "PageAjouterEquipeSenior";
    }
}

?> 