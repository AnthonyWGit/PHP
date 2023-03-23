<?php
class Casting
{
    public Role $_role;
    public Film $_film;
    public Acteur $_acteurs;
    
    function __construct(Role $role, Film $film, Acteur $acteurs)
    {
        $this->_role = $role;
        $this->_film = $film;
        $this->_acteurs = $acteurs;
        $this->_acteurs->addCasting($this);
    }
    function getCasting() 
    {
        $casting = array();
        foreach ($this->_acteurs as $acteur) 
        {
            $casting[$acteur->nom] = array(
                'prenom' => $acteur->prenom,
                'sexe' => $acteur->sexe,
                'dateNaissance' => $acteur->dateNaissance,
                'roles' => $acteur->roles
            );
        }
        return $casting;
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