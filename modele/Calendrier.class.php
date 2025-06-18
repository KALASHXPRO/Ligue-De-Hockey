<?php

class Calendrier
{
    private $id;
    private $date;
    private $lieu;
    private $equipeLocale;
    private $equipeVisiteuse;

    public function __construct($id, $date, $lieu, $equipeLocale, $equipeVisiteuse)
    {
        $this->id = $id;
        $this->date = $date;
        $this->lieu = $lieu;
        $this->equipeLocale = $equipeLocale;
        $this->equipeVisiteuse = $equipeVisiteuse;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getLieu()
    {
        return $this->lieu;
    }

    public function getEquipeLocale()
    {
        return $this->equipeLocale;
    }

    public function getEquipeVisiteuse()
    {
        return $this->equipeVisiteuse;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    public function setEquipeLocale($equipeLocale)
    {
        $this->equipeLocale = $equipeLocale;
    }

    public function setEquipeVisiteuse($equipeVisiteuse)
    {
        $this->equipeVisiteuse = $equipeVisiteuse;
    }

    public function afficherInfosMatch()
    {
        echo "ID du Match : {$this->id}\n";
        echo "Date : {$this->date}\n";
        echo "Lieu : {$this->lieu}\n";
        echo "Équipe Locale : {$this->equipeLocale}\n";
        echo "Équipe Visiteuse : {$this->equipeVisiteuse}\n";
    }
}
?>
