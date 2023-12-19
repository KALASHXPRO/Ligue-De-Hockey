<?php

class Resultat
{
    private $score;
    private $equipeLocale;
    private $equipeVisiteuse;
    private $idMatch;

    public function __construct($score, $equipeLocale, $equipeVisiteuse, $idMatch)
    {
        $this->score = $score;
        $this->equipeLocale = $equipeLocale;
        $this->equipeVisiteuse = $equipeVisiteuse;
        $this->idMatch = $idMatch;
    }

    // Getters
    public function getScore()
    {
        return $this->score;
    }

    public function getEquipeLocale()
    {
        return $this->equipeLocale;
    }

    public function getEquipeVisiteuse()
    {
        return $this->equipeVisiteuse;
    }

    public function getIdMatch()
    {
        return $this->idMatch;
    }

    // Setters
    public function setScore($score)
    {
        $this->score = $score;
    }

    public function setEquipeLocale($equipeLocale)
    {
        $this->equipeLocale = $equipeLocale;
    }

    public function setEquipeVisiteuse($equipeVisiteuse)
    {
        $this->equipeVisiteuse = $equipeVisiteuse;
    }

    public function setIdMatch($idMatch)
    {
        $this->idMatch = $idMatch;
    }

    public function afficherInfosResultat()
    {
        echo "Score du Match : {$this->score}\n";
        echo "Équipe Locale : {$this->equipeLocale}\n";
        echo "Équipe Visiteuse : {$this->equipeVisiteuse}\n";
        echo "ID du Match : {$this->idMatch}\n";
    }
}
?>
