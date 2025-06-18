<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/EquipesJuniorDAO.class.php");
include_once("modele/Equipes.class.php");

class AjouterEquipeJunior extends Controleur {

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
                if (EquipesJuniorDAO::inserer($nouvelleEquipe)) {
                    array_push($this->messagesConfirmation, "L'équipe junior \"" . htmlspecialchars($nomEquipe) . "\" a été ajoutée avec succès.");
                    header('Location: ?action=voirEquipesJunior');
                    exit;
                } else {
                    array_push($this->messagesErreur, "Erreur lors de l'ajout de l'équipe junior.");
                }
            }
        }
        return "PageAjouterEquipeJunior";
    }
}

?> 