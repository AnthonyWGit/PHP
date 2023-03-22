<?php
class Acteur extends Personne
{
  protected array $roles;
  protected Role $role;
  protected string $film;
  public function __construct($nom, $prenom, $sexe, $dateNaissance) 
  {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    $this->roles = array();
  }  
  // PRENDRE UN ACTEUR / METTRE UN FILM DANS LA RRAY ROLES/
  public function addRole(Role $role) 
  {
    $this->roles[] = $role;
  }
  public function getRoles() 
  {
    return $this->roles;
  }
}
?>