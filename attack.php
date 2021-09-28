<?php 
    class attack
    {
        public $AttackName;
        public $damage;
        public $AttackType;
    
        public function __construct($AttackName, $damage, $AttackType)
        {
            $this->AttackName = $AttackName;
            $this->damage = $damage;
            $this->AttackType = $AttackType;
        }
    }
