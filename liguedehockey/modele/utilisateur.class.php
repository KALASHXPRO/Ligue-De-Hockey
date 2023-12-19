<?php

// Classe représentant un produit pour vente dans un commerce
class Utilisateur {
	// Attributs
	private $nomUtilisateur;
	private $motPasse;

	// Constructeur
	public function __construct($nomUtilisateur,$motPasse){
		$this->nomUtilisateur=$nomUtilisateur;
		$this->motPasse=$motPasse;
	}
	
	// Accesseurs et mutateurs
	public function getNomUtilisateur() {return $this->nomUtilisateur;}
	public function getMotPasse() {return $this->motPasse;}

	// Autres méthodes
	public function verifierMotPasse($motAVerifier) { return $this->motPasse == $motAVerifier; }
	
	// Affichage
	public function __toString(){
		$message=$this->nomUtilisateur;
		return $message;
	}
}
?>






