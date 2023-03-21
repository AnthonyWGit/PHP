<?php
class Acteur extends Personne
{
    protected $roles;
  
    public function __construct($lastName, $firstName, $gender, $birthdate) 
    {
      parent::__construct($lastName, $firstName, $gender, $birthdate);
      $this->roles = array();
    }
  
    public function addRole($role, $movie) 
    {
      $this->roles[$role] = $movie;
    }
  
    public function getRoles() 
    {
      return $this->roles;
    }
  }
    