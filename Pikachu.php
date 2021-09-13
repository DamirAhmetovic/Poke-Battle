<?php
class Pikachu extends pokemon
{
  public function __construct()
  {
    $name = 'Pikachu';
    $type = 'Lightning';
    $starthealth = 60;
    $attack = array('Electric ring', 'Pika Punch');
    $weakness = new weakness('fire', 2);
    $resistance = new resistance('fighting', 20);

    parent::__construct($name, $starthealth, $attack, $type, $weakness, $resistance);
  }
}
