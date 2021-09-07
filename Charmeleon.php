<?php
class Charmeleon extends pokemon
{
    public function __construct()
    {
        $name = 'Charmeleon';
        $type = 'fire';
        $starthealth = 60;
        $attack = array('Flare','head butt');
        $weakness = new weakness('water', 2);
        $resistance = new resistance('Lightning', 10);

        parent::__construct($name, $starthealth, $attack, $type, $weakness, $resistance);
    }
}
