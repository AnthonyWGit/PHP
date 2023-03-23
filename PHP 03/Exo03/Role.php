<?php
class Role 
{
    public string $_role;
    public array $_roles;
    public array $_castings;
    public function __construct(string $role)
    {
        $this->_castings = [];
        $this->_role = $role;
        $this->_roles = [];
    }
    public function getRole() : string
    {
        return $this->_role;
    }
    public function setRole($role)
    {
        $this->_role = $role;
    }
    public function addCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    public function afficherActeurRole()
    {
        $result = "Ils ont joué dans ";
        foreach ($this->_castings as $casting)
        {
            $result .= $casting->getActeur()."<br>";
        }
        return $result;
    }
}
?>