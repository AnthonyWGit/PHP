<?php
//-------------------------------Initalisation-----------------------
class Voiture {
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;
    private $demarrer = false; 
    public function __construct($marque, $modele, $nbPortes) 
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
    }
    //-------------------------------------------------------setters --------------------------------------------------------------------------------------
    public function setDemarrer($on)
    {
        $this->demarrer = $on;
    }
    public function setVitesseActuelle($vitesse) 
    {
        $this->vitesseActuelle = $vitesse;
    }
    public function demarrer() 
    {
        $this->setDemarrer(true);
        $result = "Le véhicule " .$this->marque . " ". $this->modele. " démarre.<br>";
        return $result;
    }

    public function accelerer($vitesse) 
    {
        if ($this->demarrer == true)
        {
        $this->vitesseActuelle += $vitesse;  
        $result = "Le véhicule ".$this->marque ." accélère pour atteindre " . $this->vitesseActuelle . " km/h.<br>";
        //pas $this->vitesse parce qu'on veut récupérer la valeur "vitesse" en argument
        $result .= "Le véhicule ".$this->marque ." accélère de ". $vitesse ."km/h. <br>";
        return $result;
        }
        else
        {
            $result = "Le véhicule veut accélérer de ".$vitesse. "km/h.<br>";
            $result .= "Le véhicule ".$this->marque." doit démarrer pour accélérer <br>";
            return $result;
        }
    }

    public function stopper() 
    {
        $this->vitesseActuelle = 0;
        $this->demarrer = false;
        $result = "Le véhicule ". $this->marque ." est à l'arrêt.<br>";
        return $result;
    }

    public function afficher($numero) 
    {
        $result = "<br>Info du véhicule ".$numero."<br>";
        $result .= "*********************<br>";
        $result .= "Nom et modèle : " . $this->marque ." " .$this->modele ."<br>";
        $result .= "Nombre de portes : " . $this->nbPortes . "<br>";
        $result .= "Vitesse actuelle : " . $this->vitesseActuelle . " km/h<br>";
        if ($this->demarrer) {
            $result .= "Le véhicule ".$this->marque." est démarré";
        } else {
            $result .= "Le véhicule ".$this->marque." est arrêté";
        }
        $result .= "<br>";
        return $result;
    }
    public function afficherVitesseActuelle()
    {
        $result=" La vitesse du véhicule ".$this->marque. " ". $this->modele. " est de ".$this->vitesseActuelle." km/h.<br>";
        return $result;
    }

    //--------------------------------------------Getters -------------------------------------------------------------------------------------

    public function getDemarrer()
    {
        return $this->demarrer;
    }
    public function getMarque() 
    {
        return $this->marque;
    }
    public function getModele() 
    {
        return $this->modele;
    }
    public function getNbPortes() 
    {
        return $this->nbPortes;
    }
    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }
}
//----------------------------------------------------------------------------------------------------------------------------------------------