<?php
class Charmeleon extends pokemon
{
    public function __construct()
    {
        $name = 'Charmeleon';
        $type = new EnergyType('fire');
        $starthealth = 60;
        $attack = array('Flare','head butt');

        parent::__construct($name, $starthealth, $attack, $type);
    }
}

?>


<!-- $attacks = array(
                'head butt' => new attack ('headbutt', 10),
                'flare' => new attack ('flare', 30)
            ); -->