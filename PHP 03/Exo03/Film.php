<?php
Class Film
{
    protected string $titre;
    protected string $dateSortie;
    protected string $duree;
    protected Realisateur $realisateur;
    protected string $synopsis;
    protected string $genre;
    protected Acteur $acteurs;
    protected $casting =[];
    public function __construct(string $titre, string $dateSortie, string $duree, string $realisateur, string $synopsis, string $genre, Realisateur $réalisateur, Acteur $acteur) 
    {
        $this->titre = $titre;
        $this->dateSortie = $dateSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->synopsis = $synopsis;
        $this->genre = $genre;
        $this->acteurs = [];
    }
      public function ajouterActeur($acteur, $role) 
    {
        $this->casting[] = ['actor' => $acteur, 'role' => $role];
    }

    public function getActorsForRole($roleName) 
    {
        foreach ($this->roles as $role) 
        {
            if ($role->name == $roleName) 
            {
                $actors = array();
                foreach ($role->actors as $actor)
                {
                    $actors[] = $actor->name . ' ' . $actor->surname;
                }
                return $actors;
            }
        }
        return null;
    }
    function getCasting() 
    {
        $casting = array();
        foreach ($this->acteurs as $acteur) 
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
}