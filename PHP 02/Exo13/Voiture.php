<?php
//-------------------------------Initalisation-----------------------
class Voiture 
{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_demarrer; 
    public function __construct(string $marque, string $modele, int $nbPortes) 
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_demarrer = false;
    }
    //-------------------------------------------------------setters --------------------------------------------------------------------------------------
    public function setDemarrer($value)
    {
        $this->_demarrer = $value;
    }
    public function setVitesseActuelle(int $vitesse) 
    {
        $this->_vitesseActuelle = $vitesse;
    }

    public function setMarque(string $marque)
    {
        $this->_marque = $marque;
    }
    public function setModele(string $modele)
    {
        $this->_modele = $modele;
    }
    public function setNbPortes(int $nbPortes)
    {
        $this->_nbPortes = $nbPortes;
    }
    /*--------------------------------------------Getters -------------------------------------------------------------------------------------*/
    public function getDemarrer(): bool
    {
        return $this->_demarrer;
    }
    public function getMarque(): string
    {
        return $this->_marque;
    }
    public function getModele() : string
    {
        return $this->_modele;
    }
    public function getNbPortes() : int
    {
        return $this->_nbPortes;
    }
    public function getVitesseActuelle() : int
    {
        return $this->_vitesseActuelle;
    }
    /*--------------------------------------------------*Methods*-----------------------------------------------------------*/
    public function demarrer() : string
    {
        $this->setDemarrer(true);
        $result = "Le véhicule $this démarre.<br>";
        return $result;
    }  
    public function accelerer($vitesse) : string
    {
        if ($this->_demarrer)
        {
            $this->_vitesseActuelle += $vitesse;  
            $result = "Le véhicule $this accélère pour atteindre " . $this->_vitesseActuelle . " km/h.<br>";
            //pas $this->vitesse parce que $vitesse n'est pas initalisée
            $result .= "Le véhicule $this accélère de ". $vitesse ."km/h. <br>";
            return $result;
        }
        else
        {
            $result = "Le véhicule veut accélérer de ".$vitesse. "km/h.<br>";
            $result .= "Le véhicule $this doit démarrer pour accélérer. <br>";
            return $result;
        }
    }
    public function stopper() : string
    {
        $this->_vitesseActuelle = 0;
        $this->_demarrer = false;
        $result = "Le véhicule $this est à l'arrêt.<br>";
        return $result;
    }
    public function afficher($numero) : string
    {
        $result = "<br>Info du véhicule ".$numero."<br>";
        $result .= "*********************<br>";
        $result .= "Nom et modèle : " . $this->_marque ." " .$this->_modele ."<br>";
        $result .= "Nombre de portes : " . $this->_nbPortes . "<br>";
        $result .= "Vitesse actuelle : " . $this->_vitesseActuelle . " km/h<br>";
        if ($this->_demarrer) {
            $result .= "Le véhicule $this est démarré";
        } else {
            $result .= "Le véhicule $this est arrêté";
        }
        $result .= "<br>";
        return $result;
    }
    public function afficherVitesseActuelle() : string 
    {
        $result="La vitesse du véhicule $this est de ".$this->_vitesseActuelle." km/h.<br>";
        return $result;
    }
    public function ralentir($vitesse) : string
    {
        if ($this->_demarrer)
        {
            if ($vitesse > $this->_vitesseActuelle)
                {
                    $this->_vitesseActuelle = 0;
                    $result = "Le véhicule $this freine pour s'arrêter.<br>";
                    return $result;
                 }
                 else
                 {
                    $this->_vitesseActuelle -= $vitesse;  
                    $result = "Le véhicule $this ralenti pour atteindre " . $this->_vitesseActuelle . " km/h.<br>";
                    $result .= "Le véhicule $this ralenti de ". $vitesse ."km/h. <br>";
                    return $result;    
                 }

        }
            else 
        {
            $result = "Le véhicule veut ralentir de ".$vitesse. "km/h.<br>";
            $result .= "Le véhicule $this doit démarrer pour ralentir <br>";
            return $result;
        }
    }
    public function __toString() 
    {
        return $this->_marque." ".$this->_modele;
    }
}