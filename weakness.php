<?php
class weakness
{
    public $WeaknessType;
    public $multipier;

    public function __construct($WeaknessType, $multiplier)
    {
        $this->WeaknessType = $WeaknessType;
        $this->multiplier = $multiplier;
    }
}
