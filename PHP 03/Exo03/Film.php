<?php
class Film
{
    protected string $_titre;
    protected string $_dateSortie;
    protected int $_duree;
    protected Realisateur $_realisateur;
    protected string $_synopsis;
    protected string $_genre;
    protected $_castings =[];
    public function __construct(string $titre, string $dateSortie, int $duree, string $synopsis, string $genre, Realisateur $realisateur) 
    {
        $this->_realisateur = $realisateur;
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_duree = $duree;
        $this->_synopsis = $synopsis;
        $this->_genre = $genre;
        $this->_realisateur->ajouterFilmRealise($this);
    }
    /*-----------------SeTTERS-------------------*/
    public function setTitre(string $titre)
    {
        $this->_titre = $titre;
    }
    public function setDateSortie(string $dateSortie)
    {
        $this->_dateSortie = $dateSortie;
    }
    public function setDuree(int $duree)
    {
        $this->_duree = $duree;
    }
    public function setGenre(string $genre)
    {
        $this->_genre = $genre;
    }
    public function setSynopsis(string $synopsis)
    {
        $this->_synopsis = $synopsis;
    }
    /*------------GETTERS -----------------*/
    public function getTitre() : string
    {
        return $this->_titre;
    }
    public function getDateSortie() : string
    {
        return $this->_dateSortie;
    }
    public function getDuree() : int
    {
        return $this->_duree;
    }
    public function getSynopsis() : string
    {
        return $this->_duree;
    }
// ______________________________________________________METHODES____________________________________________
      public function ajouterCasting(Casting $casting) 
    {
        $this->_castings[] = $casting;
    }
    public function afficherReal()
    {
        $result = $this->_realisateur->getPrenom();
        return $result;
    }
    public function afficherCasting()
{
    $result = "Film : " . $this->_titre . "<br>";
    foreach($this->_castings as $casting)
    {
        $result .= $casting->getRole() . " a été incarné par " . $casting->getActeur() . "<br>";
    }
    return $result;
}    
}
?>