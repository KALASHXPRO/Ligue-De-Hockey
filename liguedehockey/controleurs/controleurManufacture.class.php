<?php
	include_once("controleurs/controleurAccueilDefaut.class.php");
    include_once("controleurs/controleurVoirEquipes.class.php");
	include_once("controleurs/controleurVoirEquipes2.class.php");
	include_once("controleurs/controleurVoirResultats.class.php");
	include_once("controleurs/controleurVoirResultats2.class.php");
	include_once("controleurs/controleurVoirCalendrier.class.php");
	include_once("controleurs/controleurVoirCalendrier2.class.php");
	class Manufacture {

		public static function creerControleur($action) {
			$controleur=null;
			if($action=="voirEquipes"){
            $controleur = new VoirEquipes();
			}
			elseif($action== "voirEquipes2"){
				$controleur = new VoirEquipes2();
			}
			elseif($action== "voirResultats"){
				$controleur = new VoirResultats();
			}
			elseif($action== "voirResultats2"){
				$controleur = new VoirResultats2();
			}
			elseif($action== "voirCalendrier"){
				$controleur = new VoirCalendrier();
			}
			elseif($action== "voirCalendrier2"){
				$controleur = new VoirCalendrier2();
			}
			else{
				$controleur = new AcceuilDefaut();
			}
	
			return $controleur;
			
		}
    }
?>