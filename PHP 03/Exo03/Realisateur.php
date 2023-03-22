<?php
class Realisateur extends Personne
{
  protected $filmsRealises;
  public function __construct($nom, $prenom, $sexe, $dateNaissance) 
  {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    $this->filmsRealises = array();
  }
  public function ajouterFilmRealise($film) 
  {
    $this->filmsRealises[] = $film;
  }
  public function getFilmsRealises()
  {
    return $this->filmsRealises;
  }

}
?>