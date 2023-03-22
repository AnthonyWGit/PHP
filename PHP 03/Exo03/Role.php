<?php
class Role 
{
    public string $name;
    public Acteur $acteurs;
    public function __construct($name, Acteur $acteurs)
    {
        $this->name = $name;
        $this->acteurs->addRole($this);
    }
}