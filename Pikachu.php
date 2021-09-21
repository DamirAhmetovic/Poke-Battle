<?php
class Pikachu extends pokemon
{
  public function __construct()
  {
    $name = 'Pikachu';
    $type = 'Lightning';
    $starthealth = 60;
    $attack = array('Electric ring', 'Pika Punch');
    $weakness = 'fire';
    $resistance = 'fighting';

    parent::__construct($name, $starthealth, $attack, $type, $weakness, $resistance);
  }
}
