<?php
class resistance
{
    public $ResistanceType;
    public $waarde;

    public function __construct($ResistanceType, $waarde)
    {
        $this->ResistanceType = $ResistanceType;
        $this->waarde = $waarde;
    }
}
