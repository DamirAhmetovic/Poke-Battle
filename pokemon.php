<?php

class pokemon
{
    public $name;
    public $starthealth;
    public $attack1;
    public $attack2;
    public $health;
    public $type;
    public $weakness;
    public $resistance;

    public function __construct($name, $starthealth, $attack1, $attack2, $type, $weakness, $resistance)
    {
        $this->name = $name;
        $this->starthealth = $starthealth;
        $this->attack = $attack1;
        $this->attack = $attack2;
        $this->type = $type;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($NewName)
    {
        $this->name = $NewName;
    }
}
