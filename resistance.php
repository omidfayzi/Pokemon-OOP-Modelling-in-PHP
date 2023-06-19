<?php
class Resistance {
    public $energyType;
    public $value;

    public function __construct(EnergyType $energyType, $value) {
        $this->energyType = $energyType;
        $this->value = $value;
    }
}
