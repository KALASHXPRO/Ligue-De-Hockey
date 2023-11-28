<?php
class Equipe_Majeur{

    private $id_equipes_majeurs;
    private $nom_equipes_majeurs;



    public function __construct($id_equipes_majeurs, $nom_equipes_majeurs){
        $this->id_equipes_majeurs = $id_equipes_majeurs;
        $this->nom_equipes_majeurs = $nom_equipes_majeurs;
    }

    public function getId(){
        return $this->id_equipes_majeurs;
    }

    public function getNom(){
        return $this->nom_equipes_majeurs;
    }

    public function setId($valeur){
        $this->id_equipes_majeurs = $valeur;
    }

    public function setNom($valeur){
        $this->nom_equipes_majeurs = $valeur;
    }


    public function __toString(){
        $message="[#".$this->id_equipes_majeurs."]".$this->nom_equipes_majeurs;
        return $message;
    }
}

class Equipe_Juniors{

    private $id_equipes_juniors;
    private $nom_equipes_juniors;



    public function __construct($id_equipes_juniors, $nom_equipes_juniors){
        $this->id_equipes_juniors = $id_equipes_juniors;
        $this->nom_equipes_juniors = $nom_equipes_juniors;
    }

    public function getId(){
        return $this->id_equipes_juniors;
    }

    public function getNom(){
        return $this->nom_equipes_juniors;
    }

    public function setId($valeur){
        $this->id_equipes_juniors = $valeur;
    }

    public function setNom($valeur){
        $this->nom_equipes_juniors = $valeur;
    }


    public function __toString(){
        $message="[#".$this->id_equipes_juniors."]".$this->nom_equipes_juniors;
        return $message;
    }
}
    
    class Matches_Ligue_Majeur{

    private $id_matches_majeurs;
    private $date_matches_majeurs;
    private $lieu_matches_majeurs;
    private $nom_equipes_locales_majeures;
    private $nom_equipes_visiteuses_majeures;

    public function __construct($id_matches_majeurs, $date_matches_majeurs, $lieu_matches_majeurs, $nom_equipes_locales_majeures, $nom_equipes_visiteuses_majeures){
    $this->id_matches_majeurs = $id_matches_majeurs;
    $this->date_matches_majeurs = $date_matches_majeurs;
    $this->lieu_matches_majeurs = $lieu_matches_majeurs;
    $this->nom_equipes_locales_majeures = $nom_equipes_locales_majeures;
    $this->nom_equipes_visiteuses_majeures = $nom_equipes_visiteuses_majeures;
    }
    
    public function getId(){
        return $this->id_matches_majeurs;
    }

    public function getDate(){
        return $this->date_matches_majeurs;
    }

    public function getLieu(){
        return $this->lieu_matches_majeurs;
    }

    public function getNomLocal(){
        return $this->nom_equipes_locales_majeures;
    }

    public function getNomVisit(){
        return $this->nom_equipes_visiteuses_majeures;
    }

    public function setId($valeur){
        $this->id_matches_majeurs = $valeur;
    }

    public function setDate($valeur){
        $this->date_matches_majeurs = $valeur;
    }

    public function setLieu($valeur){
        $this->lieu_matches_majeurs = $valeur;
    }

    public function setNomLocal($valeur){
        $this->nom_equipes_locales_majeures = $valeur;
    }

    public function setNomVisit($valeur){
        $this->nom_equipes_visiteuses_majeures = $valeur;
    }

    }

    class Matches_Ligue_Junior {
    private $id_matches_juniors;
    private $date_matches_juniors;
    private $lieu_matches_juniors;
    private $nom_equipes_locales_juniors;
    private $nom_equipes_visiteuses_juniors;

    public function __construct($id_matches_juniors, $date_matches_juniors, $lieu_matches_juniors, $nom_equipes_locales_juniors, $nom_equipes_visiteuses_juniors){
    $this->id_matches_juniors = $id_matches_juniors;
    $this->date_matches_juniors = $date_matches_juniors;
    $this->lieu_matches_juniors = $lieu_matches_juniors;
    $this->nom_equipes_locales_juniors = $nom_equipes_locales_juniors;
    $this->nom_equipes_visiteuses_juniors = $nom_equipes_visiteuses_juniors;
    }
    
    public function getId(){
        return $this->id_matches_juniors;
    }

    public function getDate(){
        return $this->date_matches_juniors;
    }

    public function getLieu(){
        return $this->lieu_matches_juniors;
    }

    public function getNomLocal(){
        return $this->nom_equipes_locales_juniors;
    }

    public function getNomVisit(){
        return $this->nom_equipes_visiteuses_juniors;
    }

    public function setId($valeur){
        $this->id_matches_juniors = $valeur;
    }

    public function setDate($valeur){
        $this->date_matches_juniors = $valeur;
    }

    public function setLieu($valeur){
        $this->lieu_matches_juniors = $valeur;
    }

    public function setNomLocal($valeur){
        $this->nom_equipes_locales_juniors = $valeur;
    }

    public function setNomVisit($valeur){
        $this->nom_equipes_visiteuses_juniors = $valeur;
    }

    }

    class Resultat_Match_Junior{
        private $score_matchs_juniors;
        private $nom_equipes_locales_juniors;
        private $nom_equipes_visiteuses_juniors;
        private $id_matches_juniors;

        public function __construct($score_matchs_juniors, $nom_equipes_locales_juniors, $nom_equipes_visiteuses_juniors, $id_matches_juniors){
            $this->score_matchs_juniors = $score_matchs_juniors;
            $this->nom_equipes_locales_juniors = $nom_equipes_locales_juniors;
            $this->nom_equipes_visiteuses_juniors = $nom_equipes_visiteuses_juniors;
            $this->id_matches_juniors = $id_matches_juniors;

        }

        public function getScore(){
            return $this->score_matchs_juniors;
        }
    
        public function getNomLocal(){
            return $this->nom_equipes_locales_juniors;
        }
    
        public function getNomVisit(){
            return $this->nom_equipes_visiteuses_juniors;
        }
    
        public function getId(){
            return $this->id_matches_juniors;
        }
        
        public function setScore($valeur){
            $this->id_matches_juniors = $valeur;
        }
        public function setNomLocal($valeur){
            $this->nom_equipes_locales_juniors = $valeur;
        }
    
        public function setNomVisit($valeur){
            $this->nom_equipes_visiteuses_juniors = $valeur;
        }
        public function setId($valeur){
            $this->id_matches_juniors = $valeur;
        }
    
       
    
    
       
        
    }


    class Resultat_Match_Majeur{
        private $score_matchs_majeurs;
        private $nom_equipes_locales_majeures;
        private $nom_equipes_visiteuses_majeures;
        private $id_matches_majeurs;

        public function __construct($score_matchs_majeurs, $nom_equipes_locales_majeures, $nom_equipes_visiteuses_majeures, $id_matches_majeurs){
            $this->score_matchs_majeurs = $score_matchs_majeurs;
            $this->nom_equipes_locales_majeures = $nom_equipes_locales_majeures;
            $this->nom_equipes_visiteuses_majeures = $nom_equipes_visiteuses_majeures;
            $this->id_matches_majeurs = $id_matches_majeurs;
        }
            public function getScore(){
                return $this->score_matchs_majeurs;
            }
        
            public function getNomLocal(){
                return $this->nom_equipes_locales_majeures;
            }
        
            public function getNomVisit(){
                return $this->nom_equipes_visiteuses_majeures;
            }
        
            public function getId(){
                return $this->id_matches_majeurs;
            }
            
            public function setScore($valeur){
                $this->id_matches_majeurs = $valeur;
            }
            public function setNomLocal($valeur){
                $this->nom_equipes_locales_majeures = $valeur;
            }
        
            public function setNomVisit($valeur){
                $this->nom_equipes_visiteuses_majeures = $valeur;
            }
            public function setId($valeur){
                $this->id_matches_majeurs = $valeur;
            }
        
    
}

?>