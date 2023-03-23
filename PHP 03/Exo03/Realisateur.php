<?php
class Realisateur extends Personne
{
  protected array $filmsRealises;
  public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) 
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
  public function afficherFilmo()
  {
  $result = "<p>". $this->getNom() . " " . $this->getPrenom() . " a réalisé :</p>";
  foreach($this->_filmsRealises as $film)
  {
      $result .= $film->getTitre() . "<br>";
  }
  return $result;
  }
}
?>