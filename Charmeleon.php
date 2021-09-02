<?php 
    class Charmeleon extends pokemon {
        Public function __construct()
        {
            $name = 'Charmeleon';
            $type = 'Fire';
            $starthealth = 60;
            $attack = 'Flare'; 

          parent::__construct($name, $starthealth, $attack, $type);
        }
    }

?>