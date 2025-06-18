<?php
	include_once("controleurs/controleurAccueilDefaut.class.php");
	include_once("controleurs/controleurVoirEquipesSenior.class.php");
	include_once("controleurs/controleurVoirCalendrierSenior.class.php");
	include_once("controleurs/controleurVoirResultatsSenior.class.php");
	include_once("controleurs/controleurVoirEquipesJunior.class.php");
	include_once("controleurs/controleurVoirCalendrierJunior.class.php");
	include_once("controleurs/controleurVoirResultatsJunior.class.php");
	include_once("controleurs/seDeconnecter.class.php");
	include_once("controleurs/seConnecter.class.php");
	include_once("controleurs/voirAdmin.class.php");

    // Nouveaux contrôleurs d'ajout
    include_once("controleurs/ajouterEquipeSenior.class.php");
    include_once("controleurs/ajouterEquipeJunior.class.php");
    include_once("controleurs/ajouterResultatSenior.class.php");
    include_once("controleurs/ajouterResultatJunior.class.php");
    include_once("controleurs/ajouterCalendrierSenior.class.php");
    include_once("controleurs/ajouterCalendrierJunior.class.php");

    // Nouveaux contrôleurs de modification
    include_once("controleurs/modifierEquipeSenior.class.php");
    include_once("controleurs/modifierEquipeJunior.class.php");
    include_once("controleurs/modifierResultatSenior.class.php");
    include_once("controleurs/modifierResultatJunior.class.php");
    include_once("controleurs/modifierCalendrierSenior.class.php");
    include_once("controleurs/modifierCalendrierJunior.class.php");

    // Nouveaux contrôleurs de suppression
    include_once("controleurs/supprimerEquipeSenior.class.php");
    include_once("controleurs/supprimerEquipeJunior.class.php");
    include_once("controleurs/supprimerResultatSenior.class.php");
    include_once("controleurs/supprimerResultatJunior.class.php");
    include_once("controleurs/supprimerCalendrierSenior.class.php");
    include_once("controleurs/supprimerCalendrierJunior.class.php");
	
	class Manufacture {

		public static function creerControleur($action) {
			$controleur=null;
			if($action=="voirEquipesSenior"){
            $controleur = new VoirEquipesSenior();
			}
			elseif($action== "voirCalendrierSenior"){
				$controleur = new VoirCalendrierSenior();
			}
			elseif($action== "voirResultatsSenior"){
				$controleur = new VoirResultatsSenior();
			}
			elseif($action== "voirEquipesJunior"){
				$controleur = new VoirEquipesJunior();
			}
			elseif($action== "voirCalendrierJunior"){
				$controleur = new VoirCalendrierJunior();
			}
			elseif($action== "voirResultatsJunior"){
				$controleur = new VoirResultatsJunior();
			}
			elseif($action== "voirAdmin"){
				$controleur = new VoirAdmin();
			}
			elseif($action== "seConnecter"){
				$controleur = new SeConnecter();
			}
			elseif($action== "seDeconnecter"){
				$controleur = new SeDeconnecter();
			}
            // Nouvelle actions d'ajout
            elseif ($action == "ajouterEquipeSenior") {
                $controleur = new AjouterEquipeSenior();
            }
            elseif ($action == "ajouterEquipeJunior") {
                $controleur = new AjouterEquipeJunior();
            }
            elseif ($action == "ajouterResultatSenior") {
                $controleur = new AjouterResultatSenior();
            }
            elseif ($action == "ajouterResultatJunior") {
                $controleur = new AjouterResultatJunior();
            }
            elseif ($action == "ajouterCalendrierSenior") {
                $controleur = new AjouterCalendrierSenior();
            }
            elseif ($action == "ajouterCalendrierJunior") {
                $controleur = new AjouterCalendrierJunior();
            }
            // Nouvelles actions de modification
            elseif ($action == "modifierEquipeSenior") {
                $controleur = new ModifierEquipeSenior();
            }
            elseif ($action == "modifierEquipeJunior") {
                $controleur = new ModifierEquipeJunior();
            }
            elseif ($action == "modifierResultatSenior") {
                $controleur = new ModifierResultatSenior();
            }
            elseif ($action == "modifierResultatJunior") {
                $controleur = new ModifierResultatJunior();
            }
            elseif ($action == "modifierCalendrierSenior") {
                $controleur = new ModifierCalendrierSenior();
            }
            elseif ($action == "modifierCalendrierJunior") {
                $controleur = new ModifierCalendrierJunior();
            }
            // Nouvelles actions de suppression
            elseif ($action == "supprimerEquipeSenior") {
                $controleur = new SupprimerEquipeSenior();
            }
            elseif ($action == "supprimerEquipeJunior") {
                $controleur = new SupprimerEquipeJunior();
            }
            elseif ($action == "supprimerResultatSenior") {
                $controleur = new SupprimerResultatSenior();
            }
            elseif ($action == "supprimerResultatJunior") {
                $controleur = new SupprimerResultatJunior();
            }
            elseif ($action == "supprimerCalendrierSenior") {
                $controleur = new SupprimerCalendrierSenior();
            }
            elseif ($action == "supprimerCalendrierJunior") {
                $controleur = new SupprimerCalendrierJunior();
            }
			else{
				$controleur = new AcceuilDefaut();
			}
			return $controleur;
			
		}
    }
?>