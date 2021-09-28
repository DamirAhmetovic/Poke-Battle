<?php
class Charmeleon extends pokemon
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->type = 'fire';
        $this->starthealth = 60;
        $this->attacks = [];
        $this->attack1 = new attack('head butt', 10, 'normal');
        $this->attack2 = new attack('flare', 30, 'fire');
        $this->weakness = new weakness('water', 2);
        $this->resistance = new resistance('lightning', 10);

        parent::__construct();
    }
}
