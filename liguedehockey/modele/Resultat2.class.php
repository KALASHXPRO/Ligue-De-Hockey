<?php

class Resultat2
{
    private $score2;
    private $equipeLocale2;
    private $equipeVisiteuse2;
    private $idMatch2;

    public function __construct($score2, $equipeLocale2, $equipeVisiteuse2, $idMatch2)
    {
        $this->score2 = $score2;
        $this->equipeLocale2 = $equipeLocale2;
        $this->equipeVisiteuse2 = $equipeVisiteuse2;
        $this->idMatch2 = $idMatch2;
    }

    // Getters
    public function getScore2()
    {
        return $this->score2;
    }

    public function getEquipeLocale2()
    {
        return $this->equipeLocale2;
    }

    public function getEquipeVisiteuse2()
    {
        return $this->equipeVisiteuse2;
    }

    public function getIdMatch2()
    {
        return $this->idMatch2;
    }

    // Setters
    public function setScore2($score2)
    {
        $this->score2 = $score2;
    }

    public function setEquipeLocale2($equipeLocale2)
    {
        $this->equipeLocale2 = $equipeLocale2;
    }

    public function setEquipeVisiteuse2($equipeVisiteuse2)
    {
        $this->equipeVisiteuse2 = $equipeVisiteuse2;
    }

    public function setIdMatch2($idMatch2)
    {
        $this->idMatch2 = $idMatch2;
    }

    public function afficherInfosResultat2()
    {
        echo "Score du Match : {$this->score2}\n";
        echo "Équipe Locale : {$this->equipeLocale2}\n";
        echo "Équipe Visiteuse : {$this->equipeVisiteuse2}\n";
        echo "ID du Match : {$this->idMatch2}\n";
    }
}
?>
