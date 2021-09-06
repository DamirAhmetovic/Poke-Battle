<?php 
    class Pikachu extends pokemon {
        Public function __construct()
        {
            $name = 'Pikachu';
            $type = 'Lightning';
            $starthealth = 60;
            $attack = array('Electric ring', 'Pika Punch'); 

          parent::__construct($name, $starthealth, $attack, $type);
        }
    }
