<?php

class pokemon
{
    public $name;
    public $starthealth;
    public $attacks;
    public $health;
    public $type;
    public $weakness;
    public $resistance;

    public function __construct()
    {
        
    }

    function getName()
    {
        return $this->name;
    }

    function setName($NewName)
    {
        $this->name = $NewName;
    }

    function getHP() {
        return $this->name . ' heeft ' . $this->starthealth . ' HitPoints';
    }

    public function Attack($target, $AttackNumber) {
        $a = $this->attacks[$AttackNumber];
        // if($AttackType === $WeaknessType)
    }
}
