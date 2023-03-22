<?php
class Role 
{
    public string $_nom;
    public Acteur $_acteur;
    public function __construct($name, Acteur $acteur)
    {
        $this->_acteur = $acteur;
        $this->_nom = $name;
        $this->_acteur->addRole($this);
    }
}
?>