<?php

class pokemon{
    public $name;
    public $starthealth;
    public $attack;
    public $health;
    public $type;

    public function __construct($name, $starthealth, $attack, $type )
    {
        $this->name = $name;
        $this->starthealth = $starthealth;
        $this->attack = $attack;
        $this->type = $type;    
    }
}
