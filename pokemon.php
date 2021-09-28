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

    function setHP($NewHealth) {
        $this->starthealth = $NewHealth;
    }

    function getHP() {
        return $this->name . ' heeft ' . $this->starthealth . ' HitPoints';
    }

    public function Attack($target, $AttackNumber) {
        $a = $this->attacks[$AttackNumber];

        $target->AttackValues($damage);
    }

    public function AttackValues(){
        if($AttackType == $WeaknessType){
            $dmgtotal = $damage * $multiplier;
            $DamageAfterAttack=$this->starthealth - $dmgtotal;
        }

        if($AttackType == $ResistanceType){
            $dmgtotal = $damage - $waarde;
            $damageAfterAttack=$this->starthealth - $dmgtotal;
        }

        else if($AttackType !== $WeaknessType or $ResistanceType){
            $dmgtotal = $damage;
            $damageAfterAttack=$this->starthealth - $dmgtotal; 
        }

        $this->setHP($damageAfterAttack);
    }
}
