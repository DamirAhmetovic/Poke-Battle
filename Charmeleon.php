<?php
class Charmeleon extends pokemon
{
    public function __construct()
    {
        $name = 'Charmeleon';
        $type = 'fire';
        $starthealth = 60;
        $attack = array('Flare', 'head butt');
        $weakness = 'water';
        $resistance = 'lightning';

        parent::__construct($name, $starthealth, $attack, $type, $weakness, $resistance);
    }
}
