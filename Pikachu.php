<?php
class Pikachu extends pokemon
{
  public function __construct($name)
  {
    $this->name = $name;
    $this->type = 'Lightning';
    $this->starthealth = 60;
    $this->attacks = [];
    $this->attacks[] = new attack('Electric Ring', 50, 'lightning');
    $this->attacks[] = new attack('Pika Punch', 20, 'lightning');
    $this->weakness = new weakness('fire', 1.5);
    $this->resistance = new resistance('fighting', 20);

    parent::__construct();
  }
}
