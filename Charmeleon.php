<?php
class Charmeleon extends pokemon
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->type = 'Fire';
        $this->starthealth = 60;
        $this->health = 60;
        $this->attacks = [];
        $this->attacks[] = new attack('Flare', 30, 'Fire');
        $this->attacks[] = new attack('Head Butt', 10, 'Normal');
        $this->weakness = new weakness('Water', 2);
        $this->resistance = new resistance('Lightning', 10);

        parent::__construct();
    }
}
