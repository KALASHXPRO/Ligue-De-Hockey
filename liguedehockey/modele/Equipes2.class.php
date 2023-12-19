<?php

class Equipe2
{
    private $id2;
    private $nom2;

    public function __construct($id2, $nom2)
    {
        $this->id2 = $id2;
        $this->nom2 = $nom2;
    }

    // Getters
    public function getId2()
    {
        return $this->id2;
    }

    public function getNom2()
    {
        return $this->nom2;
    }

    // Setters
    public function setId2($id2)
    {
        $this->id2 = $id2;
    }

    public function setNom2($nom2)
    {
        $this->nom2 = $nom2;
    }

    public function afficherInfosEquipe()
    {
        echo "ID de l'Équipe : {$this->id2}\n";
        echo "Nom de l'Équipe : {$this->nom2}\n";
    }
}
?>
