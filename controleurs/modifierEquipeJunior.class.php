<?php

include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/EquipesJuniorDAO.class.php");
include_once("modele/Equipes.class.php");

class ModifierEquipeJunior extends Controleur {

    private $equipe;

    public function __construct() {
        parent::__construct();
    }

    public function getEquipeJunior() {
        return $this->equipe;
    }

    public function executerAction() {
        if (!isset($_SESSION['utilisateurConnecte']) || empty($_SESSION['is_admin'])) {
            header('Location: ?action=seConnecter');
            exit;
        }

        if (isset($_POST['id_equipe']) && isset($_POST['nom_equipe'])) {
            $idEquipe = (int)$_POST['id_equipe'];
            $nomEquipe = trim($_POST['nom_equipe']);

            if (empty($nomEquipe)) {
                array_push($this->messagesErreur, "Le nom de l'équipe ne peut pas être vide.");
            } else {
                $equipeAModifier = new Equipe($idEquipe, $nomEquipe);
                if (EquipesJuniorDAO::modifier($equipeAModifier)) {
                    array_push($this->messagesConfirmation, "L'équipe junior \"" . htmlspecialchars($nomEquipe) . "\" a été modifiée avec succès.");
                    header('Location: ?action=voirEquipesJunior');
                    exit;
                } else {
                    array_push($this->messagesErreur, "Erreur lors de la modification de l'équipe junior.");
                }
            }
        } elseif (isset($_GET['id'])) {
            $idEquipe = (int)$_GET['id'];
            $this->equipe = EquipesJuniorDAO::chercher($idEquipe);
            if (!$this->equipe) {
                array_push($this->messagesErreur, "Équipe junior introuvable.");
                return "voirEquipesJunior";
            }
        } else {
            array_push($this->messagesErreur, "Aucune équipe spécifiée pour la modification.");
            return "voirEquipesJunior";
        }

        return "PageModifierEquipeJunior";
    }
}

?> 