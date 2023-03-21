<?php
class Role {
    public $name;
    public $actors = array();

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function addActor($actor)
    {
        $this->actors[] = $actor;
        $actor->roles[] = $this;
    }
}