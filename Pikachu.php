<?php
class Pikachu extends pokemon
{
  public function __construct($name)
  {
    $this->name = $name;
    $this->type = 'Lightning';
    $this->starthealth = 60;
    $this->health = 60;
    $this->attacks = [];
    $this->attacks[] = new attack('Electric Ring', 50, 'Lightning');
    $this->attacks[] = new attack('Pika Punch', 20, 'Lightning');
    $this->weakness = new weakness('Fire', 1.5);
    $this->resistance = new resistance('Fighting', 20);

    parent::__construct();
  }
}
