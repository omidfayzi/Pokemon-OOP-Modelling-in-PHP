<?php

class Weakness {
    private $energyType;
    private $multiplier;
    
    function __construct($energyType, $multiplier) {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }

    public function getEnergyType() {
        return $this->energyType;
    }

    public function getMultiplier() {
        return $this->multiplier;
    }
}

?>
