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
        $this->health = $NewHealth;
    }

    function getHP() {
        return $this->name . ' heeft ' . $this->health . ' HitPoints';
    }

    public function Attack($target, $AttackNumber) {
        $a = $this->attacks[$AttackNumber];

        
        if($a->AttackType == $target->weakness->WeaknessType){
            $dmgtotal = $a->damage * $target->weakness->multiplier;
            $HealthAfterAttack=$target->starthealth - $dmgtotal;
        }

        if($a->AttackType == $target->resistance->ResistanceType){
            $dmgtotal = $a->damage - $target->resistance->waarde;
            $HealthAfterAttack=$target->starthealth - $dmgtotal;
            var_dump($dmgtotal);
        }

        else{
            $dmgtotal = $a->damage;
            $HealthAfterAttack=$target->starthealth - $dmgtotal; 
        }

        $target->setHP($HealthAfterAttack);

        
    }
}
