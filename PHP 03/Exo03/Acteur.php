<?php
class Acteur extends Personne
{
  protected Role $_role;
  protected array $_castings; // $_castingS : c'est tout l'ensemble des casting donc tous les films dans lesquels l'acteur a joué
  public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) 
  {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    $this->_castings = [];
  }  
  // PRENDRE UN ACTEUR / METTRE UN FILM DANS LA RRAY ROLES/
  public function addCasting(Casting $casting) 
  {
    $this->_castings = $casting;
  }
  public function getCasting() 
  {
    return $this->_castings;
  }
  public function afficherFilmoActeur()
  {
    $result .= $this->getNom()." ".$this->getPrenom(). "a joué dans";
    foreach ($this->_castings as $casting)
    {
      $result.=$casting->getFilmsRealises()."<br";
    }
    return $result;
  }
}
?>