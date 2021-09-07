<?php

class pokemon
{
    public $name;
    public $starthealth;
    public $attack;
    public $health;
    public $type;
    public $weakness;
    public $resistance;

    public function __construct($name, $starthealth, $attack, $type, $weakness, $resistance)
    {
        $this->name = $name;
        $this->starthealth = $starthealth;
        $this->attack = $attack;
        $this->type = $type;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
}
