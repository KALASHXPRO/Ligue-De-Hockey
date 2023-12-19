<?php
	/* Description : DAO pour la classe produit de la BD commerce
	Date        : 21 Nov 2021
    Auteur      : Dini Ahamada
	*/
	
	// ****** INLCUSIONS *******

	// Importe l'interface DAO et la classe Produit
	include_once("DAO.interface.php");
	include_once("modele/Resultat.class.php");

	// ****** CLASSE *******
	class ResultatsDAO implements DAO {	
	
		// Cette méthode doit retourner l'objet dont la clé primaire a été reçu en paramètre
		// Notes : 1) On retourne null si non-trouvé, 
		//         2) Si la clé primaire est composée, alors le paramètre est un tableau assiociatif
		// ici la seule $clés est un int représentant le code du produit
		public static function chercher($cles) { 
			// obtenir la connexion
			try {
                $connexion=ConnexionBD::getInstance();

			} catch(Exception $e){

                throw new Exception("Impossible d'obtenir la connexion à la BD");
			}

			// valeur par défaut pour la variable à retourner si non-trouvée
			$UnResultat=null;
			// Préparer une requête de type PDOStatement avec des paramètres SQL	
		    $requete = $connexion->prepare("SELECT * FROM Resultats_Majeurs WHERE id_matches_majeurs=? ");
			// Exécuter la requête
			$requete->execute(array($cles));
			// Analyser l’enregistrement, s’il existe, et créer l’instance du Produit
			// note on pourait aussi lancer une exception si on a plus d’un résultat …
              if($requete->rowCount()!=0){
                 $enr=$requete->fetch();
				 $UnResultat = new Resultat($enr['score_matchs'], $enr['nom_equipes_locales_majeures'],$enr['nom_equipes_visiteuses_majeures'],$enr['id_matches_majeurs']);

			  }
			// fermer le curseur de la requête 
			$requete->closeCursor();
			
			//et la connexion à la BD
			ConnexionBD::close();

			// retourner le produit
			return $UnResultat;

		} 
		
		// Cette méthode doit retourner une liste de tous les objets reliés à la table de la BD
		static public function chercherTous() { 
			return self::chercherAvecFiltre("");
			/*
			//obtenir la connexion
			try {
                $connexion=ConnexionBD::getInstance();

			} catch(Exception $e){

                throw new Exception("Impossible d'obtenir la connexion à la BD");
			}

			$tableau=[];
         // Préparer une requête de type PDOStatement avec des paramètres SQL
         $requete = $connexion->prepare("SELECT * FROM produit ");
		   // Exécuter la requête
		   $requete->execute();
		   foreach($requete as $enr){
			$unProduit = new Produit($enr['code'], $enr['description'],$enr['marque'], $enr['url_photo'], $enr['prix'], $enr['quantite']);

			// ajouter les produits dans le tableau un à la fois
			 array_push($tableau,$unProduit);

		   }

		   // fermer le curseur de la requête 
			$requete->closeCursor();
			
			//et la connexion à la BD
			ConnexionBD::close();

			// retourner le tableau
			return $tableau;
			*/

		} 
		
		// Comme la méthode chercherTous, mais en applicant le filtre (clause WHERE ...) reçue en param.
		static public function chercherAvecFiltre($filtre){ 
			// obtenir la connexion
		//obtenir la connexion
			try {
                $connexion=ConnexionBD::getInstance();

			} catch(Exception $e){

                throw new Exception("Impossible d'obtenir la connexion à la BD");
			}

			$tableau=[];
         // Préparer une requête de type PDOStatement avec des paramètres SQL
         $requete = $connexion->prepare("SELECT * FROM Resultats_Majeurs " .$filtre);
		   // Exécuter la requête
		   $requete->execute();
		   foreach($requete as $enr){
			$UnResultat = new Resultat($enr['score_matchs'], $enr['nom_equipes_locales_majeures'],$enr['nom_equipes_visiteuses_majeures'],$enr['id_matches_majeurs']);
			
			// ajouter les produits dans le tableau un à la fois
			 array_push($tableau,$UnResultat);
		   }

		   // fermer le curseur de la requête 
			$requete->closeCursor();
			
			//et la connexion à la BD
			ConnexionBD::close();

			// retourner le tableau
			return $tableau;
			
			
		} 

		static function inserer($UnResultat){ 
			// on essaie d’établir la connexion
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			// On prépare la commande insert
			$requete= $connexion->prepare("INSERT INTO Resultats_Majeurs (score_matchs,nom_equipes_locales_majeures,nom_equipes_visiteuses_majeures,id_matches_majeurs) VALUES(?,?,?,?)");
        
			// On l’exécute, et on retourne l’état de réussite (true/false)
			$tableauInfos =[$UnResultat->getScore(),$UnResultat->getEquipeLocale(),$UnResultat->getEquipeVisiteuse(),$UnResultat->getIdMatch()];
			 return $requete->execute($tableauInfos);

		}

		// Cette méthode modifie tous les champs (non-clé primaire) de l'objet reçu en paramètre dans la table
		// Retourne true/false selon que l'opération a été un succès ou pas.
		static public function modifier($UnResultat) {
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			// On prépare la commande update
			$requete=$connexion->prepare("UPDATE Resultats_Majeurs SET  score_matchs=?, nom_equipes_locales_majeures=?, nom_equipes_visiteuses_majeures=? WHERE id_matches_majeurs=?");

			// On l’exécute, et on retourne l’état de réussite (true/false)
            // On l’exécute, et on retourne l’état de réussite (true/false)
			$tableauInfos =[$UnResultat->getScore(),$UnResultat->getEquipeLocale(),$UnResultat->getEquipeVisiteuse(),$UnResultat->getIdMatch()];
			 return $requete->execute($tableauInfos);

		}
		// Cette méthode supprime l'objet reçu en paramètre de la table
		// Retourne true/false selon que l'opération a été un succès ou pas.
		static public function supprimer($UnResultat){
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			// On prépare la commande delete (on utilise le code seulement comme paramètre)
             $requete=$connexion->prepare("DELETE FROM Resultats_Majeurs WHERE id_matches_majeurs=?");
			// On l’exécute, et on retourne l’état de réussite (true/false)
			$tableauInfos=[$UnResultat->getIdMatch()];
			return $requete->execute($tableauInfos);


		} 

		// ================================== Exercice #1 =================================================
		//************************************ A compléter *************************************************
		// Cette méthode retourne la liste de tous les produit qui sont entre deux prix et que la description 
		//contient la partieDescritpion.
		// ............. À faire en exercice avec requête paramétrée (ne pas utiliser 
		//les autres méthodes de la classe)
		//static public function checherParPrixDesc($prixMin,$prixMax,$partieDesc){}

		
		// Cette méthode ajuste la quantite en stock d'un item (paramètre positif on ajoute, paramètre négatif on enleve)
		// ............. À faire en exercice avec requête paramétrée (ne pas utiliser les autres méthodes de la classe)
		//static public function ajusterStock($unCode,$quantiteAAjuster){}
	}
	
?>