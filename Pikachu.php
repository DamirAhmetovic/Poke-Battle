<?php
class Pikachu extends pokemon
{
  public function __construct($name)
  {
    $this->name = $name;
    $type = 'Lightning';
    $starthealth = 60;
    $attack1 = new attack('Electric Ring', 50);
    $attack2 = new attack('Pika Punch', 20);
    $weakness = new weakness('fire', 1.5);
    $resistance = new resistance('fighting', 20);

    parent::__construct($name, $starthealth, $attack1, $attack2, $type, $weakness, $resistance);
  }
}
