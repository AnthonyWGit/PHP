<?php
class Auteur
{
    private string $_nom;
    private string $_prenom;

    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }
/*-----------SETTERS------------*/

    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }
    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }
/*-----getterszzzzzzzzzzzzzzzzz-------------------*/
    public function getNom() : string
    {
        return $this->_nom;
    }
    public function getPrenom() : string
    {
        return $this->_prenom;
    }

    public function __toString() : string 
    {
        return $this->_prenom. " ".$this->_nom;
    }
}