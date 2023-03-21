<?php
class Auteur
{
    private string $_nom;
    private string $_prenom;
    private array $_livres;

    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres =[];
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
// M  E T H O D E S 
    public function __toString() : string 
    {
        return $this->_prenom. " ".$this->_nom;
    }
    public function addLivre(Livre $livre)
    {
        $this->_livres[] = $livre;
    }
    public function afficherBibliographie()
    {
       $result = "<em><strong>Livre de " . $this->_prenom . " " . $this->_nom . "</em></strong><br><br>";
       foreach ($this->_livres as $livre)
       {
        $result .= $livre . "<br>";
       }
       return $result;
    }
}