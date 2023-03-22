<?php
class Personne 
{
    protected $nom;
    protected $prenom;
    protected $sexe;
    protected $dateNaissance;
    public function __construct($nom, $prenom, $sexe, $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = $dateNaissance;
    }
    public function getNom() 
    {
        return $this->nom;
    }
    public function getPrenom() 
    {
        return $this->prenom;
    }  
    public function getSexe() 
    {
        return $this->sexe;
    }
    public function getDateNaissance() 
    {
        return $this->dateNaissance;
    }
}
?>