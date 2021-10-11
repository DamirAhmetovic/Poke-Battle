<?php

class pokemon
{
    protected $name;
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
        return $this->name . ' has ' . $this->health . ' HitPoints';
    }

    public function getHealthPoints(){
        return $this->health;
    }

    public function Attack($target, $AttackNumber) {
        $a = $this->attacks[$AttackNumber];
        $HealthAfterAttack = $target->getHealthPoints();
        
        if($a->AttackType == $target->weakness->WeaknessType){
            $dmgtotal = $a->damage * $target->weakness->multiplier;
            $HealthAfterAttack=$target->health - $dmgtotal;
            $target->setHP($HealthAfterAttack);
        }

        else if($a->AttackType == $target->resistance->ResistanceType){
            $dmgtotal = $a->damage / $target->resistance->waarde;
            $HealthAfterAttack=$target->health - $dmgtotal;
            $target->setHP($HealthAfterAttack);
        }

        else{
            $dmgtotal = $a->damage;
            $HealthAfterAttack=$target->health - $dmgtotal; 
            $target->setHP($HealthAfterAttack);
            var_dump($HealthAfterAttack);
        }

        echo $a->AttackName. " does a total damage of: ". $dmgtotal. " damage <br>". PHP_EOL;

        if ($target->health < 0){ 
            $target->setHP(0);
        }

        echo $target->getHP(). "<br> <br>";

        if ($target->health < 1){
            echo $target->name . ' has been eliminated!';
            die;
        }

    }
}