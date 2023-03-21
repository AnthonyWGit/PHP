<?php
class CatalogueFilms 
{
    public $films = array();
    public $acteurs = array();
    public $realisateurs = array();
    
    function ajouterFilm($film) 
    {
        $this->films[] = $film;
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
}