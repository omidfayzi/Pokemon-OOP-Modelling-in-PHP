<?php
class Weakness {
    public $energyType;
    public $multiplier;

    public function __construct(EnergyType $energyType, $multiplier) {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }
}