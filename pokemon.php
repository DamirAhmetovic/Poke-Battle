<?php

class pokemon{
    public $name;
    public $starthealth;
    public $attack;
    public $health;
    public $type;

    function __construct($name, $starthealth, $type )
    {
        $this->name = $name;
        $this->starthealth = $starthealth;
        $this->type = $type;    
    }
}
?>



