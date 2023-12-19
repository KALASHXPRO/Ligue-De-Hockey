<?php

class Calendrier2
{
    private $id2;
    private $date2;
    private $lieu2;
    private $equipeLocale2;
    private $equipeVisiteuse2;

    public function __construct($id2, $date2, $lieu2, $equipeLocale2, $equipeVisiteuse2)
    {
        $this->id2 = $id2;
        $this->date2 = $date2;
        $this->lieu2 = $lieu2;
        $this->equipeLocale2 = $equipeLocale2;
        $this->equipeVisiteuse2 = $equipeVisiteuse2;
    }

    // Getters
    public function getId2()
    {
        return $this->id2;
    }

    public function getDate2()
    {
        return $this->date2;
    }

    public function getLieu2()
    {
        return $this->lieu2;
    }

    public function getEquipeLocale2()
    {
        return $this->equipeLocale2;
    }

    public function getEquipeVisiteuse2()
    {
        return $this->equipeVisiteuse2;
    }

    // Setters
    public function setId2($id2)
    {
        $this->id2 = $id2;
    }

    public function setDate2($date2)
    {
        $this->date2 = $date2;
    }

    public function setLieu2($lieu2)
    {
        $this->lieu2 = $lieu2;
    }

    public function setEquipeLocale2($equipeLocale2)
    {
        $this->equipeLocale2 = $equipeLocale2;
    }

    public function setEquipeVisiteuse2($equipeVisiteuse2)
    {
        $this->equipeVisiteuse2 = $equipeVisiteuse2;
    }

    public function afficherInfosMatch()
    {
        echo "ID du Match : {$this->id2}\n";
        echo "Date : {$this->date2}\n";
        echo "Lieu : {$this->lieu2}\n";
        echo "Équipe Locale : {$this->equipeLocale2}\n";
        echo "Équipe Visiteuse : {$this->equipeVisiteuse2}\n";
    }
}
?>
