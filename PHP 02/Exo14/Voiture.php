<?php
/*---------------------------------------------Initialisation---------------------------------*/
class Voiture
// private ne nous permet pas d'heriter de $marque et $modele. On utilise pas de getter ni de setter donc on utilise le keyword protected
{
    protected $_marque;
    protected $_modele;
    protected $_type;
    /*__construct pour voiture thermique*/
    public function __construct($marque, $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }
    /*-----------setters--------------*/
    public function setMarque($marque)
    {
        $this->_marque = $marque;
    }
    public function setModele($modele)
    {
        $this->_modele = $modele;
    }
    public function setTtype($type)
    {
        $this->_type = $type;
    }
    /*----------getters----------*/
    public function getMarque()
    {
        return $this->_marque;
    }
    public function getModele()
    {
        return $this->_modele;
    }
    public function getType()
    {
        return $this->_type; 
    }
    /*------Méthodes------*/
    public function getInfos()
    {
        $result = "Marque : " .$this->_marque. "<br>";
        $result .= "Modèle : " .$this->_modele. "<br>";
        return $result;
    }
}
class VoitureElectrique extends Voiture
{
    private $_autonomie;
    /*__construct pour voiture électrique*/
    public function __construct($marque, $modele, $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }
    /*------getters--------*/
    public function setAutonomie($autonomie)
    {
        $this->_autonomie = $autonomie;
    }
    /*-----setters------*/
    public function getAutonomie()
    {
        return $this->_autonomie;
    }
    public function getInfos()
    {
        $result = "Marque : " .$this->_marque. "<br>";
        $result .= "Modèle : " .$this->_modele. "<br>";
        $result .= "Autonomie :" .$this->_autonomie. " Heures <br>";
        return $result;
    }
}
