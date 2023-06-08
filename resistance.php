<?php

class Resistance {
    private $energyType;
    private $value;
    
    function __construct($energyType, $value) {
        $this->energyType = $energyType;
        $this->value = $value;
    }

    public function getEnergyType() {
        return $this->energyType;
    }

    public function getValue() {
        return $this->value;
    }
}
?>
