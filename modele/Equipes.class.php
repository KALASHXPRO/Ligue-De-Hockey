<?php

class Equipe
{
    private $id;
    private $nom;

    public function __construct($id, $nom)
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function afficherInfosEquipe()
    {
        echo "ID de l'Équipe : {$this->id}\n";
        echo "Nom de l'Équipe : {$this->nom}\n";
    }
}
?>
