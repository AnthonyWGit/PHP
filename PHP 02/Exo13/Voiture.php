<?php
//-------------------------------Initalisation-----------------------
class Voiture 
{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_demarrer; 
    public function __construct($marque, $modele, $nbPortes) 
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
    public function setVitesseActuelle($vitesse) 
    {
        $this->_vitesseActuelle = $vitesse;
    }

    public function setMarque($marque)
    {
        $this->_marque = $marque;
    }
    public function setModele($modele)
    {
        $this->_modele = $modele;
    }
    public function setNbPortes($nbPortes)
    {
        $this->_nbPortes = $nbPortes;
    }


    /*--------------------------------------------Getters -------------------------------------------------------------------------------------*/
    public function getDemarrer()
    {
        return $this->_demarrer;
    }
    public function getMarque() 
    {
        return $this->_marque;
    }
    public function getModele() 
    {
        return $this->_modele;
    }
    public function getNbPortes() 
    {
        return $this->_nbPortes;
    }
    public function getVitesseActuelle()
    {
        return $this->_vitesseActuelle;
    }

    /*--------------------------------------------------*Methods*-----------------------------------------------------------*/
    public function demarrer() 
    {
        $this->setDemarrer(true);
        $result = "Le véhicule " .$this->_marque . " ". $this->_modele. " démarre.<br>";
        return $result;
    }  
    public function accelerer($vitesse) 
    {
        if ($this->_demarrer == true)
        {
        $this->_vitesseActuelle += $vitesse;  
        $result = "Le véhicule ".$this->_marque ." accélère pour atteindre " . $this->_vitesseActuelle . " km/h.<br>";
        //pas $this->vitesse parce que $vitesse n'est pas initalisée
        $result .= "Le véhicule ".$this->_marque ." accélère de ". $vitesse ."km/h. <br>";
        return $result;
        }
        else
        {
            $result = "Le véhicule veut accélérer de ".$vitesse. "km/h.<br>";
            $result .= "Le véhicule ".$this->_marque." doit démarrer pour accélérer <br>";
            return $result;
        }
    }
    public function stopper() 
    {
        $this->_vitesseActuelle = 0;
        $this->_demarrer = false;
        $result = "Le véhicule ". $this->_marque ." est à l'arrêt.<br>";
        return $result;
    }
    public function afficher($numero) 
    {
        $result = "<br>Info du véhicule ".$numero."<br>";
        $result .= "*********************<br>";
        $result .= "Nom et modèle : " . $this->_marque ." " .$this->_modele ."<br>";
        $result .= "Nombre de portes : " . $this->_nbPortes . "<br>";
        $result .= "Vitesse actuelle : " . $this->_vitesseActuelle . " km/h<br>";
        if ($this->_demarrer) {
            $result .= "Le véhicule ".$this->_marque." est démarré";
        } else {
            $result .= "Le véhicule ".$this->_marque." est arrêté";
        }
        $result .= "<br>";
        return $result;
    }
    public function afficherVitesseActuelle()
    {
        $result=" La vitesse du véhicule ".$this->_marque. " ". $this->_modele. " est de ".$this->_vitesseActuelle." km/h.<br>";
        return $result;
    }

    public function ralentir($vitesse)
    {
        if ($this->_demarrer == true)
        {
            if ($vitesse > $this->_vitesseActuelle)
                {
                    $this->_vitesseActuelle = 0;
                    $result = "Le véhicule ".$this->_marque ." freine pour s'arrêter<br>.";
                    return $result;
                 }
                 else
                 {
                    $this->_vitesseActuelle -= $vitesse;  
                    $result = "Le véhicule ".$this->_marque ." ralenti pour atteindre " . $this->_vitesseActuelle . " km/h.<br>";
                    $result .= "Le véhicule ".$this->_marque ." ralenti de ". $vitesse ."km/h. <br>";
                    return $result;    
                 }

        }


            else 
        {
            $result = "Le véhicule veut ralentir de ".$vitesse. "km/h.<br>";
            $result .= "Le véhicule ".$this->_marque." doit démarrer pour ralentir <br>";
            return $result;
        }
    }
}