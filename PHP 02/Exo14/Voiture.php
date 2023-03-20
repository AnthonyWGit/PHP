<?php
/*---------------------------------------------Initialisation---------------------------------*/
class Voiture
// private ne nous permet pas d'heriter de $marque et $modele. On utilise pas de getter ni de setter donc on utilise le keyword protected
{
    protected string $_marque;
    protected string $_modele;
    protected string $_type ;
    /*__construct pour voiture thermique*/
    public function __construct(string $marque, string $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_type = "thermique";
    }
    /*-----------setters--------------*/
    public function setMarque(string $marque)
    {
        $this->_marque = $marque;
    }
    public function setModele(string $modele)
    {
        $this->_modele = $modele;
    }
    public function setTtype(string $type)
    {
        $this->_type = $type;
    }
    /*----------getters----------*/
    public function getMarque() : string
    {
        return $this->_marque;
    }
    public function getModele() : string
    {
        return $this->_modele;
    }
    public function getType() : string
    {
        return $this->_type; 
    }
    /*------Méthodes------*/
    public function getInfos() : string
    {
        $result = "Voiture ".$this->_type. ".<br>";
        $result .= "Marque : " .$this->_marque. ".<br>";
        $result .= "Modèle : " .$this->_modele. ".<br>";
        return $result;
    }
}
class VoitureElectrique extends Voiture
{
    protected $_autonomie;
    /*__construct pour voiture électrique*/
    public function __construct(string $marque, string $modele, int $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->_autonomie =$autonomie;
        $this->_type = "électrique";
    }
    /*------getters--------*/
    public function setAutonomie(int $autonomie) 
    {
        $this->_autonomie = $autonomie;
    }
    /*-----setters------*/
    public function getAutonomie() : int 
    {
        return $this->_autonomie;
    }
    /*-------Méthodes-----------*/
    public function getInfos() : string
    {
        $result = "Voiture ".$this->_type. ".<br>";
        $result .= "Marque : " .$this->_marque. ".<br>";
        $result .= "Modèle : " .$this->_modele. ".<br>";
        $result .= "Autonomie :" .$this->_autonomie. " Heures .<br>";
        return $result;
    }
}
