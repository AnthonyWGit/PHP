<?php
Class Film
{
    protected string $titre;
    protected string $dateSortie;
    protected string $duree;
    protected Realisateur $realisateur;
    protected string $synopsis;
    protected string $genre;
    protected $casting =[];
    public function __construct(string $titre, string $dateSortie, string $duree, string $synopsis, string $genre, Realisateur $réalisateur) 
    {
        $this->titre = $titre;
        $this->dateSortie = $dateSortie;
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->genre = $genre;
        $this->realisateur->ajouterFilmRealise($this);
    }
      public function ajouterActeur($acteur, $role) 
    {
        $this->casting[] = ['actor' => $acteur, 'role' => $role];
    }
    public function afficherReal()
    {
        $result = "Réal : ".$this->realisateur. ".<br>";
        $result .= "Date Parution : ".$this->dateSortie.".<br>";
        $result .= "Genre : ".$this->genre. ".<br>";
        $result .= "Nom du film : ".$this->titre." $.<br>";
        return $result;
    }
}
?>