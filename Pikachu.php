<?php 
    class Pikachu extends pokemon {
        Public function __construct()
        {
            $name = 'Pikachu';
            $type = 'Lightning';
            $starthealth = 60;
            $attack = 'Electric ring'; 

          parent::__construct($name, $starthealth, $attack, $type);
        }
    }

?>
