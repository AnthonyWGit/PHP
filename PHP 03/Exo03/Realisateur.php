<?php
class Realisateur extends Personne
{
  protected array $_filmsRealises;
  public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) 
  {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    $this->_filmsRealises = array();
  }
  public function ajouterFilmRealise($film) 
  {
    $this->_filmsRealises[] = $film;
  }
  public function getFilmsRealises()
  {
    return $this->_filmsRealises;
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