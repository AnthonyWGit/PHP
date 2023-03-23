<?php
class Casting
{
    public Role $_role;
    public Film $_film;
    public Acteur $_acteur;
    
    function __construct(Role $role, Film $film, Acteur $acteur)
    {
        $this->_role = $role;
        $this->_film = $film;
        $this->_acteur = $acteur;
        $this->_acteur->ajouterCasting($this);
        $this->_film->ajouterCasting($this);
        $this->_role->ajouterCasting($this);
    }
// GETTERS 

    public function getRole() : string
    {
        return $this->_role;
    }
    public function getFilm() : string
    {
        return $this->_film;
    }
    public function getActeur() : string
    {
        return $this->_acteur;
    }
    /*
    function ajouterFilm($film) 
    
    {
        $this->_films[] = $film;
        $realisateur = $film->realisateur;
        $realisateur->ajouterFilm($film);
        foreach ($film->acteurs as $acteur) {
            if (!isset($this->acteurs[$acteur->nom])) 
            {
                $this->acteurs[$acteur->nom] = $acteur;
            }
            $this->acteurs[$acteur->nom]->ajouterRole(key($acteur->roles), $film);
        }
        if (!isset($this->realisateurs[$realisateur->nom])) 
        {
            $this->realisateurs[$realisateur->nom] = $realisateur;
        }
    }
    */
}
?>