<?php
class Charmeleon extends pokemon
{
    public function __construct($name)
    {
        $this->name = $name;
        $type = 'fire';
        $starthealth = 60;
        $attack1 = new attack('head butt', 10);
        $attack2 = new attack('flare', 30);
        $weakness = new weakness('water', 2);
        $resistance = new resistance('lightning', 10);

        parent::__construct($name, $starthealth, $attack1, $attack2, $type, $weakness, $resistance);
    }
}
