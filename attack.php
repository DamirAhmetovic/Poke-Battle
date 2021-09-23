<?php 
    class attack
    {
        public $AttackName;
        public $damage;
    
        public function __construct($AttackName, $damage)
        {
            $this->attack = $AttackName;
            $this->damage = $damage;
        }
    }
